<?php
session_start();
if (!empty($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    include 'koneksi.php';
}

$nama = mysqli_query($koneksi, "SELECT * FROM users WHERE id='$hapus'");
$cek = mysqli_fetch_array($nama);
if ($cek) {
    if (!empty($hapus) && $hapus !== "") {
        $del = "DELETE FROM users WHERE id='$hapus'";
        $new = mysqli_query($koneksi, $del);
            $_SESSION['message'] = "Data $cek[nama] Telah dihapus";
        header("location: table_user.php");

    }else {
        echo $del;
    }
}
?>