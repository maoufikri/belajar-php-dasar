<?php

function isPrime($awal, $akhir) {
    $count = 0;

    for ($i = $awal; $i <= $akhir; $i++) {
        $isPrime = true;
        for ($j = 2; $j < $i; $j++) {
            if ($i % $j == 0) {
                $isPrime = false;
                break;
            }
        }
        if ($isPrime) {
            echo $i . " ";
            $count++;
        }
    }
    echo "\nJumlah bilangan prima: " . $count;
}

isPrime(10, 30);