<?php
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;

}
require 'functions.php';
$siswa = query("SELECT *FROM tbl_siswa");

// jika tombol cari di klik
if(isset ($_POST["cari"]) ){
    $siswa = cari($_POST["keyword"]);
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Admin</title>
    <style>
        .loader{
            width: 30px;
            position: absolute;
            top: 136px;
            left: 255px;
            z-index: -1px;
            display : none;
            
        }
        @media print {
            .logout, .tambah, .cari, .cari{
                display: none;
            }
        }
    
    </style>
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/script.js"></script>
</head>
<body>

<a href="logout.php" class="logout">Logout</a> | <a href="cetak.php" target="_blank">Cetak</a>

    <h1>Daftar Siswa</h1>

<a href="tambah.php" class="tambah">tambah data siswa</a>
<br><br>

<form action="" method="post" class="cari">
    <input typr="text" name="keyword" size="30"
    autofocus placeholder="masukan keyword pencarian.."
    autocomplete="off" id="keyword">
    <button type="submit" name="cari" id="tombol-cari">Cari!</button>

    <img src="img/loader.gif" class="loader">
</form>
<br>

<div id="container">
<table border="1" cellpadding="10" cellspacing="0">
    <tr>
        <th>No.</th>
        <th class="aksi">Aksi</th>
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
    <td class="aksi">
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
</div>

</body>
</html>