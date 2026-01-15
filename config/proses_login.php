<?php
session_start();
include 'koneksi.php';

if (isset($_POST['login'])) {
    $email = $_POST['email'];
    $password = $_POST['password'];

    // Cari user berdasarkan email
    $query = "SELECT * FROM users WHERE email = '$email'";
    $result = mysqli_query($conn, $query);

    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);

        // Cek Password (Hash Verification)
        if (password_verify($password, $row['password'])) {

            // Set Session
            $_SESSION['login'] = true;
            $_SESSION['id_user'] = $row['id_user'];
            $_SESSION['nama'] = $row['nama_lengkap'];
            $_SESSION['role'] = $row['role'];

            // Cek Role (Admin atau Pembeli)
            if ($row['role'] == 'admin') {
                header("Location: ../admin/Dashboard.php"); // Arahkan ke admin jika ada
            } else {
                header("Location: ../index.php"); // Kembali ke home
            }
            exit;
        }
    }

    echo "<script>alert('Email atau Password Salah!'); window.location='login.php';</script>";
}
