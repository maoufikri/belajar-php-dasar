<?php

function Capitalize($str) {
    $kecil = "abcdefghijklmnopqrstuvwxyz";
    $besar = "ABCDEFGHIJKLMNOPQRSTUVWXYZ";
    $hasil = "";
    $spasi = " ";
    $kata_baru = true;
    $kata_hubung = [
        "dan", "atau", "yang", "di", "ke", "dari", "untuk", "dengan", "sebagai", "pada", 
        "tetapi", "melainkan", "padahal", "sedangkan", 
        "bahwa", "karena", "sebab", "agar", "supaya", "jika", "bila", "apabila", "walaupun", 
        "meskipun", "kendatipun", "seandainya", "sampai", "sejak", "sebelum", "sesudah", 
        "ketika", "sementara", "selagi", "selama", 
        "baik", "maupun", "tidak hanya", "tetapi juga", "entah", "jangankan", "pun", 
        "sedemikian rupa", "sehingga", "demikian", 
        "seperti", "ibarat", "bagaikan", "laksana", 
        "asalkan", "oleh karena itu"
    ];
        
    $kata_array = [];
    $kata = "";
    
    for ($i = 0; isset($str[$i]); $i++) {
        if ($str[$i] == $spasi) {
            if ($kata != "") { 
                $kata_array[] = $kata; 
                $kata = ""; 
            }
            $kata_array[] = $spasi;
        } else {
            $kata .= $str[$i];
        }
    }
    if ($kata != "") {
        $kata_array[] = $kata;
    }
    
    for ($i = 0; isset($kata_array[$i]); $i++) {
        $kata = $kata_array[$i];
        
        if ($kata == $spasi) {
            $hasil .= $kata;
        } else {
            $is_kata_hubung = false;
            for ($j = 0; isset($kata_hubung[$j]); $j++) {
                if ($kata == $kata_hubung[$j]) {
                    $is_kata_hubung = true;
                    break;
                }
            }

            if (!$is_kata_hubung) {
                $kata_baru = "";
                $huruf_pertama = $kata[0];

                for ($j = 0; isset($kecil[$j]); $j++) {
                    if ($huruf_pertama == $kecil[$j]) {
                        $huruf_pertama = $besar[$j];
                        break;
                    }
                }
                
                $kata_baru .= $huruf_pertama;
                for ($j = 1; isset($kata[$j]); $j++) {
                    $kata_baru .= $kata[$j];
                }
                $kata = $kata_baru;
            }
            
            $hasil .= $kata; 
        }
    }
    
    return $hasil;
}

echo Capitalize("DAUN YANG JATUH TAK AKAN MENYALAHKANANGIN"); 
echo Capitalize("laut bercerita Laut Bercerita"); 
echo Capitalize("NeGeRi AntAH BerAntAH Negeri Antah Berantah"); 
