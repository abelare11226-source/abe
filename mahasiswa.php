<?php

    // API
    $koneksi = mysqli_connect("localhost", "root", "", "abeweekly");
    
   $query = "SELECT * FROM mahasiswa";

   $result = mysqli_query ($koneksi, $query); /// lemari 
   // isi data

//    while($mhs = mysqli_fetch_object($result))
//     {
//         var_dump($mhs);
//     }


   /// ambil data (fetch) dari lemari
   /// mysqli_fetch_row array number
   /// mysqli_fetch_assoc 
   /// mysqli_fetch_array
   /// mysqli_fetch_
   

   

?>


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
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
                <th>Jurusan</th>
                <th>Email</th>
                <th>No. HP</th>
                <th>Foto</th>
                <th>Aksi</th>
            </tr>    
            <?php
            while($mhs = mysqli_fetch_assoc($result))
            {
            ?>
            <tr>
                <td>1</td>
                <td><?php echo $mhs ["nama" ]?></td>
                <td><?php echo $mhs ["nim" ]?></td>
                <td align= "center"><?php echo $mhs ["jurusan"] ?></td>
                <td align= "center"><?php echo $mhs ["email"] ?></td>
                <td align= "center"><?php echo $mhs ["no_hp"] ?></td>
                <td align= "center"><?php echo $mhs ["jurusan"] ?></td>
               
                <td><img src="assets/image/alok.jpg" alt="alok.jpg" width="100px"></td>
                <td>
                    <a href="editdata.php"><button>Edit</button></a>
                    <a href="deletedata.php"><button>hapus</button></a>
                <td>
            </tr>
            <?php
             };
            ?>
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