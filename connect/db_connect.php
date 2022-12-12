<?php
$servername = "localhost";
$username = "root";
$password = "vini";
$database = "copa";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
    echo 'Connection error: ' . mysqli_connect_error();
}
?>