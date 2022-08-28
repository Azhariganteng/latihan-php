<?php

class Mahasiswa {
    public $user = [];

    public function namaMahasiswa(string $nama_mahasiswa, string $universitas, string $akreditasi)
    {
        $this->user[]= [
            'nama_mahasiswa' => $nama_mahasiswa,
            'universitas'    => $universitas,
            'akreditasi'     => $akreditasi
        ];

        return $this;
    }

    public function __toString()
    {
        return json_encode($this->user);
    }

}

$mahasiswa = new Mahasiswa();
$mahasiswa -> namaMahasiswa('Azhari', 'Universitas PASIM', 'A')
           -> namaMahasiswa('Aldi', 'Universitas Pasundan', 'A');

print_r ($mahasiswa);