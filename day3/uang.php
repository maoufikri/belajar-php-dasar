<?php

function cekDiskon($harga ,$diskon) {
    if (($diskon < 0) || ($diskon > 100)) {
        return "diskon harus dengan range 0-100% ";
}

$hasilDiskon = $harga - ($harga * $diskon / 100);
return "Harga setelah diskon adalah : " . number_format($hasilDiskon, 0 , ',', '.') . "\n";
}

echo cekDiskon(100000, 20);

function formatUang($jumlah, $kodeMataUang, $lokal = "id_ID") {
    $formatter = new NumberFormatter($lokal, NumberFormatter::CURRENCY);
    return $formatter->formatCurrency($jumlah, $kodeMataUang);
}

// Contoh penggunaan:
echo formatUang(150000, "IDR"); 
echo "\n";
echo formatUang(50, "USD", "en_US"); 
echo "\n";
echo formatUang(1000, "EUR", "fr_FR");
echo "\n";
echo formatUang(2000, "JPY", "ja_JP");
