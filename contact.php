<?php
session_start();
require_once("setup.php");
require_once("config.php");
unset($_SESSION['arrival']);
unset($_SESSION['departure']);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (
        isset($_POST["name"]) && isset($_POST["email"]) && isset($_POST["phone"]) && isset($_POST["subject"]) && isset($_POST["message"])
    ) {
        $currentDateTime = date("Y-m-d H:i:s");
        $name = htmlspecialchars($_POST["name"]);
        $email = htmlspecialchars($_POST["email"]);
        $phone = htmlspecialchars($_POST["phone"]);
        $subject = htmlspecialchars($_POST["subject"]);
        $message = htmlspecialchars($_POST["message"]);
        $archived = false;

        $sql = "INSERT INTO contact (date, name, email, phone, subject, comment, archived) VALUES (?,?, ?, ?, ?, ?, ?)";

        $stmt = $connection->prepare($sql);

        $stmt->bind_param("sssssss", $currentDateTime, $name, $email, $phone, $subject, $message, $archived);

        $stmt->execute();

        if ($stmt->affected_rows > 0) {
            $notification = array("Thanks! Your message will be reviewed soon.", "success", false, "Thanks for your time!");
        } else {
            $notification = array("Oops! Something's wrong. Try again later, please.", "error", false, "Error:");
        }

        header('Content-Type: application/json');
        echo json_encode(['notification' => $notification]);
        exit;
    }
}


echo $blade->run("contact", ['notification' => $notification]);
