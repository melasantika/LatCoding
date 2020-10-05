<?php
require 'functions.php';
$siswa = query("SELECT * FROM tbl_siswa");

// jika tombol cari di klik
if(isset ($_POST["cari"]) ){
    $siswa = cari($_POST["keyword"]);
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Halaman Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Daftar Siswa</h1>

    <a href="tambah.php">Tambah data siswa</a>
    <br><br>

    <form action="" method="post">
         <input type="text" name="keyword" size="30" 
         autofocus placeholder="masukan keyword pencarian.." 
         autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th>Aksi</th>
        <th>gambar</th>
        <th>nama</th>
        <th>nis</th>
        <th>kelas</th>
        <th>jurusan</th>
    </tr>
    <?php $i=1; ?>
    <?php foreach($siswa as $row) : ?>
    <tr>
    <td><?= $i;?></td>
    <td>
        <a href="ubah.php?id=<?= $row["id"] ?>">ubah</a> |
        <a href="hapus.php?id=<?= $row["id"];?>" onclick="return confirm('yakin');">hapus</a>
    </td>

    <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["nis"];?></td>
    <td><?= $row["kelas"];?></td>
    <td><?= $row["jurusan"];?></td>
    </tr>
<?php $i++; ?>
<?php endforeach;?>
    </table>
</body>
</html>