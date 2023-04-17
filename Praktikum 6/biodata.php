<?php  
    $namalengkap = $_GET['namalengkap'];
    $namapanggilan = $_GET['namapanggilan'];
    $tanggal_lahir = $_GET['tanggal_lahir'];
    $tempatlahir = $_GET['tempatlahir'];
    $jenis_kelamin = $_GET['jenis_kelamin'];
    $umur = $_GET['umur'];
    $alamat = $_GET['alamat'];
    $agama = $_GET['agama'];

    echo "<h2> Biodata </h2>";
    echo "Nama Lengkap: $namalengkap"."<br>";
    echo "Nama Panggilan: $namapanggilan"."<br>";
    echo "Tanggal Lahir: $tanggal_lahir"."<br>";
    echo "Tempat Lahir: $tempatlahir"."<br>";
    echo "Jenis Kelamin: $jenis_kelamin"."<br>";
    echo "Umur: $umur"."<br>";
    echo "Alamat: $alamat"."<br>";
    echo "Agama: $agama"."<br>";
?>