
<?php
class Fruit {
  protected $name;
  protected $color;
  private $biji;
  
  public function setBiji(int $jumlah){
      $this->biji = $jumlah;
      echo $this->biji."\n";
  }
  
  public function __construct($name, $color) {
    $this->name = $name;
    $this->color = $color;
  }
  public function intro() {
    echo "The fruit is {$this->name} and the color is {$this->color}."."\n";
}
}

// Strawberry is inherited from Fruit
class Strawberry extends Fruit {


    public function message($buah) {
    $this->name = $buah;
    echo "ini nama {$this->name}"."\n";
    echo "Am I a fruit or a berry? "."\n";
  }

  public function intro(){
    echo "Halo ini adalah fungsi yang telah di-override"."\n";
  }
}


$buah = new Fruit("jeruk","Oren");// Induuk Kelas
$buah->intro();

$strawberry = new Strawberry("Strawberry", "red"); // Turunan Kelas
$strawberry->message("jeruk");
$strawberry->setBiji(100);
$strawberry->intro();