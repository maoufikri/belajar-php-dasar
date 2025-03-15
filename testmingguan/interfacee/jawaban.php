<?php
// 1
interface Bentuk{
    function hitungLuas();
}

class persegi implements Bentuk{
    public $sisi;

    function hitungLuas()
    {
        return $this->sisi * $this->sisi;
    }
}

class segitiga implements Bentuk{
    public $tinggi;
    public $alas;

    function hitungLuas()
    {
        return 0.5 * $this->alas * $this->tinggi;
    }
}

$luaspersegi = new persegi();
$luaspersegi->sisi = 10;
echo $luaspersegi->hitungLuas() . "\n";

$luassegitiga = new segitiga();
$luassegitiga->tinggi = 20;
$luassegitiga->alas = 40;
echo $luassegitiga->hitungLuas() . "\n";