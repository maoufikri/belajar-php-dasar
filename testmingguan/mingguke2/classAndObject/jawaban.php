<?php
// 1
class personn {
   public $name;
   public $age;
   
   function tampilName($name) {
      echo $this->name = $name . "\n";
   }
}
$Gaby = new personn();
$Gaby->tampilName("Gaby");

// 2
class Carr {
   public $car;

   function startEngine() {
      echo "Engine Starto.....Welcome to Sao" . "\n";
   }
}

$car = new carr();
$car->startEngine();

// 3 & 4
class Rectangle{
   public $width;
   public $height;

 function calculateArea() {
   return $this->width * $this->height;
   }
}
$hasil = new Rectangle();
$hasil->width = 5;
$hasil->height = 10;
echo "hasil luas persegi panjang adalah = " . $hasil->calculateArea() . "\n";

// 5
class employe {
   public $salary;

   function getSalary($salary) {
      echo "Gaji dari budak korporat itu adalah = " ."Rp.".  $this->salary = $salary . ",00-" . "\n";
   }
}
$karyawan = new employe();
$karyawan->getSalary(1000);