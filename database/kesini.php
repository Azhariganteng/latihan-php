<?php
include "koneksi.php";
?>

<?php
            if ($_POST) {
                $nama = mysqli_real_escape_string ($koneksi, $_POST['nama_role']);
                $insert = mysqli_query($koneksi, "INSERT INTO roles set name='$nama'");
                if ($insert) {
                    header("Location:table_rolls.php");
                }else{
                    echo 'data gagal';
                }
            };
?>