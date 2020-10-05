<?php
// pertemuan 2 - PHP Dasar
// sintaks php

// standar Output
// echo, print (sama) echo "Mela Santika";
// print_r (bugging) print_r ("Mela Santika");
// var_dump (bugging) var_dump ("Mela Santika");
// khusus untuk php kutip 2 (") lebih sakti

// variabel dan tipe data
// variabel (menampung sebuah nilai)
// tidak boleh diawali dengan angka, tapi boleh mengandung angka, tidak boleh pake spasi dan lambang minus
// $nama = "mela";
// echo 'Halo, nama saya $nama'; (")


// operator
// aritmatika
//  + - * / %
// $x = 10;
// $y = 20;
// echo $x * $y;

// penggabung string / concatenation / concat
// .
//  $nama_depan = "mela";
// $nama_belakang = "santika";
// echo $nama_belakang . " " . $nama_belakang;

// assigment
// =, +=, -=, *=, /=, %=, .=
// $x = 1;
// $x -= 5;
// echo $x;
// $nama = "mela";
// $nama .= " ";
// $nama .= "santika";
// echo $nama;


// perbandingan (membuat pengkondisian), menghasilkan nilai bolean, mengecek nilai
//  <, >, <=, >= == !=
// var_dump(1 < 5 );

// identitas (mengecek nilai dan tipe data)
// ===, !==
// var_dump(1 === "1");

// logika
// &&(dua nilai harus true AND), ||(cukup satu nilai true OR), !
// $x = 10;
// var_dump($x < 20 || @x % 2 == 0);
?>



// penulisan sintaks PHP
// 1. PHP di dalam HTML
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
<body>
    <h1>Halo, Selamat datang <?php echo "mela santika"; ?></h1>
</body>
</html> -->

// 2. HTML di dalam php
<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Belajar PHP</title>
</head>
<body>
    <?php
    echo "<h1>Halo, selamat datang mela santika </h1>";
    ?>
</body>
</html> -->

<!-- variabel dan tipe data -->
<!-- variabel (menampung sebuah nilai) -->


