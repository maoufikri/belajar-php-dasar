<?php

function cekUmur($tanggal_lahir) {
    $lahir = DateTime::createFromFormat("d/m/Y", $tanggal_lahir);
    if (!$lahir) {
        return "Format tanggal salah! Gunakan format dd/mm/yyyy.";
    }

    $sekarang = new DateTime();
    $umur = $sekarang->diff($lahir)->y;
    
    return "Umur kamu sekarang: $umur tahun.";
}


function cekHariUltah($tanggal_lahir) {
    $lahir = DateTime::createFromFormat("d/m/Y", $tanggal_lahir);
    if (!$lahir) {
        return "Format tanggal salah! Gunakan format dd/mm/yyyy.";
    }
    
    $ulang_tahun = DateTime::createFromFormat("d/m/Y", $lahir->format("d/m") . "/" . date("Y"));
    $sekarang = new DateTime();
    
    if ($ulang_tahun < $sekarang) {  
        $ulang_tahun->modify("+1 year");
    }
    
    $selisih = $sekarang->diff($ulang_tahun)->days;
    return "Ulang tahun kamu tinggal $selisih hari lagi!";
}


function cekWaktuNegara($negara) {
    $zona_waktu = new DateTimeZone($negara);
    $waktu = new DateTime("now", $zona_waktu);
    return "Waktu di $negara sekarang: " . $waktu->format("d/m/Y H:i:s");
}

// Contoh penggunaan:
echo cekWaktuNegara("Asia/Tokyo");

// Contoh penggunaan:
echo cekUmur("10/05/2000");

// Contoh penggunaan:
echo cekHariUltah("10/05/2000");