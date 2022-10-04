<?php
class User{
    public $users = [
        'Asep', 'Rendi', 'Satria'
    ];

    public function getUser(){
        echo $this->users[0];
    }
}

// inisialisasi