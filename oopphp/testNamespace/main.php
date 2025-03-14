<?php 

include "induk.php";

$lorem = new Html\lorem;
$lorem->lorem();


$kotak = new matematika\persegiPanjang(70,90);
echo $kotak->keliling();