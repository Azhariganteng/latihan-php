<?php
session_start();
if (!empty($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    //$nama = $_GET['hapus'];
    include 'koneksi.php';
    
}

$nama = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$hapus'");
$cek = mysqli_fetch_array($nama);
if ($cek) {
    if (!empty($hapus) && $hapus !== "") {
        $del = "DELETE FROM roles WHERE id='$hapus'";
        $new = mysqli_query($koneksi, $del);
        if ($new) {
            $_SESSION['hapus'] = "Data $cek[name] Berhasil dihapus";
            header("location: index.php");
        }else{
            echo $del;
        }
    }
}