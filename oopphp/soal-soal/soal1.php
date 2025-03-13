<?php

// Buat abstract class Animal
//         Properti: $name (protected), $age (protected)
//         Method abstract: makeSound(), getInfo()
//         Method konkret:
//             __construct($name, $age): Menginisialisasi nama dan umur hewan.
//             __destruct(): Menampilkan pesan saat objek dihapus.

//     Buat class Dog dan Cat yang mewarisi Animal
//         Dog memiliki properti tambahan $breed (ras anjing).
//         Cat memiliki properti tambahan $color (warna kucing).
//         Implementasikan method makeSound() sesuai dengan suara hewan tersebut.
//         Override method getInfo() untuk menampilkan informasi spesifik dari masing-masing hewan.

//     Gunakan access modifiers dengan baik
//         Pastikan properti tidak bisa langsung diakses dari luar class (gunakan protected atau private).
//         Buat method public yang memungkinkan pengambilan data dari luar class.

//     Buat objek dan uji program
//         Buat minimal 2 objek Dog dan 2 objek Cat.
//         Panggil method makeSound() dan getInfo() dari masing-masing objek.
//         Gunakan unset() untuk menghapus salah satu objek dan lihat apakah __destruct() berjalan dengan benar.

abstract class Animal {
    protected $name;
    protected $age;

    abstract public function makeSound();
    abstract public function getInfo();

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    public function __destruct()
    {
        echo  $this->name . " telah dihapus\n";
    }
}

class Cat extends Animal{
    protected $color;

    public function makeSound()
    {
        echo "Nyan...." . "\n";
    }
    public function getInfo()
    {
        echo "Nama: " . $this->name . "\n";
        echo "Umur: " . $this->age . "\n";
        echo "Warna: " . $this->color = "Shiro". "\n";
    }
}

class Dog extends Animal{
    protected $breed;

    public function makeSound()
    {
        echo "Woof..." . "\n";
    }
    public function getInfo()
    {
        echo "Nama: " . $this->name . "\n";
        echo "Umur: " . $this->age . "\n";
        echo "Ras: " . $this->breed = "Golden Retriever" . "\n";
    }
}

$neko = new Cat("Neko", 2);
$neko->getInfo();
$neko->makeSound();
unset($neko);

$shiba = new Dog("Shiba", 3);
$shiba->getInfo();
$shiba->makeSound();
unset($shiba);