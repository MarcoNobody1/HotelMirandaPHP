<?php
session_start();
require_once("config.php");
require_once("setup.php");

if (isset($_GET["arrival"]) && isset($_GET["departure"])) {
    $checkin = htmlspecialchars($_GET["arrival"]);
    $_SESSION['arrival'] = $checkin;
    $checkout = htmlspecialchars($_GET["departure"]);
    $_SESSION['departure'] = $checkout;

    $query = 'SELECT r.*,
    GROUP_CONCAT(DISTINCT p.photo_url) as photo,
    GROUP_CONCAT(a.amenity) as amenity
    FROM room r
    LEFT JOIN photos p ON r.id = p.room_id
    LEFT JOIN room_amenities ra ON r.id = ra.room_id
    LEFT JOIN amenity a ON ra.amenity_id = a.id
    WHERE r.availability = "Available"
    AND NOT EXISTS (
        SELECT 1
        FROM booking b
        WHERE r.id = b.room_id
        AND (
            ("$checkin" BETWEEN b.check_in AND b.check_out)
            OR ("$checkout" BETWEEN b.check_in AND b.check_out)
            OR (b.check_in BETWEEN "$checkin" AND "$checkout")
            OR (b.check_out BETWEEN "$checkin" AND "$checkout")
            )
    )
GROUP BY r.id;
';
} else {

    $query = 'SELECT r.*,
    GROUP_CONCAT(DISTINCT p.photo_url) as photo,
    GROUP_CONCAT(a.amenity) as amenity
    FROM room r
    LEFT JOIN photos p ON r.id = p.room_id
    LEFT JOIN room_amenities ra ON r.id = ra.room_id
    LEFT JOIN amenity a ON ra.amenity_id = a.id
    WHERE r.availability = "Available"
    GROUP BY r.id;
';
}



$result = $connection->query($query);

$rooms = $result->fetch_all(MYSQLI_ASSOC);

foreach ($rooms as &$room) {
    $room['discountedPrice'] = $room['price'] - ($room['price'] * ($room['discount'] / 100));
}

$chunks = array_chunk($rooms, 5);

echo $blade->run("rooms", ['rooms' => $chunks]);
