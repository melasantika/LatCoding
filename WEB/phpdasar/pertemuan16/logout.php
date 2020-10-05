<?php
// membuat session agar hilang agar yakin hilang
session_start();
$_SESSION = [];
session_unset();
session_destroy();

// tendang ke halaman login
header("Location: login.php");
exit;
?>