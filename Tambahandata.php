```php
<?php
require 'fungsi.php';

if (isset($_POST['kirim'])) {

    $nama   = $_POST['nama'];
    $nim    = $_POST['nim'];
    $prodi  = $_POST['jurusan'];
    $email  = $_POST['email'];
    $no_hp  = $_POST['no_hp'];
    $foto   = $_POST['foto'];

    $query = "INSERT INTO mahasiswa
                (nama, nim, jurusan, email, no_hp, foto)
              VALUES
                ('$nama', '$nim', '$jurusan', '$email', '$no_hp', '$foto')";

    mysqli_query($koneksi, $query);

    if (mysqli_affected_rows($koneksi) > 0) {
        echo "
        <script>
            alert('Data berhasil ditambahkan!');
            window.location.href='mahasiswa.php';
        </script>";
    } else {
        echo "
        <script>
            alert('Data gagal ditambahkan!');
        </script>";

        echo mysqli_error($koneksi);
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Data Mahasiswa</title>
     <link rel="stylesheet" href="styless.css">
</head>
<body>

<h2>Tambah Data Mahasiswa</h2>

<form method="POST">

    <table>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td>
                <input type="text" name="nama" required>
            </td>
        </tr>

        <tr>
            <td>NIM</td>
            <td>:</td>
            <td>
                <input type="number" name="nim" required>
            </td>
        </tr>

        <tr>
            <td>Jurusan</td>
            <td>:</td>
            <td>
                <input type="text" name="prodi" required>
            </td>
        </tr>

        <tr>
            <td>Email</td>
            <td>:</td>
            <td>
                <input type="email" name="email" required>
            </td>
        </tr>

        <tr>
            <td>No HP</td>
            <td>:</td>
            <td>
                <input type="text" name="no_hp" required>
            </td>
        </tr>

        <tr>
            <td>Foto</td>
            <td>:</td>
            <td>
                <input type="text" name="foto">
            </td>
        </tr>

        <tr>
            <td colspan="3">
                <button type="submit" name="kirim">
                    Simpan
                </button>
            </td>
        </tr>
    </table>

</form>

</body>
</html>
```
