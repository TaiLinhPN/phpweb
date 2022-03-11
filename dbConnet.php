<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "shoppe";
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database,3300);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}



?>