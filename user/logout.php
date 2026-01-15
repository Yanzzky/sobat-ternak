<?php
session_start();

// Hapus semua variabel session
$_SESSION = [];

// Hapus session dari memori
session_unset();

// Hancurkan session
session_destroy();

// Arahkan kembali ke halaman login atau halaman utama
header("Location: ../auth/login.php");
exit;
