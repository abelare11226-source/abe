```php
<?php
require 'fungsi.php';

$query = "SELECT * FROM mahasiswa";
$mahasiswas = tampildata($query);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>

    <h1 align="center">WEB TI UNIMUS</h1>

    <!-- Menu Navigasi -->
    <table border="1" align="center" cellspacing="5" cellpadding="10">
        <tr>
            <td><a href="index.php">Home</a></td>
            <td><a href="biodata.php">Biodata</a></td>
            <td><a href="contact.php">Contact</a></td>
            <td><a href="mahasiswa.php">Data Mahasiswa</a></td>
        </tr>
    </table>

    <h2 align="center">Data Mahasiswa</h2>

    <p align="center">
        <a href="Tambahandata.php">Tambah Data</a>
    </p>

    <!-- Tabel Mahasiswa -->
    <table align="center" border="1" cellspacing="5" cellpadding="10">
        <tr>
            <th>No</th>
            <th>Nama</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>No. HP</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>

        <?php $no = 1; ?>
        <?php foreach ($mahasiswas as $mhs) : ?>
            <tr>
                <td><?= $no++; ?></td>
                <td><?= $mhs['nama']; ?></td>
                <td><?= $mhs['nim']; ?></td>
                <td><?= $mhs['jurusan']; ?></td>
                <td><?= $mhs['email']; ?></td>
                <td><?= $mhs['no_hp']; ?></td>

                <td align="center">
                    <img src="assets/image/alok.jpg"
                         alt="Foto Mahasiswa"
                         width="100">
                </td>

                <td>
                    <a href="editdata.php?id=<?= $mhs['id']; ?>">
                        <button>Edit</button>
                    </a>

                    <a href="deletedata.php?id=<?= $mhs['id']; ?>"
                       onclick="return confirm('Yakin ingin menghapus data ini?');">
                        <button>Hapus</button>
                    </a>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>

    <hr>

    <!-- Contoh Tabel -->
    <table align="center" border="1" cellspacing="5" cellpadding="10">
        <tr>
            <td>1,1</td>
            <td>1,2</td>
            <td>1,3</td>
            <td>1,4</td>
        </tr>
        <tr>
            <td>2,1</td>
            <td colspan="2" rowspan="2"></td>
            <td>2,4</td>
        </tr>
        <tr>
            <td>3,1</td>
            <td>3,4</td>
        </tr>
        <tr>
            <td>4,1</td>
            <td>4,2</td>
            <td>4,3</td>
            <td>4,4</td>
        </tr>
    </table>

</body>
</html>
```
