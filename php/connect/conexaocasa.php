<?php
$servername = "banco";
$database = "cadastro";
$username = "root";
$password = "12345";
$port = 3306;
// Create connection
$conn = mysqli_connect($servername, $username, $password, $database, $port);
// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

?>
