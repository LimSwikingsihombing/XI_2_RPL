<?php

class DiskonRentalMotor
{
    public function __construct(private $harga = 5000 , private $diskon1 = 5, private $diskon2 =10){
        $this->harga = $harga;
        $this->diskon1 = $diskon1;
        $this->diskon2 = $diskon2;
    }
    public function pesan(){
        return "Tidak Ada Diskon";  
    }
    public function perkalian ($jumlahjam){

        if ($jumlahjam <= 9 ) {
            return $jumlahjam * $this->harga;
        }
        elseif ($jumlahjam >= 10 && $jumlahjam <= 15){
            return $jumlahjam * $this->harga - $jumlahjam * $this->harga * $this->diskon1 / 100;
        }
        elseif ($jumlahjam >= 20 && $jumlahjam <=24){
            return $jumlahjam * $this->harga -$jumlahjam ->harga * $this->diskon2 / 100;
        }else{
            }
    }
}

$obj = new DiskonRentalMotor();
echo"Harga:". $obj->perkalian(jumlahjam:7);
        