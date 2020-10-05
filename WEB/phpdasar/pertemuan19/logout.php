<?php
// membuat session agar hilang agar yakin hilang
session_start();
$_SESSION = [];
session_unset();
session_destroy();

setcookie('id', '', time() - 3600);
setcookie('key', '', time() - 3600);

// tendang ke halaman login
header("Location: login.php");
exit;
?>