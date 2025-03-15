<?php
// 1
$string = "string";
echo $string . "\n";

// 2
$integer = 5;
$integer += 5;
echo $integer . "\n";

// 3
$boolean = true;
echo $boolean . "\n";

// 4
$array = [1, 2, 3, 4, 5];
echo $array[0] . "\n";
echo $array[4] . "\n";

// 5
$satu = "satu"; //string
$dua = 432809; // integer
$tiga = true; // boleean
$empat = [false,"true"]; // array

echo "tipe data dari \$satu adalah " . gettype($satu) . "\n";
echo "tipe data dari \$dua adalah " . gettype($dua) . "\n";
echo "tipe data dari \$tiga adalah " . gettype($tiga) . "\n";
echo "tipe data dari \$empat adalah " . gettype($empat) . "\n";

// 6
$pertama = 0.5;
$kedua = 392.42;
$pertama *= 2;
$kedua *= 2;

echo $pertama . "\n";
echo $kedua . "\n";