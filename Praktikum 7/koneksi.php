<html>
    <head>
        <title>Koneksi Database MYSQL</title>
    </head>
    <body>
        <h1>Demo Koneksi Database MySQL</h1>
        <?php
        $con = MySQLi_connect("localhost","root","");

        // Check connection
        if(MySQLi_connect_errno()){
            echo "Failed to connect to MySQL: ". MySQLi_connect_error();
            exit();
        }
        ?>
    </body>
</html>