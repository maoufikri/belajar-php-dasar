<?php

class Person {
    public $name;
    public $age;
    public $gender;
    public $address;

    function __construct($name, $age, $gender, $address) {
        $this->name = $name;
        $this->age = $age;
        $this->gender = $gender;
        $this->address = $address;
    }
    function __destruct() {
        echo "Sekian perkenalan saya " . $this->name . "\n";
    }


    function tampil() {
        echo "Halo nama saya " . $this->name . ",";
        echo " Umur saya " . $this->age . " tahun,";
        echo " Jenis kelamin saya " . $this->gender . ",";
        echo " Alamat saya " . $this->address . "\n";
    }

}

$abdul = new Person("Abdul", 20, "Laki-laki", "Bandung");
$Gaby = new Person("Gaby", 18, "Perempuan", "Manado");
$abdul->tampil();
$Gaby->tampil();