<?php
session_start();
require_once("config.php");
require_once("setup.php");



if (isset($_SESSION["arrival"]) && isset($_SESSION["departure"])) {

    $checkin =  $_SESSION['arrival'];
    $checkout =  $_SESSION['departure'];

    $query = "SELECT r.*,
    GROUP_CONCAT(DISTINCT p.photo_url) as photo,
    GROUP_CONCAT(a.amenity) as amenity
    FROM room r
    LEFT JOIN photos p ON r.id = p.room_id
    LEFT JOIN room_amenities ra ON r.id = ra.room_id
    LEFT JOIN amenity a ON ra.amenity_id = a.id
    WHERE r.availability = 'Available' AND discount != 0
    AND NOT EXISTS (
        SELECT 1
        FROM booking b
        WHERE r.id = b.room_id
        AND (
            ('$checkin' BETWEEN b.check_in AND b.check_out)
            OR ('$checkout' BETWEEN b.check_in AND b.check_out)
            OR (b.check_in BETWEEN '$checkin' AND '$checkout')
            OR (b.check_out BETWEEN '$checkin' AND '$checkout')
            )
    )
    GROUP BY r.id;
    ";
} else {

    $query = 'SELECT r.*,
    GROUP_CONCAT(DISTINCT p.photo_url) as photo,
    GROUP_CONCAT(a.amenity) as amenity
    FROM room r
    LEFT JOIN photos p ON r.id = p.room_id
    LEFT JOIN room_amenities ra ON r.id = ra.room_id
    LEFT JOIN amenity a ON ra.amenity_id = a.id
    WHERE discount != 0
    GROUP BY r.id;';
}


$result = $connection->query($query);
$discountedRooms = $result->fetch_all(MYSQLI_ASSOC);

foreach ($discountedRooms as &$room) {
    $room['discountedPrice'] = $room['price'] - ($room['price'] * ($room['discount'] / 100));
}

$randomRoomIndices = array_rand($discountedRooms, 5);
$randomRooms = array_intersect_key($discountedRooms, array_flip($randomRoomIndices));


$chunks = array_chunk($discountedRooms, 3);


echo $blade->run("offers", ['rooms' => $randomRooms, 'discountedRooms' => $chunks]);
