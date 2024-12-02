<?php 

//deklarasi koneksi
include_once("koneksi.php");

//ambil semua data dari database

$ambil = mysqli_query($koneksi, "SELECT * FROM coba ORDER BY id ASC")
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD</title>
</head>
<body>
    
    <a href="add.php">Tambah</a><br><br>
    <table width='100%' border=1>
        <tr>
            <th>Nama</th>
            <th>Aksi</th>
        </tr>
        <?php
        while ($user = mysqli_fetch_array($ambil)){
            echo "<tr>";
            echo "<td>".$user['nama'];
            echo "<td><a href='edit.php?id=$user[id]'>Edit</a> | <a href='delete.php?id=$user[id]'>Delete</a></td></tr>";
        }

        ?>
    </table>


</body>
</html>