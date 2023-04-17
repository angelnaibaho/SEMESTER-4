<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <center>
        <h1>Form Login</h1>
        <h3>Silahkan Isi Data Berikut Ini!</h3>
        <form method="POST" action="login.php">
            <table>
                <tr>
                    <td width="80">Name: </td>
                    <td><input type="text" id="name" name="name"></td>
                </tr>
                <tr>
                    <td width="80">Email: </td>
                    <td><input type="email" id="email" name="email"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="btnLogin" value="Login"></td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>