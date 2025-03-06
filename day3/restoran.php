<?php

// Restoran
// 1️⃣ Fungsi untuk menambahkan menu makanan
function tambahMenu(&$menu, string $nama) {
    if (!isset($menu[$nama])) {
        $menu[$nama] = 0; 
        echo "Menu '$nama' berhasil ditambahkan!\n";
    } else {
        echo "Menu '$nama' sudah ada!\n";
    }
}

// 2️⃣ Fungsi untuk menetapkan harga pada setiap menu
function setHargaMenu(&$menu, string $nama, int $harga) {
    if (isset($menu[$nama])) {
        $menu[$nama] = $harga;
        echo "Harga untuk '$nama' telah diatur menjadi Rp. " . number_format($harga, 0, ",", ".") . "\n";
    } else {
        echo "Menu '$nama' belum ditambahkan!" . "\n";
    }
}

// 3️⃣ Fungsi untuk melihat seluruh daftar menu + harga
function lihatMenu($menu) {
    echo "📜 Daftar Menu:\n";
    foreach ($menu as $nama => $harga) {
        echo "- $nama : Rp. " . number_format($harga, 0, ",", ".") . "\n";
    }
}

// 4️⃣ Fungsi untuk memilih beberapa menu dan menghitung total harga
function pilihMenuDanHitungTotal($menu, $pilihan) {
    $total = 0;
    echo "🛒 Menu yang dipilih:\n";
    foreach ($pilihan as $nama) {
        if (isset($menu[$nama])) {
            echo "- $nama : Rp. " . number_format($menu[$nama], 0, ",", ".") . "\n";
            $total += $menu[$nama];
        } else {
            echo "- Menu '$nama' tidak ditemukan!" . "\n";
        }
    }
    echo "💰 Total Harga: Rp. " . number_format($total, 0, ",", ".") . "\n";
}

// Contoh penggunaan
$menuMakanan = [];

tambahMenu($menuMakanan, "Nasi Goreng");
tambahMenu($menuMakanan, "Mie Ayam");
tambahMenu($menuMakanan, "Sate Ayam");
tambahMenu($menuMakanan, "Sate Kambing");

setHargaMenu($menuMakanan, "Nasi Goreng", 15000);
setHargaMenu($menuMakanan, "Mie Ayam", 12000);
setHargaMenu($menuMakanan, "Sate Ayam", 25000);
setHargaMenu($menuMakanan, "Sate Kambing", 25000);

lihatMenu($menuMakanan);

$pilihanUser = ["Nasi Goreng", "Sate Ayam"];
pilihMenuDanHitungTotal($menuMakanan, $pilihanUser);
