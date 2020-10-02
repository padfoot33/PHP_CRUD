<?php
$serverName = "localhost";
$dbUser = ""; //Copy your dbUser from Database manager
$dbPass = ""; //enter your pass from Database manager
$dbName = ""; //Copy your dbName from Database manager
$conn = mysqli_connect($serverName, $dbUser, $dbPass, $dbName);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

echo "Connected successfully";
?>