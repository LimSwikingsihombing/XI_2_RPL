<?php
//1.trait tidak dapat di inisialisasi
//2.trait adalah sebuah sifat yang dapdat di gunakan atau tidak
//3.trait bisa memiliki properties
//4.trait bisa memiliki body code pada fungsi
//5.trait tidak bisa diwariskan
//6.sebelum menggunakan trait wajib mengdeklarasi file trait yang akan digunakkan
//7.pada penggunaan propeeties dari trait

trait serviceGreeting{
    public $name;

    public function sayHello($name){
        return $this->name = $name;
    }
}
