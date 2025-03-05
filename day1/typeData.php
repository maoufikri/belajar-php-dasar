<?php

// Integer
$a = 25;

$x = 25;

// Float
$f = 12.121;

// Array 
$dataSantri  = [
    'Bambang' => [
        // key         =>   value
        'nama-lengkap' => 'Bambang lengkap',
        'alamat' => 'di bawah langit',
        'mobil-user' => [
            'bmw'  => [
                'bmw1',
                'bmw2',
            ],
            'merc' =>  [
                'merc1', // 0
                'merc2', // 1
            ]
        ]
    ],
    'Ujang' => [
        'nama-lengkap' => 'Ujang lengkap',
        'alamat' => 'di bawah langit ujang',
    ]

];

$array2 = array('a', 'b', 'c');

$namaSantri = $dataSantri['Bambang'];

// var_dump($z2);

// var_dump($z);

// string
$b = 'Ini variabel b';

// Boolean
$c = true;
$d = false;

// NULL 
$e = null;

// function  
function pertambahan($a, $b)
{
    return $a + $b;
}
function pengurangan($a, $b)
{
    return $a - $b;
}

/* This is a
multi-line comment 
asdasd
asdasdasda
a
*/
function perkalian(int $a, int $b, int $c)
{
    $hasil = $a * $b * $c;
    $infoResult = $a . " x " . $b . " x " . $c . ' = ' . $hasil;
    return "Hasil dari : " . $infoResult . "\n";
}

$dataPit = [
    'Hubaib',
    'Ujang',
    'Bambang',
    'Asep',
    'Udin',
    'Budi',
    'Rudi',
    'Caca',
    'Dedi',];
function salam(string|int $nama)
{
    if($nama == "Hubaib"){
        return "Pasti " . $nama . " Ini anak pondok IT" ."\n";
    } else if ($nama == "Ujang"){
        return "Pasti " . $nama . " Ini anak mana tuh ?" ."\n";
    }
    else{
        return  "Halo ". $nama . "\n";
    }
}

function age($umur) {
    if ($umur <= 17) {
        return "Anak-anak";
    } else if ($umur <= 25) {
        return "Remaja";
    } else if ($umur <= 50) {
        return "Dewasa";
    } else {
        return "Lansia";
    }
}
function cekHarga($menu){
switch ($menu) {
    case 'Mie Ayam':
      echo 'Harga Mie Ayam Rp.10.000'."\n";
      break;
    case 'Bakso':
        echo 'Harga Bakso Rp.15.000'."\n";
      break;
    case 'Nasi Goreng':
        echo 'Harga Nasi goreng Rp.20.000'."\n";
      break;
    default:
      echo $menu. ' Tidak tersedia'."\n";
  }
}

//  echo salam() . "\n";
// echo $namaSantri['nama-lengkap'] . "\n";
// print_r($dataSantri) . "\n";
//  echo "Ini Hasil tambah: " . pertambahan(25,25) . "\n";
//  echo "Ini Hasil kurang : " . pengurangan(100,10) . "\n";
// echo perkalian(25, 34, 7) ;
// echo perkalian(21, 44, 9) ;
// echo perkalian(55, 4, 90) ;
// echo salam('Fulan') ;
// echo age(51) . "\n" ;
cekHarga('Mie Ayam') . "\n";
cekHarga('Bakso') . "\n";
cekHarga('Nasi Goreng') . "\n";
cekHarga('Seafood') . "\n";