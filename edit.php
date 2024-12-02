<?php

//database
include_once("koneksi.php");
//
if(isset($_POST['update']))
{
    $id = $_POST['id'];
    $nama = $_POST['nama'];


    $update = mysqli_query($koneksi, "UPDATE coba SET nama = '$nama' WHERE id = $id ");

    header("Location:index.php");
}
?>

<?php
 
$id = $_GET['id'];

$lihat = mysqli_query($koneksi,"SELECT * FROM coba WHERE id = $id ");

while($user = mysqli_fetch_array($lihat)) {
    $nama = $user['nama'];
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
</head>
<body>
    <a href="index.php">Home</a>
	<br/><br/>

    <form action="edit.php" method="post" name="update_user">
        <table border=0>
            <tr>
                <td>Name</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
        </table>
    </form>
    
</body>
</html>