<?php
session_start();
require_once("config.php");
require_once("setup.php");


if ($_SERVER["REQUEST_METHOD"] == "GET") {
    if (isset($_GET['id'])) {

        $checkin = $_SESSION['arrival'];
        $checkout = $_SESSION['departure'];
        $id = htmlspecialchars($_GET['id']);

        $query0 = "SELECT r.*,
        GROUP_CONCAT(DISTINCT p.photo_url) as photo,
        GROUP_CONCAT(a.amenity) as amenity
        FROM room r
        LEFT JOIN photos p ON r.id = p.room_id
        LEFT JOIN room_amenities ra ON r.id = ra.room_id
        LEFT JOIN amenity a ON ra.amenity_id = a.id
        WHERE r.id = $id
        GROUP BY r.id;";
    }

    $result0 = $connection->query($query0);
    $roomDetail = $result0->fetch_assoc();
    $roomDetail['finalPrice'] = $roomDetail['price'] - ($roomDetail['price'] * ($roomDetail['discount'] / 100));

} else if ($_SERVER["REQUEST_METHOD"] == "POST") {
}


$query = 'SELECT r.*,
GROUP_CONCAT(DISTINCT p.photo_url) as photo,
GROUP_CONCAT(a.amenity) as amenity
FROM room r
LEFT JOIN photos p ON r.id = p.room_id
LEFT JOIN room_amenities ra ON r.id = ra.room_id
LEFT JOIN amenity a ON ra.amenity_id = a.id
WHERE r.availability = "Available" AND discount = 0
GROUP BY r.id;';

$result = $connection->query($query);
$allRooms = $result->fetch_all(MYSQLI_ASSOC);
$randomRoomIndices = array_rand($allRooms, 5);
$recommendedRooms = array_intersect_key($allRooms, array_flip($randomRoomIndices));
foreach ($recommendedRooms as &$room) {
    $room['discountedPrice'] = $room['price'] - ($room['price'] * ($room['discount'] / 100));
}


echo $blade->run("roomdetails", ['recommendedRooms' => $recommendedRooms, 'roomdetails' => $roomDetail, 'checkin' => $checkin, 'checkout' => $checkout]);
