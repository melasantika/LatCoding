<?php
// disimpan di server
// session adalah sebuah nilai yang bisa di simpan dan di panggil
// di banyak halaman.
// nilai akan hilang jika kita melakukan satu sesi (close browser)
// cara mengembalikan session nya yaitu buka dulu $_SESSION 
session_start();
 
 $_SESSION["nama"] = "mela santika";

?>