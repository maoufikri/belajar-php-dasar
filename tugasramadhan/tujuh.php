<?php

function nilai($nilai) {
    if ($nilai === 100) {
        echo "Sempurna";
    } else if ($nilai >= 90 && $nilai <= 99) {
        echo "Sangat Bagus";
    } else if ($nilai >= 80 && $nilai <= 89) {
        echo "Bagus";
    } else if ($nilai >= 70 && $nilai <= 79) {
        if ($nilai >= 75) {
            echo "Cukup";
        } else {
            echo "Cukup Tapi Remedial wkkwkw";
        }
    } else if ($nilai >= 50 && $nilai <= 69) {
        echo "Belajar Lagi (Remedial)";
    } else if ($nilai >=0 && $nilai <= 49) {
        echo "Ulagi lagi Pelajarannya 10 x (Remedial)";
    } else {
        echo "pastikan nilainya tidak lebih dari 100 atau kuran dari 0";
    }
}

nilai(69);