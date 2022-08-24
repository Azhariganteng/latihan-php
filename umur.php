<?php
    class Umur
    {
        function usia ($angka)
        {
            if ($angka >= 0){
                    
                
                if (is_numeric($angka)){
                    
                
                    if($angka <= 10){
                        return "anak kecil";
                    }
                    elseif($angka <= 17){
                        return "remaja";
                    }
                    elseif ($angka >= 17){
                        return "dewasa";
                    }
                    return $angka;
                }else{
                    return 'Tidak Bisa';
                }
            }else{
                return 'jgn kurg dr 0';
            }
        }
    }

$Umur = new Umur();
echo $Umur->usia(17);
