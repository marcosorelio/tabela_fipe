<?php

//Conexão USBServer
/*$servername = "localhost";
$username = "root";
$password = "usbw";
$dbname = "motor_total";
*/

$servername = "localhost";
$username = "marcos";
$password = "123";
$dbname = "motor_total";


$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {   
    die("Connection failed: " . mysqli_connect_error());
}
?>