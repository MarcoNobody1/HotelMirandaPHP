<?php
session_start();
require_once("config.php");
require_once("setup.php");


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

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    if (isset($_POST['firstname'])  && isset($_POST['surname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['specialrequest'])) {


        $firstname = htmlspecialchars($_POST['firstname']);
        $surname = htmlspecialchars($_POST["surname"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $orderdate = date('Y-m-d H:i');
        $checkin = htmlspecialchars($_SESSION['arrival']);
        $checkout = htmlspecialchars($_SESSION['departure']);
        $specialrequest = htmlspecialchars($_POST["specialrequest"]);
        $roomId = htmlspecialchars($_GET['id']);
        $price = $roomDetail['finalPrice'];
        $status = "Check In";



        $sql = "INSERT INTO booking (name, surname, email, phone, order_date, check_in, check_out, special_request, room_id, price, status) VALUES (?,?,?,?,?,?,?,?,?,?,?)";

        $stmt = $connection->prepare($sql);

        $stmt->bind_param("ssssssssiss", $firstname, $surname, $email, $phone, $orderdate, $checkin, $checkout, $specialrequest, $roomId, $price, $status);

        $stmt->execute();
        unset($_SESSION['arrival']);
        unset($_SESSION['departure']);

        if ($stmt->affected_rows > 0) {
            $notification = array("Thanks! Your booking is done.", "success", false, "Thanks for your time!");
        } else {
            $notification = array("Oops! Something's wrong. Try again later, please.", "error", false, "Error:");
        }

        header('Content-Type: application/json');
        echo json_encode(['notification' => $notification]);
        exit;
    }
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
