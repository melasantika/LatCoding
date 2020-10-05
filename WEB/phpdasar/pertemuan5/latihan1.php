<?php
// array
// variabel yang dapat memiliki banyak nilai
// elemen pada array tipe datanya boleh beda
// pasangan antara key dan value
// keynya adalah index yang dimulai dari nol
// cara membuat array:
// cara lama
$hari = array("senin", "selasa", "rabu");
// cara baru
$bulan = ["januari", "februari"];
$arr1 = [123, "tulisan", "false"];

// menampilkan array
// menggunakan var_dump() / print_r()
// var_dump($bulan);
// echo"<br>";
// print_r($hari);
// echo "<br>";

// menampilkan satu elmen pada array
// echo $arr1[0];
// echo "<br>";
// echo $bulan[1];

// menambahkan elemen baru pada array
var_dump($hari);
$hari[] = "kamis";
$hari[] = "jumat";
echo "<br>";
var_dump($hari);
?>