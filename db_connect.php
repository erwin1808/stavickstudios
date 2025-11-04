<?php
$servername = "localhost";   // change if needed
$username   = "root";        // your MySQL username
$password   = "";            // your MySQL password
$dbname     = "stavickstudios"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
