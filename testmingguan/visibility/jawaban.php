<?php
class student{
    private $name;

    public function getName(){
        return $this->name;
    }
    protected function setName($name){
        $this->name = $name;
    }
}

class murid extends student{
    public function setMuridName($name) {
        $this->setName($name); // ini bisa akses karena ini anak dari student dan mewarisi kelas protected setname 
    }
}

$murid = new murid();
$murid->setMuridName("Gaby"); // ini bisa dipanggil karena setmuridname itu public
echo "nama murid ini adalah " . $murid->getName(). "\n" ; // ini  bisa akses karena public gess jadi bisa dipanggil dsini

// echo $student1->name; // ini gak bisa karena properti name itu private jadi cuma bisa dikelas itu doang

// $student1->setName("Fikri"); // ini juga gak bisa soalnya setname protected jadi gak bisa tipanggil diluar kelas