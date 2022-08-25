<?php

$warna = array("merah", "pink", "hijau");
$warna2 = ["biru", "kuning"];
// echo $warna[1];

$produk = [
    //key       //vlue
    "nama" => "HNI",
    "harga" => "22000",
    "total_produk" => "99"
];

// echo $produk["total_produk"];

$data_barang = [
    ["barang" => "HNI", "harga" => "2000", "stok" => "999999999"],
    ["barang" => "Kopi", "harga" => "2000", "stok" => "999999999"],
];

print_r($data_barang[1]["barang"]);
?> 