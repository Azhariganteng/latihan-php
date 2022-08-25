<?php

class Magic_method {
    public $nama;
    public $jeniskelamin;
    public $umur;

    public function setNama($Nama)
    {
        return $this->nama = $Nama;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function setJeniskelamin($Jeniskel)
    {
        return $this->jeniskelamin = $Jeniskel;
    }

    public function getJeniskelamin()
    {
        return $this->jeniskelamin;
    }

    public function setUmur($Umuri)
    {
        return $this->umur = $Umuri;
    }

    public function getUmur()
    {
        return $this->umur;
    }

    public function __toString()
    {
        return 'Hai nama saya : ' .$this->nama . PHP_EOL . 'Jenis kelamin saya : ' .$this->jeniskelamin . PHP_EOL . 'umur saya : ' .$this->umur;
    }

    public function nama() {
        return $this;
    }

    public function jeniskelamin() {
        return $this;
    }

    public function umur() {
        if (1<=5) {
            return 'ini salah';
        }else {
            echo 'proses ini dijalankan';
            return 'ini benar';
        }
        return $this->umur;
        echo 'asd';
    }
}

$Magic_method = new Magic_method();
// echo $Magic_method;
// $Magic_method->setNama("Azhari"); 
// $Magic_method->setJeniskelamin("Laki");
$Magic_method->setUmur(22);
print_r($Magic_method->umur());

// echo $Magic_method;