<?php

class Artimatika {
    public $jumlah = 0;

    public function tambah(int $angka) {
        $this->jumlah = $this->jumlah + $angka;

        return $this;
    }

    public function kurang(int $angka) {
        $this->jumlah = $this->jumlah - $angka;

        return $this;
    }

    public function bagi(int $angka) {
        $this->jumlah = $this->jumlah / $angka;

        return $this;
    }

    public function kali(int $angka) {
        $this->jumlah = $this->jumlah * $angka;

        return $this;
    }

    public function hasil() {
        $this->tambah(20);
        return $this->jumlah;
    }

    // function __toString()
    // {
    //     return (string) $this->jumlah;
    // }

}

$Artimatika= new Artimatika();
$Artimatika->tambah(20)->kurang(5)->bagi(5)->kali(2);
echo 'Hasil Penjumlahan : ' .(new Artimatika());