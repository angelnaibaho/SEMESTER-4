<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Biodata Sederhana Form</title>
</head>
<body>
    <center>
        <h1>Biodata</h1>
        <h3>Silahkan Lengkapi Biodata Anda Dibawah!</h5>
        <form method="GET" action="biodata.php">
            <table>
                <tr>
                    <td>Nama Lengkap: </td>
                    <td>
                        <input type="text" id="" name="namalengkap">
                    </td>
                </tr>
                <tr>
                    <td>Nama Panggilan: </td>
                    <td>
                        <input type="text" id="" name="namapanggilan">
                    </td>
                </tr>
                <tr>
                    <td>Tanggal Lahir: </td>
                    <td>
                        <input type="date" id="tanggal_lahir" name="tanggal_lahir"> <br>
                    </td>
                </tr>
                <tr>
                    <td>Tempat Lahir: </td>
                    <td>
                        <input type="text" id="" name="tempatlahir">
                    </td>
                </tr>
                <tr>
                    <label for="jenis_kelamin">Pilih Jenis Kelamin:</label>
                    <select id="jenis_kelamin" name="jenis_kelamin">
                    <option value="Laki-laki">Laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
                </tr>
                <tr>
                    <td>Umur: </td>
                    <td>
                        <input type="number" id="" name="umur">
                    </td>
                </tr>
                <tr>
                    <td>Alamat: </td>
                    <td>
                        <textarea id="" name="alamat"></textarea>
                    </td>
                </tr>
                <tr>
                    <td>Agama: </td>
                    <td>
                        <input type="text" id="" name="agama">
                    </td>
                </tr>

                <tr>
                    <td>
                        <input type="submit" name="simpan" value="Simpan">
                    </td>
                </tr>
            </table>
        </form>
    </center>
</body>
</html>