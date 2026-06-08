<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Mahasiswa</title>
    <link rel="stylesheet" href="styless.css">
</head>
<body>
    <h1 align="center">
            WEB TI UNIMUS
        </h1>
        <table border="1" align="center" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>
                    <a href=index.php>Home</a>
                </td>
                <td>
                    <a href=biodata.php>Biodata</a>
                </td>
                <td>
                    <a href=contact.php>Contact</a>
                </td>
                <td>
                    <a href="mahasiswa.php">Data Mahasiswa</a>
                </td>
            </tr>
        </table>
        <h2 align="center">
            Data Mahasiswa
        </h2>
        <a href=" Tambahandata.php">Tambahdata</a>
        <table align="center" border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <th rowspan="2">No</th>
                <th rowspan="2">Nama</th>
                <th rowspan="2">NIM</th>
                <th rowspan="2">Foto</th>
                <th colspan="3">Nilai</th>
                <!-- <td>Baris 1, Kolom 2</td>  -->
            </tr>
            <tr>
                <!-- <td>Baris 2, Kolom 1</td> -->
                <th>UTS</th>
                <th>UAS</th>
                <th>Tugas</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Abelare Putu Utomo</td>
                <td>13242520033</td>
                <td><img src="assets/image/alok.jpg" alt="alok.jpg" width="200px"></td>
            </tr>
        </table>
        <hr>
        <table align="center" border="1" cellspacing="5px" cellpadding="10px">
            <tr>
                <td>1,1</td>
                <td>1,2</td>
                <td>1,3</td>
                <td>1,4</td>
            </tr>
            <tr>
                <td>2,1</td>
                <td colspan="2" rowspan="2"></td>
                <!-- <td>2,3</td> -->
                <td>2,4</td>
            </tr>
            <tr>
                <td>3,1</td>
                <!-- <td>3,2</td> -->
                <!-- <td>3,3</td> -->
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