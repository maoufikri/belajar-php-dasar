<?php

abstract class BangunDatar {
    abstract function hitungluas();
}

class Persegii extends BangunDatar {
    public $sisi;

    public function hitungluas()
    {
        return $this->sisi * $this->sisi;
    }
}

class Lingkarann extends BangunDatar {
    public $r;

    public function hitungluas()
    {
        if ($this->r % 7 === 0) {
            return 22/7 * $this->r ** 2;
        } else {
            return 3.14 * $this->r ** 2;
        }
    }
}

$persegi = new Persegii();
$persegi->sisi = 5;
echo $persegi->hitungluas() . "\n";

$lingkaran = new Lingkarann();
$lingkaran->r = 15;
echo $lingkaran->hitungluas();