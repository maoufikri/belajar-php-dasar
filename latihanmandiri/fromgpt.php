<?php
// 1. Buatlah fungsi yang menerima array angka dan mengembalikan angka yang hanya muncul sekali dalam array tersebut.
// 2 Buat fungsi formatRupiah() yang menerima angka dan mengembalikannya dalam format Rupiah.
// 3 Buatlah fungsi piramidaAngka($n) yang mencetak piramida angka berdasarkan jumlah baris yang diberikan.
// 4 Buat sebuah fungsi hitungHuruf($kata), yang menerima string dan menghitung berapa kali setiap huruf muncul dalam string itu.
// 5 Buat fungsi konversiRomawi($angka), yang mengubah angka 1 - 100 menjadi angka Romawi.
// 6 Buat fungsi pasanganTerbesar($angka), yang menerima array angka dan mencari pasangan dua angka berturut-turut yang hasil gabungannya paling besar.

// 1
$angka = [4, 5, 4, 6, 7, 7, 6, 8];
function angkaUnik($angka) {
    $count = array_count_values($angka);
    $angkaUnik = [];

    foreach ($count as $angka => $jumlah) {
        if ($jumlah === 1) {
            $angkaUnik[] = $angka;
        }
    }
    echo implode(", ", $angkaUnik) . "\n";
}

angkaUnik($angka);

// 2
function formatRupiah($angka) {
    return "Rp." . number_format($angka, 0, ",", ".") . ",00-";
}
echo formatRupiah(50000) . "\n";

// 3
function piramidaAngka($n) {
    for ($i = 1; $i <= $n; $i++) {
        echo str_repeat(" ", $n - $i);
        for ($j = 1; $j <= $i; $j++) {
            echo $j . " ";
        }
        echo "\n";
    }
}
piramidaAngka(5);

// 4
function hitungHuruf($kata) {
    $huruf = str_split($kata);
    $count = array_count_values($huruf);

    foreach ($count as $huruf => $jumlah) {
        echo $huruf . " muncul sebanyak " . $jumlah . " kali\n";
    }
}

hitungHuruf("halo");

// 5
function konversiRomawi($angka) {
    if ($angka < 1 || $angka > 100) {
        return "Angka harus antara 1 dan 100";
    }
    
    $romawiMap = [
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1,
    ];
    
    $romawi = '';
    foreach ($romawiMap as $symbol => $value) {
        while ($angka >= $value) {
            $romawi .= $symbol;
            $angka -= $value;
        }
    }
    
    return $romawi;
}

echo konversiRomawi(29) . "\n"; // Output: L

// 6
function pasanganTerbesar($angka) {
    sort($angka);
    $length = count($angka);
    $first = $angka[$length - 1];
    $second = $angka[$length - 2];
    return (string)$first . (string)$second;
}

$angka = [5, 2, 4, 4, 0, 1];

print_r(pasanganTerbesar($angka));