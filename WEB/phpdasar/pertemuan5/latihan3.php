<?php
    $siswa = [
         ["Mela Santika","16171810086", "RPL", "melasantika1602@gmail.com"],
         ["Santika Mela","16171810086", "MM", "santikamela1602@gmail.com"],
         ["Santika ","16171810086", "TKJ", "santika1602@gmail.com"]
      
    ];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Daftar Siswa</title>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <?php foreach($siswa as $s)  :?>
    <ul>
        <li>Nama :<?= $s[0]; ?></li>
        <li>Nis :<?= $s[1]; ?></li>
        <li>Jurusan :<?= $s[2]; ?></li>
        <li>Email :<?= $s[3]; ?></li>
    
    </ul>
        <?php endforeach; ?>
</body>
</html>