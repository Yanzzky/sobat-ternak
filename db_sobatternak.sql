-- 1. Tabel Users (Menampung Admin & Pembeli)
CREATE TABLE users (
    id_user INT AUTO_INCREMENT PRIMARY KEY,
    nama_lengkap VARCHAR(100),
    email VARCHAR(100) UNIQUE,
    password VARCHAR(255),
    no_hp VARCHAR(15),
    alamat TEXT,
    role ENUM('admin', 'pembeli') DEFAULT 'pembeli'
);

-- 2. Tabel Produk (Hewan Ternak)
CREATE TABLE products (
    id_produk INT AUTO_INCREMENT PRIMARY KEY,
    nama_produk VARCHAR(100),
    kategori VARCHAR(50), -- Sapi, Kambing, Ayam
    harga DECIMAL(10, 2),
    stok INT,
    deskripsi TEXT,
    foto_produk VARCHAR(255)
);

-- 3. Tabel Pesanan (Transaksi)
CREATE TABLE orders (
    id_order INT AUTO_INCREMENT PRIMARY KEY,
    id_user INT,
    tanggal_order DATETIME DEFAULT CURRENT_TIMESTAMP,
    total_harga DECIMAL(10, 2),
    bukti_bayar VARCHAR(255),
    status ENUM('belum_bayar', 'verifikasi', 'lunas', 'tolak') DEFAULT 'belum_bayar',
    FOREIGN KEY (id_user) REFERENCES users(id_user)
);