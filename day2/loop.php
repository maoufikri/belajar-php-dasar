<?php 

$dataPit = [
  'Muhammad',
  'Ahmad',
  'Ali',
  'Umar',
  'Usman',
  'Abdullah',
  'Abdurrahman',
  'Ibrahim',
  'Yusuf',
  'Hasan',
  'Husain',
  'Musa',
  'Isa',
  'Idris',
  'Sulaiman',
  'Daud',
  'Yunus',
  'Harun',
  'Zakaria',
  'Yahya',
  'Ismail',
  'Ishaq',
  'Yakub',
  'Luth',
  'Nuh',
  'Adam',
  'Syuaib',
  'Ayyub',
  'Dzulkifli',
  'Ilyas',
  'Ilyasa',
  'Shalih',
  'Hud',
  'Zulkarnain',
  'Ubaidah',
  'Thalut',
  'Jalut',
  'Fir\'aun',
  'Hamman',
  'Qarun',
  'Abu Bakar',
  'Umar',
  'Usman',
  'Ali',
  'Khalid',
  'Amr',
  'Bilal',
  'Zaid',
  'Saad',
  'Sa\'id',
  'Ubaidah',
  'Uqbah',
  'Uwais',
  'Wahb',
  'Yazid',
  'Zubair',
  'Zaidan',
  'Zakwan',
  'Zamzam',
  'Zuhair',
  'Zuhdi',
  'Zuhri',
  'Zulfikar',
  'Zulkifli',
  'Zumar',
  'Zunaira',
  'Zuraida',
  'Zuriah',];

  $dataSantri = [
    "nama" => "Santri Fulan",
    "Alamat" => "Santri Alamat"
  ];

// $i = 0;

// while ($i < count($dataPit)) {
//   echo $i . '. Nama : '. $dataPit[$i] . "\n" ;
//   $i++;
// }

// $i = 10;
// while ($i < 100) {
//   $i+= 10;
//   echo $i;
// }

// do {
//   echo $i;
//   $i++;
// }  while ($i < 6);

// for ($x = 0; $x + 1 <=  count($dataPit); $x++) {
//   echo  $x +1 .". Nama : $dataPit[$x]". "\n";
// }

// $dataPit[15] = "Fulan";

// echo $dataPit[15];

// print_r($dataPit);

// foreach($dataSantri as $i => $d) {
//   // if($data == "Ali") $data = "Ali edit";
//     echo $d  .": " . $d . "\n";
//   // echo $value . "\n";
// }
// $x = 100;
// $y = 50;
// var_dump($x == 100 and $y == 50);



// X with Loop

// $ukuran = 7;

// for($i = 1; $i <= $ukuran ; $i++){
//   for($o = 1; $o <= $ukuran ; $o++) {
//     if ($o == $i || $o == ($ukuran - $i)) {
//         echo "*";
//     } else {
//       echo "-";
//     }
//   }
//   echo "\n";
// }



$tinggi = 7;

for($i = $tinggi; $i >= 1 ; $i--){
  for($o = $tinggi; $o > $i; $o--){
    echo " ";
  }
  for($p = 1; $p <= (2 * $i - 1); $p++){
    echo "*";
  }
  echo "\n";
}

// Segitiga with Loop  

// bagian bawah
// $tinggi = 7;

for($i = 1; $i <= $tinggi ; $i++){
  for($o = $tinggi; $o > $i; $o--){
    echo " ";
  }
  for($p = 1; $p <= (2 * $i - 1); $p++){
    echo "*";
  }
  echo "\n";
}