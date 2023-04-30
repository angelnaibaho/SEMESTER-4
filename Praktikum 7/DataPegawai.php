<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "dbPegawai";

//Buat koneksi
$conn = MySQLi_connect($servername, $username, $password, $dbname);

// Cek koneksi
if (!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
}

// membuat tabel pegawai
$sql = "CREATE TABLE pegawai (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    NAMA VARCHAR(200) NOT NULL,
    TANGGAL_LAHIR DATE NOT NULL, 
    JENIS_KELAMIN TEXT NOT NULL,
    ALAMAT TEXT NOT NULL,
    NOMOR_TELEPON INT (13) NOT NULL,
    EMAIL VARCHAR(50) NOT NULL, 
    PENDIDIKAN_TERAKHIR TEXT (3) NOT NULL,
    GAJI DECIMAL (10,2) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Table pegawai created successfully <br>";
} else{
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

// membuat tabel jabatan
$sql = "CREATE TABLE jabatan (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    nama_jabatan VARCHAR(100) NOT NULL
)";
if(mysqli_query($conn, $sql)){
    echo "Table jabatan created successfully <br>";
} else{
    echo "Error creating table: " . mysqli_error($conn) . "\n";
}

// membuat tabel pegawai_jabatan
$sql = "CREATE TABLE pegawai_jabatan (
    id INT(11) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    pegawai_id INT(11) NOT NULL,
    jabatan_id INT(11) NOT NULL,
    FOREIGN KEY (pegawai_id) REFERENCES pegawai(id),
    FOREIGN KEY (jabatan_id) REFERENCES jabatan(id)
)";

// menyimpan data pegawai
$sql = "INSERT INTO pegawai (nama, tanggal_lahir, jenis_kelamin, alamat, nomor_telepon, email, pendidikan_terakhir, gaji) 
        VALUES ('John Xie', '1990-01-01', 'Laki-laki', 'Jl. Greenlake', '08123456123', 'john.zel@example.com', 'S1', 5000000),
        ('Jennie Jane', '1997-02-02', 'Perempuan', 'Jl. Grandwisata', '08123999999', 'jennie.jane@example.com', 'S1', 6000000)"
        ;
        

if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil disimpan <br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//menghapus data pegawai
$sql = "DELETE FROM pegawai WHERE id=1";

if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil dihapus <br>";
} else {
    echo "Error deleting record: " . mysqli_error($conn);
}

// mengubah data pegawai
$sql = "UPDATE pegawai SET gaji=7000000 WHERE id=2";

if (mysqli_query($conn, $sql)) {
    echo "Data pegawai berhasil diubah <br> <br>";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}

// menampilkan data pegawai
$sql = "SELECT * FROM pegawai";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<br> - ID: " . $row["id"] . " <br> - Nama: " . $row["NAMA"] . "<br> - Tanggal Lahir: " . $row["TANGGAL_LAHIR"] . "<br> - Jenis Kelamin: " . $row["JENIS_KELAMIN"] . "<br> - Alamat: " . $row["ALAMAT"] . "<br> - Nomor Telepon: " . $row["NOMOR_TELEPON"] . "<br> - Email: " . $row["EMAIL"] . "<br> - Pendidikan Terakhir: " . $row["PENDIDIKAN_TERAKHIR"] . "<br> - Gaji: " . $row["GAJI"] . "<br> <br>";
    }
} else {
    echo "Tidak ada data pegawai";
}

    MySQLi_close($conn);
?>