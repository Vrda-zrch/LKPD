<?php

$input_user = $_POST['user'];
$input_pass = $_POST['pass'];

if($input_user == "verda" && $input_pass =="rpl123") {
    echo"<h1 style='color: green ; text-align: center;'>LOGIN BERHASIL!</h1>";
    echo"<p style='text-align: center;'>Selamat Datang di Dashboard Rahasia RPL!</p>";
} else {
    echo"<h1 style='color: red ; text-align: center;'>LOGIN GAGAL!</h1>";
    echo"<p style='text-align: center;'>Username atau password salah!</p>";
    echo"<center><a href='login.php'>Coba Lagi</a></center>";
}
?>
