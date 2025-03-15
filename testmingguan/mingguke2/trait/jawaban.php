<?php
// 1
trait Berjalan {
    function berjalan(){
        echo "Saya bisa berjalan" . "\n";
    }
}

class Robot{
    use Berjalan;
}

$mecha = new Robot();
$mecha->berjalan();

// 2
trait bisaTerbang{
    function terbang(){
        echo "Saya bisa terbang tinggi";
    }
}

class Burung{
    use bisaTerbang;

    function info(){
        echo "Burung : ";
        $this->terbang();
        echo "\n";
    }
}

class Pesawat{
    use bisaTerbang;

    function info(){
        echo "Pesawat : ";
        $this->terbang();
        echo "\n";
    }
}

$burung = new Burung();
$burung->info();
$pesawat = new Pesawat();
$pesawat->info();