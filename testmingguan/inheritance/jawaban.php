<?php
// 1
class Hewan{
    public $nama;

    function suara(){
        echo "Hewan tidak diketahui";
    }
}
class Kucing extends Hewan{
    function suara() {
        echo "nama :". $this->nama . "\n";
        echo "suara: Meeeoooooowwwwwhfdsuhueawhukeueseku" . "\n";
    }
}

$Milo = new Kucing();
$Milo->nama= "Milo";
$Milo->suara();

// 2
class Kendaraan{
    public $merk;

    function __construct($merk)
    {
        return $this->merk = $merk;
    }
    public function info(){
        echo "Merk : " . $this->merk . "\n";
    }
}

class Mobil extends Kendaraan{
    public $jumlahPintu;

    function __construct($merk , $jumlahPintu)
    {
        $this->merk = $merk;
        $this->jumlahPintu = $jumlahPintu;
    }

    function info(){
        echo "Merk : " . $this->merk . "\n";
        echo "Jumlah Pintu : " . $this->jumlahPintu . "\n";
    }
}
$toyota = new Mobil("Toyota", 1000);
$toyota->info();