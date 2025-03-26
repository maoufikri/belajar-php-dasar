<?php

interface BangunRuang {
    public function hitungVolume();
}

class Kubus implements BangunRuang {
    public $sisi;

    public function hitungVolume() {
        return pow($this->sisi, 3);
    }
}

class Bola implements BangunRuang {
    public $r;

    public function hitungVolume() {
        if ($this->r % 7 === 0) {
            return 4/3 * 22/7 * pow($this->r, 3);
        } else {
            return 4/3 * 3.14 * pow($this->r, 3);
        }
    }
}

$kubus = new Kubus();
$kubus->sisi = 5;
echo "Volume Kubus: " . $kubus->hitungVolume() . "\n";

$bola = new Bola();
$bola->r = 7;
echo "Volume Bola: " . $bola->hitungVolume() . "\n";