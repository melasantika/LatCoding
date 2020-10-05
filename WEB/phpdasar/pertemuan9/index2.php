<?php
//koneksi database
$conn = mysqli_connect("localhost", "root", "", "phpdasar");

//ambil data dari table siswa
$result = mysqli_query($conn,"SELECT * FROM tbl_siswa");

// cek query error atau tidak
// if ( $result ) {
//     echo mysqli_error($conn);
// }

// ambil data (fetch) tbl_siswa dari object result
// ada 4 cara:
// mysqli_fetch_row() //mengembalikan array numerik(angka)
// mysqli_fetch_assoc() //mengembalikan array associative(string)
// mysqli_fetch_array() //mengembalikan bisa array numerik & associative (kekuranganya mengembalikan nilai double)
// mysqli_fetch_object() //mengembalikan nilai object

// while ($s = mysqli_fetch_assoc($result) ) {
//     var_dump($s);
// }

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
    <?php while( $row = mysqli_fetch_assoc($result) ) : ?>
    <tr>
    <td><?= $i;?></td>
    <td>
        <a href="">ubah</a> |
        <a href="">hapus</a>
    </td>

    <td><img src="img/<?= $row["gambar"];?>" width="50"></td>
    <td><?= $row["nama"];?></td>
    <td><?= $row["nis"];?></td>
    <td><?= $row["kelas"];?></td>
    <td><?= $row["jurusan"];?></td>
    </tr>
<?php $i++; ?>
<?php endwhile;?>
    </table>
</body>
</html>