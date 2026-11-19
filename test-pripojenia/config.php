<?php
$connection = mysqli_connect("localhost", "root", "root", "testik");

if(!$connection){
    echo "error"; . mysqli_connect_error();
}else{
    echo "success";
}
?>