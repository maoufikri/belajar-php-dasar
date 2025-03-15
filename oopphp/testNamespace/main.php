<?php 

include "induk.php";

use Html\lorem;
use Html\kembar;
use matematika\kembar as kembar2;
use matematika\kembar as kembar3;
use matematika\segitiga\segitiga;
// use matematika\segitiga\kembar as kembar3; //error karena tidak ada kelas kembar di matematika\segitiga.

$lorem = new lorem;
$lorem->lorem();

Html\paragraph::paragraph(); //static method

$kotak = new matematika\persegiPanjang(70,90);
echo $kotak->keliling()."\n";

$kembar1 = new kembar;
$kembar2 = new kembar2;
$kembar3 = new kembar3;

$segitiga = new segitiga(90,80);