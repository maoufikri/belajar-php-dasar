<?php

// 1

function domba($domba) {
    $present = 0;
    $alpha = 0;
    
    foreach ($domba as $domb) {
        if (is_bool($domb)) { 
            if ($domb == true) {
                $present++;
            } else {
                $alpha++;
            }
        }
    }
    return "present = $present, alpha = $alpha";
}

$domba = [true, true, true, false, true, true, true, true , true, false, true, false,
true, false, false, true , true, true, true, true , false, false, true, true, "a", 123];
echo domba($domba) . "\n";

// 2
function multiple($angka) {
    if ($angka % 3 == 0 || $angka % 7 == 0) {
        return "true";
    } else {
        return "false";
    }
}
echo multiple(8) . "\n";

// 3
function century($tahun) {
    return ceil($tahun / 100);
}

echo century(2002) . "\n";

// 4
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

// 5
function TambahKarakterPadaArray(array $array, string $tambahan, string $tipe = "teks") {
    $hasil = [];

    foreach ($array as $item) {
        if ($tipe === "angka") {
            $hasil[] = "Rp." . number_format($item, 0, ",", ".") . ",00-";
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
$namaBaru = TambahKarakterPadaArray($nama, "-kun");
$hargaBaru = TambahKarakterPadaArray($harga, "", "angka");

// Cetak hasil
print_r($namaBaru);
print_r($hargaBaru);

// 6 & 7
$menuBudheNar = [
    'nasi goreng' => 0, 
    'mie ayam' => 0,
    'bakso' => 0,
    'sate ayam' => 0,
    'sate kambing' => 0
];
function tampilkanMenu($menu) {
    echo " Daftar Menu:" . "\n";
    foreach ($menu as $nama => $harga) {
        echo "- $nama : Rp. " . number_format($harga, 0, ",", ".") . "\n";
    }
}

function setHargaMenu(&$menu, string $nama, int $harga) {
    if (isset($menu[$nama])) {
        $menu[$nama] = $harga;
        echo "Harga untuk '$nama' telah diatur menjadi Rp. " . number_format($harga, 0, ",", ".") . "\n";     
    } else {
        echo "Menu '$nama' tidak ada!" . "\n";
    }

}

setHargaMenu($menuBudheNar, 'nasi goreng', 15000);
setHargaMenu($menuBudheNar, 'mie ayam', 8000);
setHargaMenu($menuBudheNar, 'bakso', 8000);
setHargaMenu($menuBudheNar, 'sate ayam', 10000);
setHargaMenu($menuBudheNar, 'sate kambing', 13000);
setHargaMenu($menuBudheNar, 'nissan', 13000);
tampilkanMenu($menuBudheNar);
