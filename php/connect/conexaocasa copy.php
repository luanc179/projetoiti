<?php
$servername = "localhost";
$database = "cadastro";
$username = "root";
$password = "17@L0g1st1c@";
$port = 3306;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>