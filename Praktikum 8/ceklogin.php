<?php
// Definisikan username dan password
$valid_username = "angel";
$valid_password = "angelcantik.";

// Ambil data dari form login
$username = $_POST['username'];
$password = $_POST['password'];

// Periksa apakah username dan password valid
if ($username == $valid_username && $password == $valid_password) {
	// Jika valid, redirect ke halaman welcome
	header("Location: formregist.php");
	exit();
} else {
	// Jika tidak valid, redirect kembali ke halaman login
	header("Location: index.php");
	exit();
}
?>