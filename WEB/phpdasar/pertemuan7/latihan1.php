<!-- variabel superglobals $_GET -->
<?php
$siswa = [
    [
        "nama"=> "Mela santika",
        "kelas"=> "XI-rpl",
        "jurusan"=> "RPL",
        "nis"=>"098983768",
        "gambar"=>"cewe.png"

    ],

    [
        "nama"=> "dewa adjie arayana",
        "kelas"=> "XI-rpl",
        "jurusan"=> "RPL",
        "nis"=>"098983768",
        "gambar"=>"laki.png"

    ],

    [
        "nama"=> "santika",
        "kelas"=> "XI-rpl",
        "jurusan"=> "RPL",
        "nis"=>"098983768",
        "gambar"=>"cewe.png"

    ],

]

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>GET</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Data Siswa</h1>
    <?php foreach($siswa as $s )  :?>
    <li>
        <a href="latihan2.php?nama=<?= $s["nama"]; ?>&kelas=<?= $s["kelas"]; ?>
        &jurusan=<?= $s["jurusan"]; ?>&nis=<?= $s["nis"]; ?>&gambar=<?= $s["gambar"]; ?>"><?= $s["nama"]; ?>
    </li>
        <!-- <ul>
            <li><img src="img/<?= $s["gambar"]; ?>"></li>
            <li>nama :<?= $s ["nama"]; ?></li>
            <li>kelas :<?= $s ["kelas"]; ?></li>
            <li>jurusan :<?= $s ["jurusan"]; ?></li>
            <li>nis :<?= $s ["nis"]; ?></li>
        
        </ul> -->
    <?php endforeach ;?>
</body>
</html>