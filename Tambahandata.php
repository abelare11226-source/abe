<?php

require 'fungsi.php';

if(isset($_POST["kirim"]))
{
    $nama    = $_POST["nama"];
    $nim     = $_POST["nim"];
    $prodi   = $_POST["jurusan"];
    $email   = $_POST["email"];
    $nohp    = $_POST["nohp"];
    $foto    = $_POST["foto"];

    $query = "INSERT INTO mahasiswa
            (nama,nim,jurusan,email,no_hp,foto)
            VALUES
            ('$nama','$nim','$prodi','$email','$nohp','$foto')";

    mysqli_query($koneksi, $query);
}

?>


<!DOCTYPE html>
<html>
<head>
    <title>Form Mahasiswa</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>

<form>
    <table>
        <form>
        <table>
            <tr>
                <td><label for="nama">Nama</label></td>
                <td>:</td>
                <td><input type="text" name="cari" id="cari"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="cari" id="cari"></td>
            </tr>
            <tr>
                <td><label for="password">jurusan</label></td>
                <td>:</td>
                <td><input type="jurusan" name="password" id="jurusan"></td>
            </tr>
            <tr>
                <td><label for="email">Email</label></td>
                <td>:</td>
                <td><input type="email" name="email" id="email"></td>
            </tr>
            <tr>
                <td><label for="tel">NO.HP</label></td>
                <td>:</td>
                <td><input type="tel" name="number" id="number"></td>
            </tr>
            <tr>
                <td><label for="url">foto</label></td>
                <td>:</td>
                <td><input type="foto" name="url" id="foto"></td>
            </tr>
            <tr>
              
               
                <td colspan="3">
                    <button type="submit">Submit</button>
                </td>
            </tr>
        </table>
    </form>
    </table>
</form>

</body>
</html>

