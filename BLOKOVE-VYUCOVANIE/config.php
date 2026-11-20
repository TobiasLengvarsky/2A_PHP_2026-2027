<?php
$hostname = "localhost";
$username = "root";
$password = "root";
$db = "reservation_system";

$conn = mysqli_connect($hostname, $username, $password, $db);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>