<?php
    $name = $_POST['name'];
    $email = $_POST['email'];
    include "waktu.php";

    if(empty($name) || empty($email)) {
        header('Location: datatidaklengkap.php');
    } else {
        echo "Name: $name"."<br>";
        echo "Email: $email"."<br>";
        echo "Terakhir Login : $date $time"."<br>";
    }
?>