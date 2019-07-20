<?php

$servername = "localhost";
$username = "fipe_user";
$password = "12345678";
$dbname = "fipe";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>