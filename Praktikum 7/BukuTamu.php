<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "myTugas";

//Buat koneksi
$conn = MySQLi_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
}

//Membuat tabel Buku Tamu pada database myTugas
$sql = "CREATE TABLE BukuTamu (
    ID_BT INT(10) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL, 
    EMAIL VARCHAR(50) NOT NULL, 
    ISI TEXT NOT NULL
    )";
    
    if(MySQLi_query($conn, $sql)) {
        echo "New record created successfuly";
    } else {
        echo "Error: ".$sql. "<br>" . MySQLi_error($conn);
    }

    MySQLi_close($conn);
?>