<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//Buat koneksi
$conn = MySQLi_connect($servername, $username, $password, $dbname);

// Check connection 
if(!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
}

$sql = "INSERT INTO liga (kode, negara, champion)
VALUES ('Jer', 'Jerman', '4'), ('Spa', 'Spanyol', '3'), ('Eng', 'English', '3')";

if (MySQLi_query($conn, $sql)) {
    echo "New record created successfully";
} else {
    echo "Error: ".$sql. "<br>" . MySQLi_error($conn);   
}

MySQLi_close($conn);
?>