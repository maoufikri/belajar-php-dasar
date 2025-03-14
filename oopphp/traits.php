<?php 

trait pertama{
    function pertama(){
        echo "ini trait pertama \n";
    }
}

trait kedua{
    protected function kedua(){
        echo "ini trait kedua \n";
    }
}
trait ketiga{
    private function ketiga(){
        echo "ini trait ketiga \n";
    }
}
trait keempat{
    function keempat(){
        echo "ini trait keempat \n";
    }
}

class target{
    use pertama,kedua,ketiga,keempat;

    function pertama(){
        echo "ini adalah override dari method pertama \n";
    }

    function panggil(){
        $this->kedua();
        $this->ketiga();
    }
}

$trait = new target;
$trait->pertama();
// $trait->kedua();
// $trait->ketiga();
$trait->keempat();
$trait->panggil();