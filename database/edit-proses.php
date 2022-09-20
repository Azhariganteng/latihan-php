<?php
include 'koneksi.php';
$id = $_POST['id'];
$nama = $_POST['name'];

mysqli_query($koneksi, "UPDATE roles SET name='$nama' WHERE id='$id'");
header("Location:table_rolls.php");
