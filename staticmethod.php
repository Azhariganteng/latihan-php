<?php

class Manusia {
    private static $nama_lengkap;
    public $nama_warna;

    function warna() {
        $this->nama_warna = "Hijau";
        return $this->nama_warna;
    }

    public static function Nama() {
        self::$nama_lengkap = "Manusia";
        return self::$nama_lengkap;
    }
}

$Manusia = new Manusia();
echo $Manusia->warna();

echo Manusia::Nama();

//perbedaan method static dan static yaitu kalo distatic 
//1.Cara pemanggilan beda = namaclass::namamethod;
//2.nama fungsi static ditambah static = public static function
//3.kalo method na static berarti di propertiessnya ditambah kata static
?>

