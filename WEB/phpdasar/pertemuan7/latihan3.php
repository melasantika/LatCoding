<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>POST</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
<?php if ( isset($_POST["submit"]) ) : ?>
    <h1>Halo, Selamat Datang <?= $_POST["name"]; ?></h1>
<?php endif; ?>

    <form action="" method="post">
        Masukan nama:
        <input type="text" name="name">
        <br>
        <button type="submit" name="submit">kirim</button>
    
    </form>
</body>
</html>