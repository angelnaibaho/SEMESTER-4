<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myDB";

//Buat koneksi
$conn = MySQLi_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
}

//Membuat tabel liga pada database myDB
$sql = "CREATE TABLE liga (
    id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    kode VARCHAR(3) NOT NULL, 
    negara VARCHAR(30) NOT NULL, 
    champion int(3))";
    
    if(MySQLi_query($conn, $sql)) {
        echo "New record created successfuly";
    } else {
        echo "Error: ".$sql. "<br>" . MySQLi_error($conn);
    }

    MySQLi_close($conn);
    ?>