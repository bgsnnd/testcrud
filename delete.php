<?php 

include_once("koneksi.php");


$id = $_GET['id'];

$delete = mysqli_query($koneksi, "DELETE FROM coba WHERE id=$id");

header("Location:index.php");



?>