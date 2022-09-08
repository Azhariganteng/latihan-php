<?php
if(isset($_GET['hapus'])) {
    $hapus = $_GET['hapus'];
include 'koneksi.php';
}

if(!empty($hapus)&&$hapus !="") {
    $delete = "DELETE FROM roles WHERE id='$hapus'";
    $sql = mysqli_query($koneksi, $delete);
    if ($sql){
        echo header("location: table_rolls.php");
    } else {
        echo 'data gagal dihapus' . $hapus;
        echo mysqli_errno($koneksi);
    }
}
?>
