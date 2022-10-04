<?php
class MencariNilaiGanjilGenap
{
   public function cariNilaiGanjilGenap($inputNilai){
      //masukkan logicnya disini
      if($inputNilai %= 2){
         echo "Sisa Bagi [ ($inputNilai)] adalah ganjil";
      }else {
         echo "Sisa Bagi [ ($inputNilai)] adalah genap"; 
               }
        }
   }
//inisialisasi class objek 
$obj = new MencariNilaiGanjilGenap();

echo $obj->cariNilaiGanjilGenap(inputNilai : 10);
