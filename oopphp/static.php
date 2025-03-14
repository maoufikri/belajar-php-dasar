<?php

class statis{
    static function methodstatic(){
        echo "Ini method static \n";
    }

    function biasa(){
        echo "ini method biasa \n";
    }

    function dinamis(){
        self::methodstatic(); // ini method static
        $this->biasa(); // Ini method biasa
    }
}

// dipanggil tanpa buat objek telebih dahulu
// namaKelas::mtehodStatic();
statis::methodstatic();

// harus buat objek dulu baru bisa dipanggil
$statik = new statis;
$statik->dinamis();

// STATIC PROPHERTY
class kelas {
    static $properti1;

    static public function statis(){
        echo "Hallo " . self::$properti1 . "\n";
    }
}

class anak extends kelas {
    function __construct(){
        echo "Ini yang ambil dari kelas induk" . kelas::$properti1;
        echo "Ini yang ambil dari kelas induk" . parent::$properti1;
    }

    function xStatic(){
        return parent::statis();
    }
}

// kelas::$properti1 = 'Hiu';
kelas::statis();
// echo kelas::$properti1;
anak::$properti1 = "jungle";
$anak = new anak;

$anak = new anak();