<?php
// date
    // memanggil fungsi dalam php yaitu hari
    // echo date("l");
    // memanggil fungsi dalam php yaitu tanggal
    // echo date("d");
    // memanggil fungsi dalam php yaitu bulan
    // echo date("m");
    // memanggil fungsi dalam php yaitu tahun
    // echo date("y");
    // echo date("l, d-m-y");

// time
    // tidak usah memakai parameter
    // Unix Timestamp / EPOCH time
    // detik yang sudah berlalu dari 1 januari 1970 sampai sekarang
    // echo time();
    
    // menghitung hari apa 100 hari kedepan
    // echo date("l M Y", time()+60*60*24*100);

    // mktime
    // membuat sendiri detik
    // (0,0,0,0,0,0)
    // jam, menit, detik, bulan, tanggal, tahun
    // mencari hari apa kita lahir
    // echo date("l", mktime(0,0,0,9,16,2002));

    // strtotime
    // sama seperti mktime tetapi nilainya string
    echo date ("l", strtotime("16 sep 2002"));


?>