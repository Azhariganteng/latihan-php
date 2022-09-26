<?php
session_start();
include 'koneksi.php';
$id = $_POST['roles_id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];

$sql = "INSERT INTO users (roles_id, nama, email, password) VALUES ('$id', '$nama', '$email', '$password')";
$hasil = mysqli_query($koneksi, $sql);
if ($hasil) {
    if(!isset($_SESSION['message'])) {
        $_SESSION['message'] = "Data $nama Berhasil ditambah";
    }
    header("location: table_user.php");
}else{
    echo 'Gagal';

}