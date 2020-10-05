<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;

}
require 'functions.php';

// pagination
// konfigurasi
$jumlahDataPerHalaman = 2;
$jumlahData = count(query("SELECT * FROM tbl_siswa"));
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerHalaman);
$halamanAktif = ( isset($_GET["halaman"])) ? $_GET["halaman"] : 1;
$awalData = ($jumlahDataPerHalaman * $halamanAktif) - $jumlahDataPerHalaman;


$siswa = query("SELECT *FROM tbl_siswa LIMIT $awalData, $jumlahDataPerHalaman");

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

    <a href="logout.php">Logout</a>
    <h1>Daftar Siswa</h1>

    <a href="tambah.php">tambah data siswa</a>
    <br><br>

    <form action="" method="post">
         <input type="text" name="keyword" size="30" autofocus placeholder="masukan keyword pencarian.." autocomplete="off">
        <button type="submit" name="cari">Cari!</button>
    </form>
    <br> 


<!-- navigasi -->
<?php if ( $halamanAktif > 1 ): ?>
    <a href="?halaman=<?= $halamanAktif- 1; ?>">&laquo;</a>
<?php endif; ?>

<?php for($i = 1; $i <= $jumlahHalaman; $i++) : ?>
    <?php if( $i == $halamanAktif ) : ?>
        <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?= $i ?></a>
    <?php else : ?>
        <a href="?halaman=<?= $i; ?>"><?= $i ?></a>
    <?php endif; ?>
<?php endfor; ?>


<?php if ( $halamanAktif < $jumlahHalaman ): ?>
    <a href="?halaman=<?= $halamanAktif + 1; ?>">&raquo;</a>
<?php endif; ?>

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