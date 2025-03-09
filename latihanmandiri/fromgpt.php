<?php
// 1. Buatlah fungsi yang menerima array angka dan mengembalikan angka yang hanya muncul sekali dalam array tersebut.
// 2 Buat fungsi formatRupiah() yang menerima angka dan mengembalikannya dalam format Rupiah.
// 3 Buatlah fungsi piramidaAngka($n) yang mencetak piramida angka berdasarkan jumlah baris yang diberikan.

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