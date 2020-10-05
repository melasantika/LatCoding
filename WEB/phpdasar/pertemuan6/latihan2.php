<?php
    // $siswa = [
    //     ["Mela", "09", "mela@gmail.com", "tkj"],
    //     ["Mela", "09", "mela@gmail.com", "tkj"],

    // ];


    // array Assosiative
    // definisinya sama seperti aray numerik, kecuali
    // key-nya adalah string yang akan kita buat sendiri
    $siswa = [
            
            ["nama" => "mela santika",
             "nis" => "123",
             "email" => "mela@gmail.com",
             "jurusan" => "RPL",
             "gambar" => "cewe.png"
            ],

            ["nama" => "mela santika",
             "nis" => "123",
             "email" => "mela@gmail.com",
             "jurusan" => "RPL",
             "gambar" => "cowo.png"
            ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Latihan array assosiative</title>
</head>
<body>
<h1>Daftar Siswa</h1>
    <?php foreach($siswa as $s) : ?>
    <ul>
        <li>
            <img src="img/<?= $s["gambar"]; ?>">
        </li>
        <li>Nama    : <?= $s["nama"]; ?></li>
        <li>Nis     : <?= $s["nis"]; ?></li>
        <li>Email   : <?= $s["email"]; ?></li>
        <li>Jurusan : <?= $s["jurusan"]; ?></li>
    </ul>
<?php endforeach; ?>
    
</body>
</html>
