<?php
ini_set('memory_limit', '256M');

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nama_produk = $_POST['nama_produk'];
    $kategori = $_POST['kategori'];
    $harga = $_POST['harga'];
    $stok = $_POST['stok'];
    $deskripsi = $_POST['deskripsi'];

    if (isset($_FILES['foto_produk']['name']) && $_FILES['foto_produk']['name'] != "") {

        $nama_file = $_FILES['foto_produk']['name'];
        $tmp_file  = $_FILES['foto_produk']['tmp_name'];

        $nama_baru = date('dmYHis') . '_' . str_replace(' ', '', $nama_file);

        $path_upload = "../assets/upload/" . $nama_baru;

        if (move_uploaded_file($tmp_file, $path_upload)) {
            $query = "INSERT INTO products (nama_produk, kategori, harga, stok, deskripsi, foto_produk) 
                      VALUES ('$nama_produk', '$kategori', '$harga', '$stok', '$deskripsi', '$nama_baru')";

            $result = mysqli_query($conn, $query);

            if ($result) {
                echo "<script>alert('Berhasil!'); window.location='index.php';</script>";
            } else {
                echo "Gagal Database: " . mysqli_error($conn);
            }
        } else {
            echo "Gagal Upload Gambar. Cek folder assets/uploads.";
        }
    }
}
