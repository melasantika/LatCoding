<?php
// cek tombol submit apakah sudah di pencet atau belum
if(isset ($_POST["submit"]) ){
    // cek username dan password
    if ($_POST["username"] == "admin" && $_POST["password"] == "123") {
    // jika benar, redirect ke halaman admin
        header("Location: admin.php");
        exit;
    } else {
    //jika salah tampilkan pesan kesalahan
        $error = true;
    }
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" media="screen" href="main.css" />
    <script src="main.js"></script>
</head>
<body>
    <h1>Login Admin</h1>
    <?php if( isset($error) ):?>
    <p style="color:red; font-style:italic;"> username/password salah!</p>
    <?php endif; ?>

    <ul>
    <form action="" method="post">
        <li>
            <label for="username">Username:</label>
            <input type="text" name="username" id="username">
        </li>

        <li>
            <label for="password">Password:</label>
            <input type="password" name="password" id="password">
        </li>

        <li>
            <button type="submit" name="submit">Login</button>
        </li>
    </form>
    </ul>
</body>
</html>