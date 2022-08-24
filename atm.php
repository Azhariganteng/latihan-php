<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Azhari Zahran</h3>
    <h3>Uang Az 100.000</h3>
    <h3>Az jajan sebesar 50.000</h3>
    <h3>Sisa uang Az adalah Rp. -50.000</h3>
</body>
</html>

<!-- <?php
class Uang
{
    function duit($sisa)
    {
        if(is_numeric($sisa)){
            if($sisa >=0 ){
                return "Az Hemat";
            } elseif ($sisa <=0 ){
                return  "Az Boros";
            }
            return $sisa;
        }else
        {
            //Bagian ini akan dijalankan jika tipe data bkn angka";
            return "Tipe data argumen hrs angka";
        }
    }
}
$Uang = new Uang();
echo $Uang->duit(-12); 
?> -->

<?php

class ATM {
    public $Nama= "";

    public function setNamaPemilik($NamaOrang)
    {
        return $this->Nama = $NamaOrang;
    }

    public function getNamaPemilik()
    {
        return $this->Nama;
    }

    //private nama

    public $saldo = 0; // -> properti

    public function setorTunai(int $jumlah) {
        $this->saldo = $this->saldo + $jumlah;

        return $jumlah;
    }

    public function tarikTunai(int $jumlah)
    {
        $this->saldo = $this->saldo - $jumlah;

        return $jumlah;
    }

    public function lihatSaldo()
    {
        return $this->saldo;
    }
}

$atm = new ATM();

$atm->setNamaPemilik("Azharoy", "Alkun");

echo "Nama Pemilik ATM : " . $atm->getNamaPemilik() . '<br>';
echo 'setorTunai : ' .$atm->setorTunai(100) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';
echo 'setorTunai : ' .$atm->setorTunai(200) . '<br>';
echo 'lihatSaldo : ' .$atm->lihatSaldo() . '<br>';

echo 'tarikTunai : ' .$atm->tarikTunai(50) . '<br>';
echo 'lihatSaldo : ' .$atm->saldo . '<br>';
?>