<?php

function faktorial($angka) {
    if ($angka ===  0) {
        return 1;
    } else {
        return $angka * faktorial($angka - 1);
    }
}

echo faktorial(5);