<?php

interface vehicleMobil {
    public function getVehicleMobil();
}

interface Motor {
    public function getMotor();
}

class Toyota implements vehicleMobil, Motor {
    public $motor;
    public $mobil;

    public function setMotor($motor) {
        $this->motor = $motor;
    }

    public function setMobil($mobil) {
        $this->mobil = $mobil;
    }

    public function getVehicleMobil() { 
        return 'ini mobil ' . $this->mobil . ' murah';
    }

    public function getMotor() {
        return 'ini motor ' . $this->motor . ' murah';
    }
}

$mobil = new Toyota;
$mobil->setMobil('yamaha');
$mobil->setMotor('honda') . "\n";
echo $mobil->getVehicleMobil() . "\n";
echo $mobil->getMotor() . "\n";
