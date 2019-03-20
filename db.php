<?php
$servername = "localhost";
$username = "micha386_cbt";
$password = "fuxg00gle";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";
?>