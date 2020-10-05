<?php
require 'functions.php';

//ambil data dari url
$id = $_GET["id"]; 
// query data siswa berdasarkan id
$siswa = query("SELECT * FROM tbl_siswa WHERE id= $id" )[0];

// cek apakah tombol submit sudah pernah di tekan atau belum
if (isset ($_POST["submit"]) ){
   
// cek apakah data berhasil di ubah atau tidak
if(ubah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';

        </script>
        ";
}else{
    echo "
        <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';

        </script>
        ";
    } 
}

?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>ubah data siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>ubah data siswa</h1>

    <form action="" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?= $siswa["id"]; ?>">
    <input type="hidden" name="gambarLama" value="<?= $siswa["gambar"]; ?>">
    <ul>
        <li>
        <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required value="<?= $siswa["nama"]; ?>">
        </li>

        <li>
        <label for="nis">Nis :</label>
            <input type="text" name="nis" id="nis" required value="<?= $siswa["nis"]; ?>">
        </li>

        <li>
        <label for="kelas">Kelas :</label>
            <input type="text" name="kelas" id="kelas" value="<?= $siswa["kelas"]; ?>">
        </li>

        <li>
        <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan" value="<?= $siswa["jurusan"]; ?>">
        </li>

        <li>
        <label for="gambar">Gambar :</label><br>
        <img src="img/<?= $siswa['gambar']; ?>" width="40"><br>
            <input type="file" name="gambar" id="gambar">
        </li>

        <li>
            <button type="submit" name="submit">ubah data!</button>
        
        </li>
    </ul>
    
    </form>
</body>
</html>