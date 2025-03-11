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

    function tampil() {
        echo "Halo nama saya " . $this->name . ",";
        echo " Umur saya " . $this->age . " tahun,";
        echo " Jenis kelamin saya " . $this->gender . ",";
        echo " Alamat saya " . $this->address . "\n";
    }

}

$abdul = new Person("Abdul", 20, "Laki-laki", "Bandung");
$abdul->tampil();