<?php

function AduElemen($pemain1, $pemain2) {

    if ($pemain1 != "api" && $pemain1 != "air" && $pemain1 != "tanah" && $pemain1 != "angin" && $pemain1 != "es") {
        return "element tidak ditemukan";
    }
    
    if ($pemain2 != "api" && $pemain2 != "air" && $pemain2 != "tanah" && $pemain2 != "angin" && $pemain2 != "es") {
        return "element tidak ditemukan";
    }

    if ($pemain1 == $pemain2) {
        return "Seri";
    }

    if ($pemain1 == "api") {
        if ($pemain2 == "es" || $pemain2 == "angin") {
            return "Pemain 1 Menang";
        } else {
            return "Pemain 2 Menang";
        }
    }
    if ($pemain1 == "air") {
        if ($pemain2 == "api" || $pemain2 == "tanah") {
            return "Pemain 1 Menang";
        } else {
            return "Pemain 2 Menang";
        }
    }
    if ($pemain1 == "tanah") {
        if ($pemain2 == "api" || $pemain2 == "angin") {
            return "Pemain 1 Menang";
        } else {
            return "Pemain 2 Menang";
        }
    }
    if ($pemain1 == "angin") {
        if ($pemain2 == "air" || $pemain2 == "es") {
            return "Pemain 1 Menang";
        } else {
            return "Pemain 2 Menang";
        }
    }
    if ($pemain1 == "es") {
        if ($pemain2 == "air" || $pemain2 == "tanah") {
            return "Pemain 1 Menang";
        } else {
            return "Pemain 2 Menang";
        }
    }

}

echo "Perang Elemen" . "\n";
echo "=============================" . "\n";
echo "gunakan format pemain1, pemain2" . "\n";
echo "elemen yang tersedia adalah elemen dasar : api, air, tanah, angin, es" . "\n";
echo AduElemen("api", "tanah");