<?php

class MembuatFunction{
    public $title = "ini latihan membuat function";


    public function sayHello(){
        echo 'ini dari class '. __CLASS__;
    }

    public function perkalian ($number = 4){
        echo 'angka yang dimasukkan adalah' . $number;
    }
    public function penjumlahan ($numb_a, $numb_b){
   return $numb_a * $numb_b;
   
}

public function getTitle(){
    return $this->title;
        }
    }
    $obj = new MembuatFunction();
    echo $obj ->sayHello();
//output;
echo '<hr>';
echo $obj->perkalian();
//output;
echo '<hr>';
echo $obj->penjumlahan(1,2);
//output
echo '<hr>';
echo $obj->getTitle();
//output


