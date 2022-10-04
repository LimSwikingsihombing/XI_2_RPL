<?php
trait Role{
    abstract function getRole(): String;
}

class Babeh{
    public $nama;
    public $umur;
    public $i_status;
    public $marga;
    public static $index;

    // membuat constructor
    public function __construct($nama, $umur, $is_status)
    {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->is_status = $is_status;
        $this->marga = 'Tan';
        self::$index = 1;
    }

    public function getNama()
    {
        return $this->nama;
    }

    public function getUmur()
    {
        return $this->umur;
    }
    
    public function getStatus()
    {
        return $this->is_status;
    }

    public function getMarga(){
        return $this->marga;
    }
    
    public function space()
    {
        echo '<hr>';
    }

    public function display()
    {
        echo 'No.' . self::$index++ . '<br>';
        echo 'Nama: ' . $this->getNama() . '<br>'; 
        echo 'Umur: ' . $this->getUmur() . '<br>';
        echo 'Marga: ' . $this->getMarga() . '<br>';
        if($this->is_status == "Bapak")
        {
            echo 'Status: ' . $this->getStatus() . '<br>';
           
            echo $this->space();    
        }else {
            echo 'Status: ' . $this->getStatus() . '<br>';
        }
    }
}

class Bocil extends Babeh {
    use Role;
    public $role;

    public function __construct($nama, $umur, $is_status, $role = "Siswa")
    {
        parent::__construct($nama, $umur, $is_status);
        $this->nama = $nama;
        $this->umur = $umur;
        $this->is_status = $is_status;
        $this->role = $role;

    }
    public function getRole(): string
    {
        return $this->role;
    }

    public function getAllDisplay()
    {
        echo parent::display();
        echo 'Jabatan: ' . $this->getRole() . '<br>';
        echo $this->space();
    }
}
$bapak1 = new Babeh('Asep', 35, "Bapak");
$bapak2 = new Babeh('Satrio', 35, "Bapak");
$anak1 = new Bocil('Arief', 16, 'Anak');
$anak2 = new Bocil('Retno', 16, 'Anak');
echo $bapak1->display();
echo $bapak2->display();
echo $anak2->getAllDisplay();
echo $anak1->getAllDisplay();