<?php
// tugas loop data pit sama $i jadi
$dataPit = [
    'Hubaib',
    'Ujang',
    'Bambang',
    'Asep',
    'Udin',
    'Budi',
    'Rudi',
    'Caca',
    'Dedi',];

$i = 0;

// while ($i < count($dataPit)) {
//     if (count($dataPit) % 2 == 0) {
//     echo $i . '. Nama :' . $dataPit[$i] . "\n";
//     $i++;
// }
// }

$ukuran = 7;

for($i =1; $i <= $ukuran; $i++) {
    for($o =1; $o <= $ukuran; $o++) {
        if ($o == $i || $o == ($ukuran - $i)) {
            echo '*';
} else {
    echo ' ';
    }
}
    echo "\n";
}