<?php

// 1
function jumlahDigit($angka) {
    $angka = strval($angka);
    $total = 0;
    $digits = [];

    for ($i = 0; $i < strlen($angka); $i++) {
        $digits[] = $total += intval($angka[$i]); 
    }

    return $total;
}

// Contoh penggunaan
$angka = 12345;
echo "Jumlah digit dari $angka adalah: " . jumlahDigit($angka);


// 2
function hitungKarakterSama($string) {
    $string = strtolower($string); // Ubah semua huruf jadi kecil
    $frekuensi = count_chars($string, 1); // Hitung jumlah karakter
    $hasil = [];

    foreach ($frekuensi as $asci => $jumlahKemunculanChar) {
            $hasil[] = "[" .chr($asci). "] $jumlahKemunculanChar x";
}

    return implode(", ", $hasil);
}


// Contoh penggunaan
$teks = "helLo world";
$hasil = hitungKarakterSama($teks);

echo "muncul" . $hasil; 



// 3
function formatArray(array $array, string $prefix = '', string $suffix = '') {
    foreach ($array as $index => $value) {
        echo ($index + 1) . ". $prefix" . $value . " " .$suffix . "\n";
    }
}

$arr  = ["10.0000","10.0000","10.0000","10.0000","10.0000","10.0000"];
$arr2  = ["Bambang","Bambang","Bambang","Bambang","Bambang","Bambang"];
formatArray($arr2,"Nama : "," Santri PIT");

// 4
function TambahKarakterPadaArray(array $array, string $tambahan, string $tipe = "teks") {
    $hasil = [];

    foreach ($array as $item) {
        if ($tipe === "angka") {
            $hasil[] = "Rp." . number_format($item, 0, ",", ".");
        } else {
            $hasil[] = $item . " " . $tambahan;
        }
    }

    return $hasil;
}

// Data nama dan angka
$nama = ["Nama1", "Nama2", "Nama3"];
$harga = [10000, 20000, 30000];

// Menambahkan karakter pada nama dan angka
$namaBaru = TambahKarakterPadaArray($nama, "PIT");
$hargaBaru = TambahKarakterPadaArray($harga, "", "angka");

// Cetak hasil
print_r($namaBaru);
print_r($hargaBaru);

// 5
function urutkanStringDariPendekKePanjang(array $arr) {
    usort($arr, fn($a, $b) => strlen($a) - strlen($b));
    return $arr;
}

// Contoh penggunaan
$stringArray = ["apel", "pisang", "kiwi", "semangka"];
$hasil = urutkanStringDariPendekKePanjang($stringArray);

print_r($hasil); 

// 6
function urutkanAngkaNaik($arr) {
    sort($arr);
    return $arr;
}

// Contoh penggunaan
$angkaArray = [50, 2, 100, 1, 5];
$hasil = urutkanAngkaNaik($angkaArray);

print_r($hasil); // Output: [1, 2, 5, 50, 100]

// 7
function FilterArrayMendahulukanGenap(array $arrays) {
    $ganjil = [];
    $genap = [];

    foreach ($arrays as $arr) {
        if (is_numeric($arr)) { // Hanya memproses angka
            if ($arr % 2 == 0) {
                $genap[] = $arr;
            } else {
                $ganjil[] = $arr;
            }
        }
    }

    sort($genap);
    sort($ganjil);

    return array_merge($genap, $ganjil);
}

$angka = [9, "a", "b", "c", 8, 7, 3, 2, 1, 10, 12];

print_r(FilterArrayMendahulukanGenap($angka));
// 8
function angkaGanjilDulu($arr) {
    usort($arr, fn($a, $b) => ($a % 2 !== 0 ? 0 : 1) - ($b % 2 !== 0 ? 0 : 1));
    return $arr;
}

// Contoh penggunaan
$angkaArray = [3, 8, 1, 4, 6, 9];
$hasil = angkaGanjilDulu($angkaArray);

print_r($hasil); // Output: [3, 1, 9, 8, 4, 6]

// 9
function FilterGenapDahulu(array $array) {
    $ganjil = [];
    $genap = [];

    foreach ($array as $arr) {
        if (is_numeric($arr)) { // Hanya memproses angka
            if ($arr % 2 == 0) {
                $genap[] = $arr;
            } else {
                $ganjil[] = $arr;
            }
        }
    }

    sort($genap);
    sort($ganjil);

    return array_merge($genap, $ganjil);
}

$angka = [9, "a", "b", "c", 8, 7, 3, 2, 1, 10, 12];

print_r(FilterGenapDahulu($angka));

// 10
function PisahArrayGenapGanjil(array $arr) {
    $arrGenap = [];
    $arrGanjil = [];

    for($i = 0; $i < count($arr); $i++) {
    $valueOfArray = $arr[$i];
    if ($valueOfArray % 2 == 0) {
        $genap = $valueOfArray;
        $arrGenap[] = $genap;
    } else {
        $ganjil = $valueOfArray;
        $arrGanjil[] = $ganjil;
        }
    }

    $result = ["Genap" => $arrGenap, "Ganjil" => $arrGanjil];
    return $result;

}

$data = [123,456,2347,234,67,1,2,5,7,8,9,89,3,2,6,5,9];

print_r(PisahArrayGenapGanjil($data));
