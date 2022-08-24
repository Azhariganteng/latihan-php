<?php
class Arit {
    public $tambah1;
    public $tambah2;
    public $hasil;
    

    function __construct($hasil1, $hasil2) {
        $this->tambah1 = $hasil1;
        $this->tambah2 = $hasil2;
    }
    function tambah() {
        $this->hasil = $this->tambah1 + $this->tambah2;
    }
    function hasil() {
        return $this->hasil;
    }
    function kurang() {
        $this->hasil = $this->tambah1 - $this->tambah2;
    }
    function bagi() {
        $this->hasil = $this->tambah1 / $this->tambah2;
    }
    function kali() {
        $this->hasil = $this->tambah1 * $this->tambah2;
    }
}

$hasil = new Arit(10, 2);
$hasil->tambah ();
echo 'Hasil Penjumlahan : ' . $hasil->hasil() . '<br>';
$hasil = new Arit(10, 2);
$hasil->kurang ();
echo 'Hasil Kurang : ' . $hasil->hasil() . '<br>';
$hasil = new Arit(10, 2);
$hasil->bagi ();
echo 'Hasil Bagi : ' . $hasil->hasil() . '<br>';
$hasil = new Arit(10, 2);
$hasil->kali ();
echo 'Hasil Kali : ' . $hasil->hasil() . '<br>';
?>