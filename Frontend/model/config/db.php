<?php
$host = 'localhost';
$dbName = 'ecom_db';
$username = 'root';
$password = ''; 

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
