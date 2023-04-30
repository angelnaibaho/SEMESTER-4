<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection 
$conn = MySQLi_connect($servername, $username, $password);
//Check connection 
if (!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
}

//Create database 
$sql = "CREATE DATABASE dbPegawai";
if (MySQLi_query($conn, $sql)) {
    echo "Database created ssuccesfully";
} else {
    echo "Error creating database: " . MySQLi_error($conn);
}

MySQLi_close($conn);
?>