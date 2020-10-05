<?php
require 'functions.php';

// cek apakah tombol submit sudah pernah di tekan atau belum
if (isset ($_POST["submit"]) ){
   
// cek apakah data berhasil di tambah atau tidak
if(tambah($_POST) > 0 ) {
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';

        </script>
        ";
}else{
    echo "
        <script>
            alert('data gagal ditambahkan!');
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
    <title>tambah data siswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>tambah data siswa</h1>

    <form action="" method="post">
    <ul>
        <li>
        <label for="nama">Nama :</label>
            <input type="text" name="nama" id="nama" required>
        </li>

        <li>
        <label for="nis">Nis :</label>
            <input type="text" name="nis" id="nis" required>
        </li>

        <li>
        <label for="kelas">Kelas :</label>
            <input type="text" name="kelas" id="kelas">
        </li>

        <li>
        <label for="jurusan">Jurusan :</label>
            <input type="text" name="jurusan" id="jurusan">
        </li>

        <li>
        <label for="gambar">Gambar :</label>
            <input type="text" name="gambar" id="gambar">
        </li>

        <li>
            <button type="submit" name="submit">tambah data!</button>
        
        </li>
    </ul>
    
    </form>
</body>
</html>