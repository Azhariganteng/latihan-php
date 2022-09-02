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

    array_filter($mahasiswa, function ($user) {
        if ($user ["nama_mahasiswa"]> 'Ucok') {
            return $user ["nama_mahasiswa"];
        }
    });

    function __toString()
    {
        return json_encode($this->user);
    }
}

$mahasiswa = new Mahasiswa();
$mahasiswa -> namaMahasiswa('Azhari', 'Universitas PASIM', 'A')
           -> namaMahasiswa('Aldi', 'Universitas Pasundan', 'A')
           -> namaMahasiswa('Ucok', 'Universitas Pamulang', 'C')
           -> hapusMahasiswa('Ucok');

print_r ($mahasiswa);