<?php
usleep(500000);
require '../functions.php';
$keyword = $_GET["keyword"];
$query = "SELECT * FROM tbl_siswa WHERE 
        nama LIKE '%$keyword%' OR
        nis LIKE '%$keyword%' OR
        kelas LIKE '%$keyword%' OR
        jurusan LIKE '%$keyword%'
        ";
$siswa = query($query);

?>
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