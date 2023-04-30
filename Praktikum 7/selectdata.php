<!DOCTYPE html>
<html>
<body>
    <?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "myDB";

    //Create connection
    $conn = MySQLi_connect($servername, $username, $password, $dbname);

    //Check connection
    if(!$conn) {
    die("Connection failed: " . MySQLi_connect_error());
    }

    $sql = "SELECT kode, negara, champion FROM liga";
    $result = MySQLi_query($conn, $sql);

    if(MySQLi_num_rows($result) > 0) {
        //output data of each row
        while ($row = MySQLi_fetch_assoc($result)) {
            echo "kode: ". $row["kode"]. " - Negara: ". $row["negara"]." ".$row["champion"]."<br>";
        }
    } else {
        echo "0 result";
    }

    MySQLi_close($conn)
    ?>
</body>
</html>