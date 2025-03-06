<?php

// 1. Buat variabel untuk menyimpan nama, usia, dan status aktif pengguna.
// 2. Deklarasikan variabel lokal di dalam function dan coba akses di luar function.
// 3. Gunakan variabel global dalam function dan tampilkan nilainya.
// 4. Buat array yang berisi daftar makanan favorit.
// 5. Coba tangkap data dari URL menggunakan $_GET dan tampilkan.
// 6. Gunakan gaya penamaan camelCase untuk mendeklarasikan 3 variabel yang berbeda.
// 7. Buat contoh variabel dengan snake_case dan PascalCase.

// 1
$nama = "Fikri";
$usia = 18;
$statusAktif = true;

// 2
function cobaAksesVariabelLuar() {
    $namaLokal = "Fikri";
    echo "Nama Lokal: $namaLokal " . "\n";
    }
    cobaAksesVariabelLuar();

// 3
$variabelGlobal = "Fikri";
function cobaAksesVariabelGlobal() {
    global $variabelGlobal;
    echo "Variabel Global: $variabelGlobal " . "\n";
    }
    cobaAksesVariabelGlobal();

// 4
$makananFavorit = ["Mie Goreng", "Nasi Goreng", "Mie Rebus"];

// 5
