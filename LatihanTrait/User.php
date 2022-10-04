<?php
include 'ServiceGreeting.php';

    class User
    {
        public $name = "Limswiking";
        use serviceGreeting;
//use serviceGreeting;
    }

    $user = new user();

    echo $user ->name;
