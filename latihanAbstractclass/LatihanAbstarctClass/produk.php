<?php
abstract class Produk {
    public $harga =2000;
    public function getHarga(){
        return $this ->harga;
    }

    abstract public function sayHello($name):void;
    public static $judul = " Belajar Abstarct Class";
}

?>