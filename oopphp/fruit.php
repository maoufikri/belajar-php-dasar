<?php

class fruit{
    public $name;
    protected $color;
    private $weight;

    public function set_name($name){
        $this->name = $name;
    }

    protected function set_color($color){
        $this->color = $color;
    }

    private function set_weight($weight){
        $this->weight = $weight;
    }
}

$obj = new fruit();
$obj->set_name('aku');
// $obj->set_color('merah'); // error
// $obj->set_weight('50'); // error

class apple extends fruit{
    function setColor(){
        $this->color = 'merah';
    }
    // function setWeight($weight){
    //     $this->weight = $weight; //error
    // }
}

class rasa extends apple{
    function coba() {
        $this->color = 'hijau';
    }
}