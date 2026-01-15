<?php
include 'koneksi.php';

if (isset($_POST['register'])) {
    $nama = $_POST['nama'];
    $email = $_POST['email'];
    $hp = $_POST['hp'];
    $password = $_POST['password'];

    // Enkripsi password agar aman
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Cek apakah email sudah ada
    $checkEmail = mysqli_query($conn, "SELECT email FROM users WHERE email = '$email'");
    if (mysqli_num_rows($checkEmail) > 0) {
        echo "<script>alert('Email sudah terdaftar!'); window.location='sign.php';</script>";
        return;
    }

    // Insert data ke database
    $query = "INSERT INTO users (nama_lengkap, email, no_hp, password, role) 
              VALUES ('$nama', '$email', '$hp', '$hashed_password', 'pembeli')";

    if (mysqli_query($conn, $query)) {
        echo "<script>alert('Pendaftaran Berhasil! Silakan Login.'); window.location='../auth/login.php';</script>";
    } else {
        echo "Error: " . $query . "<br>" . mysqli_error($conn);
    }
}
