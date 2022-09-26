<?php
session_start();
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$password = $_POST['password'];
$roles_id = $_POST['name'];

if ($nama == "") {
    header("location :edit_user.php?edit=$id");
}else{
$query = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$id'");
$cari = mysqli_fetch_array($query);
if ($cari) {
    $edit = "UPDATE users SET nama='$nama', email='$email', password='$password', roles_id='$roles_id' WHERE id='$id'";
    $baru = mysqli_query($koneksi, $edit);
        
    if ($baru) {
        $_SESSION['message'] = "Data $cari[nama] telah diedit menjadi $nama";
    // echo $edit;
        header("location: table_user.php");
    }else{
        $_SESSION['message'] = "Email telah digunakan";
        header("location: edit_user.php?edit=$id");
    }
}else{
    echo 'Gagal';
}
}
?>