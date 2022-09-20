<?php
if(!empty($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
    include 'koneksi.php';
}

$query = mysqli_query($koneksi, "SELECT * FROM roles WHERE id='$hapus'");
$hasil = mysqli_fetch_array($query);
if($hasil) {
    if(!empty($hapus)&&$hapus !="") {
        $delete = "DELETE FROM roles WHERE id='$hapus'";
        $sql = mysqli_query($koneksi,$delete);
        if ($sql){
            echo "DATA BERHASIL DIHAPUS";
        }
    }
}else{
    echo 'DATA GAGAL DIHAPUS';
}
