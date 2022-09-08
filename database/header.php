<?php
$koneksi = mysqli_connect('localhost','root','','belajar_db');
if(!$koneksi){
    die("Koneksi Gagal:". mysqli_connect_error());
}
else{
    echo "BENER EUYYY ";
}
?>