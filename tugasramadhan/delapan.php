<?php

function enkripsi($kata) {
    $enkripsi = "";
    $besar = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $kecil = "abcdefghijklmnopqrstuvwxyz";

    for ($i=0; isset($kata[$i]); $i++) {
        $huruf = $kata[$i];
        $sesudahenkrips = $huruf;

        for($k=0; isset($besar[$k]); $k++) {
            if ($huruf ==  $besar[$k]) {
                $sesudahenkrips = isset($besar[$k+1]) ? $besar[$k+1] : $besar[0];
                break;
            }
    }

    for($k=0; isset($kecil[$k]); $k++) {
        if ($huruf ==  $kecil[$k]) {
            $sesudahenkrips = isset($kecil[$k+1]) ? $kecil[$k+1] : $kecil[0];
            break;
        }
    }

    $enkripsi .= $sesudahenkrips;
}
return $enkripsi;
}


function deskripsi($kata) {
    $deskripsi = "";
    $besar = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $kecil = "abcdefghijklmnopqrstuvwxyz";

    for ($i=0; isset($kata[$i]); $i++) {
        $huruf = $kata[$i];
        $kataasli = $huruf;

        for($k=0; isset($besar[$k]); $k++) {
            if ($huruf ==  $besar[$k]) {
                $kataasli = isset($besar[$k-1]) ? $besar[$k-1] : $besar[0];
                break;
            }
    }

    for($k=0; isset($kecil[$k]); $k++) {
        if ($huruf ==  $kecil[$k]) {
            $kataasli = isset($kecil[$k-1]) ? $kecil[$k-1] : $kecil[0];
            break;
        }
    }

    $deskripsi .= $kataasli;
}
return $deskripsi;
}

echo enkripsi("zainab") . "\n";
echo deskripsi("abjobc");