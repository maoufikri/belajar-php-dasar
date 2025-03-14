<?php 

include "induk.php";

$lorem = new Html\lorem;
$lorem->lorem();

Html\paragraph::paragraph(); //static method

$kotak = new matematika\persegiPanjang(70,90);
echo $kotak->keliling() . "\n";