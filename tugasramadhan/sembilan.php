<?php


function segitigaTerbalik($n) {
    for ($i = $n; $i >= 1; $i--) { 
        for ($j = $i; $j >= 1; $j--) { 
            echo $j . " ";
        }
        echo "\n";
    }
}

segitigaTerbalik(5);

