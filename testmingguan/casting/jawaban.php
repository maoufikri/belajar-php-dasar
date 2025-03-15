<?php
// 1
$angka = "123.45";
$angka = (int) $angka;
var_dump($angka);

// 2
$float = 123.45;
$float = (float) $float;
var_dump($float);

// 3
$array = ["aku", "dan", "dia"];
$array = (object) $array ;
var_dump($array);