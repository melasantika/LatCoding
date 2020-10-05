<?php
// value:
// define pemanggilan tidak menggunakan dolar, nama kapital
// constant pemanggilan tidak menggunakan dolar, nama kapital

// define('NAMA', 'Mela Santika');
// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR


// class Coba {
//     const NAMA ='Mela Santika';
// }

// echo Coba::Nama;





// magic constant : yang sudah disediakan php yang sudah memiliki nilai
// echo __LINE__; :MENAMPILKAN FILE INI DIBARIS BERAPA
// echo __FILE__; : akan menampilkan alamat contantnya ada dimana

// function coba() {
//     return __FUNCTION__;
// }
// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;
echo $obj->kelas;
?>