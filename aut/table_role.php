<?php
include "koneksi.php";
$nama = $_POST['nama_role'];
session_start();
if(!isset($_SESSION['message'])) {
    $_SESSION['message'] = "Data $nama Berhasil ditambah";
}
?>

<?php
            if ($_POST) {
                $nama = mysqli_real_escape_string ($koneksi, $_POST['nama_role']);
                $insert = mysqli_query($koneksi, "INSERT INTO roles set name='$nama'");
                if ($insert) {
                    header("location: index.php");
                }else{
                    echo 'data gagal';
                }
            };
?>