<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Data</title>
</head>
<body>
    <a href="index.php">Kembali</a>
    <br><br>

    <form action="add.php" method="post">
        <table width="25%" border=0>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr> 
				<td></td>
				<td><input type="submit" name="Submit" value="Tambah"></td>
			</tr>
        </table>
    </form>

    <?php 
        if(isset($_POST['Submit'])){
            $nama = $_POST['nama'];
        

            include_once("koneksi.php");
        
            //MENAMBAH DATA KE DATABASE
            $tambah = mysqli_query($koneksi, "INSERT INTO coba(nama) VALUES('$nama')");
            //NOTIFIKASI JIKA BERHASIL
            echo "User added successfully. <a href='index.php'>View Users</a>";
        }
    ?>
</body>
</html>