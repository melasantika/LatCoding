<?php
// cek apakah tidak ada ada data di $_GET
if ( !isset($_GET["nama"]) || 
    !isset($_GET["kelas"]) || 
    !isset($_GET["jurusan"]) || 
    !isset($_GET["nis"])) {

// redirect:memindahkan sebuah user ke halaman lain
    header("Location: latihan1.php");
    exit;

} 
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>detail siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <ul>
        <li><img src ="img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["kelas"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
        <li><?= $_GET["nis"]; ?></li>
    
    
    </ul>

<a href="latihan1.php">kembali ke daftar siswa</a>
</body>
</html>