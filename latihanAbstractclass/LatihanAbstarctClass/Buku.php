<?php

include 'Produk.php';

class Buku extends Produk{
    public function judul(){}
    public function SayHello($name):void
    {
        echo "HELLO SAYA ADALAH {$name}";
    }
}
//instalisasi objek
$obj = new Buku();
echo $obj->SayHello(name: "FERDY SAMBO") . "<br>";
echo Buku::$judul;
