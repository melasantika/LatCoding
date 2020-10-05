<?php

require_once __DIR__ . '/vendor/autoload.php';

require 'functions.php';
$siswa = query("SELECT *FROM tbl_siswa");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
    <link rel="stylesheet" href="css/print.css">
</head>
<body>
    <h1>Daftar Siswa</h1>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>gambar</th>
        <th>nama</th>
        <th>nis</th>
        <th>kelas</th>
        <th>jurusan</th>
    </tr>';

    $i = 1;
    foreach( $siswa as $row) {
        $html .= '<tr>
            <td>'. $i++ .'</td>
            <td><img src="img/'. $row["gambar"] .'"></td>
            <td>'. $row["nama"] .'</td>
            <td>'. $row["nis"] .'</td>
            <td>'. $row["kelas"] .'</td>
            <td>'. $row["jurusan"] .'</td>
        </tr>';
    }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-siswa.pdf', 'I');

?>
