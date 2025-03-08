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

$domba1 = [123, 'kambing', false, true, null, 'domba', 456, true, false, 'true', 789, true, true];
$domba2 = [true, 'true', 'false', false, true, 'domba', null, false, true, 'kambing', 234];
$domba3 = [false, true, 'domba', 567, 'kambing', null, true, false, 'false', 890, 'true'];
$domba4 = ['domba', true, 'false', false, true, false, 231, 432, 'domba', null, true, true, true];
$domba5 = [true, false, 342, 'domba', true, true, true, true, true, false, true, null, null, 2, 'sapi', true, true];

echo domba($domba1) . "\n";

// 2
$number1 = [3, 12, 43, 21, 90, 120, 1330];
$number2 = [321, 64, 3, 24, 80, 34, 60];
$number3 = [99, 89, 45, 21, 75, 23, 55];
$number4 = [40, 12, 41992, 21, 908493, 13420, 1330];

function multiple($angka) {
    foreach ($angka as $value) {
        if ($value % 3 == 0 || $value % 7 == 0) {
            echo "[" . $value . "]" . "true" . ",";
        } else 
        {
            echo "[" . $value . "]" . "false" . ",";
        }
    } 
}
echo multiple($number4) . "\n";

// 3
$abad1 = [1000, 2309, 2341, 1001, 2022];
$abad2 = [210, 2031, 9201, 3209, 2432];
$abad3 = [909, 122, 3221, 1401, 2222];
$abad4 = [230, 2309, 2341, 12, 20022];
$abad5 = [100, 2, 43, 56, 9098];

function century($tahun) {
    foreach ($tahun as $value) {
        echo $value . " = " . ceil($value / 100) . "\n";
    }
}

echo century($abad5) . "\n";

// 4
$numbers1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$numbers2 = [23, 53532, 625265, 1230984, 102];
$numbers3 = [123, 234, 345, 456, 567, 678, 789, 890, 901, 1011];
$numbers4 = [4902,902, 32, 31, 78, 424];
$numbers5 = [8932, 971902, 2179879, 31378121321, 4327190];

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

print_r(PisahArrayGenapGanjil($numbers5));

// 5
$add2 = [232000, 15000000000000, 'Frodo', 'Legolas', 'Sukardi', 2500, 'Hataru', 9320200];
$add3 = [20000, 'Aragorn','Legolas',320090, 'Naruto', 3000, 7500, 'Bambang'];
$add4 = ['Siti', 340023, 'Samwise', 'Boromir', 43000, 604000];
$add5 = ['Joko', 30000, 'Dwarf', 5000, 'Gwenn', 'Pippin', 2300, 2300,'Conan',920000000000000000000];

function TambahKarakterPadaArray(array $array, string $prefix = '', string $suffix = '') {
    foreach ($array as $index ) {
        if (is_numeric($index)) {
           echo "Rp." . $index .  ",00-" . "\n";
        } else if (is_string($index)) {
            echo "Pak " . $index  . " -kun" . "\n";
        }
    }
}

echo TambahKarakterPadaArray($add5);


// 6 & 7
$menu = [
    'makanan' => [
        'ayam' => [
            'ayam bakar',
            'ayam goreng',
            'ayam sambal',
            'ayam kecap'
        ],
        'ikan' => [
            'ikan bakar',
            'ikan goreng',
            'ikan sambal',
            'ikan kecap'
        ],
        'sapi' => [
            'sapi bakar',
            'sapi goreng',
            'sapi sambal',
            'sapi kecap'
        ],
        'kambing' => [
            'kambing bakar',
            'kambing goreng',
            'kambing sambal',
            'kambing kecap'
        ]
        ],
    "minuman" =>[
        'es teh',
        'es jeruk',
        'es anggur',
        "masirmas",
        "teh sisri",
        "es teh anget",
        "soda gembira"
    ]
];
function tampilkanMenu($menu) {
    echo " Daftar Menu:" . "\n";
    echo "Makanan:" . "\n";
    foreach ($menu['makanan'] as $nama => $item) {
        echo "menu: " ."$nama" . "\n";
        foreach ($item as $item) {
            echo "-" . "$item" . "\n"; 
        }
    echo "minuman:" . "\n";
    foreach ($menu['minuman'] as $minuman) {
        echo "-" . "$minuman" . "\n";
            }
    }

}

function setHargaMenu(&$menu, $kategori, $nama, $harga, $jenis = '') {
    // Jika kategori ada di dalam menu
    if (isset($menu[$kategori])) {
        // Jika kategori makanan (butuh jenis)
        if (is_array($menu[$kategori]) && isset($menu[$kategori][$jenis])) {
            if (in_array($nama, $menu[$kategori][$jenis])) {
                $key = array_search($nama, $menu[$kategori][$jenis]);
                $menu[$kategori][$jenis][$key] = ["nama" => $nama, "harga" => $harga];
                echo "Harga untuk '$nama' telah diatur menjadi Rp. " . number_format($harga, 0, ",", ".") . "\n";
                return;
            }
        }
        // Jika kategori minuman (tanpa jenis)
        elseif (in_array($nama, $menu[$kategori])) {
            $key = array_search($nama, $menu[$kategori]);
            $menu[$kategori][$key] = ["nama" => $nama, "harga" => $harga];
            echo "Harga untuk '$nama' telah diatur menjadi Rp. " . number_format($harga, 0, ",", ".") . "\n";
            return;
        }
    }
    
    // Kalau nggak ketemu
    echo "Menu '$nama' belum ditambahkan dalam kategori '$kategori'!\n";
}

 

setHargaMenu($menu, "minuman", 'teh sisri', 15000, '');

// tampilkanMenu($menu);
print_r($menu);
