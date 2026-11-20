<?php
$arrival = $_POST["arrival"];
$departure = $_POST["departure"];
$room = $_POST["room"];
$guest = $_POST["guest"];
$fullname = $_POST["fullname"];
$email = $_POST["email"];
$phone = $_POST["phone"];
$special = $_POST["special"];

echo $arrival . " " . $departure . " " . $room . " " . $guest . " " . $fullname . " " . 
$email . " " . $phone . " " . $special;
?>