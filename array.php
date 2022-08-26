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

    'data'=>["barang" => "HNI", "harga" => "2000", "stok" => "999999999"],
    'barang'=>["barang" => "Kopi", "harga" => "2000", "stok" => "999999999"],
];

// print_r($data_barang["data"]["barang"]);

$data_barang = [

    ["barang" => "HNI", "harga" => 3000, "stok" => "999999999"],
    ["barang" => "HNI", "harga" => 3000, "stok" => "999999999"],
    [],
];

//PERULANGAN FOR BIASA
for ($index=0; $index<6;) {
    if ($index==2) {
        echo 'ini key ke' .$index . PHP_EOL; 
        //break;
    }else {
    echo 'ini index ke' .$index . PHP_EOL;
    }
    $index++;
}

//PERULANGAN ARRAY MENGGUNAKAN FOR
echo count($data_barang);

for ($exp=0; $exp<count($data_barang); $exp++) {
    echo 'ini nama barang : ' .$data_barang [$exp]["barang"] . PHP_EOL;
}

//PERULANGAN ARRAY MENGGUNAKAN FOREACH
foreach ($data_barang as $item) {
    echo $item ["harga"] . PHP_EOL;
}

$new_data_barang = (array_map(function ($item) {
    if ($item ["harga"]> 2000) {
        return $item ["harga"];
    }
}, $data_barang)) ;
(array_filter($data_barang, function ($item) {
    if ($item ["harga"]> 2000) {
        return $item ["harga"];
    }
}));
print_r (($data_barang));
?> 

