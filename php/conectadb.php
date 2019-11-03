<?php

//Conexão USBServer
$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "motor_total";

/*
$servername = "root";
$username = "fipe_user";
$password = "12345678";
$dbname = "fipe";
*/

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {   
    die("Connection failed: " . mysqli_connect_error());
}
?>