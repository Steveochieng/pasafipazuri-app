<?php
$servername = "localhost";
$username = "root";
$password = "";
$databasename="usafi_db";

// Create connection
$connection = new mysqli($servername, $username, $password,$databasename);

// Check connection
if ($connection->connect_error) {
    die("Connection failed:" . $connection->connect_error);
} 
//echo "Connected successfully";
?>