<?php
// 1
function penjumlahan(int $a,int $b) {
        return $a + $b;
}
$a = 5;
$b = 6;
echo penjumlahan($a, $b) . "\n";

// 2
function hello(string $nama) {
        return "Hello, $nama";
}
$nama = "Gaby";
echo hello($nama) . "\n";

// 3
function faktorial(int $n) {
    if($n === 0) {
        return 1;
    } else {
        return $n * faktorial($n - 1);
    }

}
echo faktorial(5) . "\n";
// 4
function tertinggi(int $a,int $b) {
    if ($a > $b) {
        return $a . " tertinggi";
    } else {
        return $b . " tertinggi";
    }
}
echo tertinggi(5, 7) . "\n";

// 5
function pembagian(int $a ,int $b) {
    if ($b === 0){
        return "INFINITY CUYY/ NOT DEFINED";
    } else {
        return $a / $b;
    }
}
echo pembagian(0, 10) . "\n";

// 6
function sameCharacter(string $a) {
    $a = strtolower($a);
    $hitung = count_chars($a, 1);
    $hasil = [];

    foreach ($hitung as $asci => $jumlahkemunculan) {
        $hasil[] = "[" . chr($asci) . "] $jumlahkemunculan x";
    }
        return implode(",", $hasil);

}

$betaTest = "Muhammad Fikri Baihaqi";
$hasil = sameCharacter($betaTest);
echo "muncul" . $hasil . "\n";