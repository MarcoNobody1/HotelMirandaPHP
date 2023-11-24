<?php
require_once("config.php");
require_once("setup.php");

$query = 'SELECT r.*,
GROUP_CONCAT(DISTINCT p.photo_url) as photo,
GROUP_CONCAT(a.amenity) as amenity
FROM room r
LEFT JOIN photos p ON r.id = p.room_id
LEFT JOIN room_amenities ra ON r.id = ra.room_id
LEFT JOIN amenity a ON ra.amenity_id = a.id
GROUP BY r.id;';

$result = $connection->query($query);
$allRooms = $result->fetch_all(MYSQLI_ASSOC);

foreach ($allRooms as &$room) {
    $room['discountedPrice'] = $room['price'] - ($room['price'] * ($room['discount'] / 100));
}

$randomRoomIndices = array_rand($allRooms, 5);
$randomRooms = array_intersect_key($allRooms, array_flip($randomRoomIndices));



$discountedRooms = array_filter($allRooms, function ($room) {
    return $room['discount'] !== 0;
});


foreach ($discountedRooms as &$room) {
    $room['discountedPrice'] = $room['price'] - ($room['price'] * ($room['discount'] / 100));
}

$chunks = array_chunk($discountedRooms, 3);


echo $blade->run("offers", ['rooms' => $randomRooms, 'discountedRooms' => $chunks]);
