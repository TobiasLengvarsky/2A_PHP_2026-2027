<?php
$connection = mysqli_connect("localhost", "root", "root", "reservation_system");

if(!$connection){
    echo "error" . mysqli_connect_error();
}else{
    echo "success";
}
?>