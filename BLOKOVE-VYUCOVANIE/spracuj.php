<?php
require_once "config.php";

$arrival = $_POST["arrival"];
$departure = $_POST["departure"];
$room = $_POST["room"];
$guest = $_POST["guest"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$special = $_POST["special"];

if($room == "classic") {
    $room_id = 1;
} elseif($room == "deluxe") {
    $room_id = 2;
} elseif($room == "apartment") {
    $room_id = 3;
} else {
    die("Neplatný typ izby.");
}

$sql = "INSERT INTO reservations (arrival, departure, room_id, guest, fullname, email, phone, special) VALUES ('$arrival', '$departure', '$room_id', '$guest', '$fullname', '$email', '$phone', '$special')";

$result = mysqli_query($conn, $sql);

if ($result) {
    echo "Rezervácia bola úspešne uložená.";
} else {
    echo "Chyba pri ukladaní rezervácie: " . mysqli_error($conn);
}

?>