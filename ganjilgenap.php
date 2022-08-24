<?php
    class Arit
    {
        function bilangan ($angka)
        {
            if($angka %2==0){
                $angka="Bilangan Genap";
            }else{
                $angka="Bilangan Ganjil";
            }
            return $angka;
        }
    }

$Arit = new Arit();
echo $Arit->bilangan(5);