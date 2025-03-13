<?php

class Lingkaran{
    const PI = 3.14;
    protected $jari_jari ;
    // protected $

    function __construct(int $jari_jari){
        $this->jari_jari = $jari_jari;
    }

    function keliling(){
        echo self::PI."\n";
        $keliling = 2*self::PI*$this->jari_jari; 
        return $keliling;
    }

    function luas(){
        $luas = self::PI*$this->jari_jari**2;
        return $luas;
    }
}

$lingkaran = new Lingkaran(8);
echo $lingkaran->keliling();
echo "\n";
echo $lingkaran->luas();
echo "\n";