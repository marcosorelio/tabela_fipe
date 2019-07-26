<?php

$servername = "localhost";
$username = "fipe_user";
$password = "12345678";
$dbname = "fipe";

$conn = mysqli_connect($servername, $username, $password, $dbname);

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>