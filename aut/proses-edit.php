<?php

include 'koneksi.php';
$nama = $_POST['name'];
//$lama = $result['name'];
session_start();
if(!isset($_SESSION['edit'])) {
    $_SESSION['edit'] = "Data $lama Berhasil diedit menjadi $nama";
}
$id = $_POST['id'];
$nama = $_POST['name'];

mysqli_query($koneksi, "UPDATE roles SET name='$nama' WHERE id='$id'");
header("Location:index.php");
?>      