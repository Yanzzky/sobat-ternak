<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tambah Produk</title>
    <link rel="stylesheet" href="/SobatTernak1/assets/css/style.css">

    <style>
        body {
            background-color: #f0fdf4;
            /* soft green */
            font-family: Arial, sans-serif;
        }

        .container {
            width: 400px;
            margin: 40px auto;
            background: #ffffff;
            padding: 25px;
            border-radius: 10px;
            border: 2px solid #4ade80;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        label {
            font-weight: bold;
            color: #166534;
            /* dark green */
        }

        input,
        select,
        textarea {
            width: 100%;
            border: 2px solid #86efac;
            /* light green */
            border-radius: 6px;
            padding: 7px;
            margin-top: 5px;
            margin-bottom: 15px;
            outline: none;
        }

        input:focus,
        select:focus,
        textarea:focus {
            border-color: #22c55e;
            /* green */
        }

        button {
            width: 100%;
            padding: 10px;
            background-color: #22c55e;
            color: white;
            font-weight: bold;
            border-radius: 8px;
            border: none;
            cursor: pointer;
        }

        button:hover {
            background-color: #15803d;
        }
    </style>
</head>

<body>

    <div class="container">
        <h2 style="text-align:center; color:#166534; margin-bottom:15px;">Tambah Produk</h2>

        <form action="../config/upload_produk.php" method="post" enctype="multipart/form-data">

            <!-- Nama Produk -->
            <label>Nama Produk:</label>
            <input type="text" name="nama_produk" required>

            <!-- Kategori -->
            <label>Kategori:</label>
            <select name="kategori" required>
                <option value="">-- Pilih Kategori --</option>
                <option value="Sapi">Sapi</option>
                <option value="Kambing">Kambing</option>
                <option value="Ayam">Ayam</option>
            </select>

            <!-- Harga -->
            <label>Harga:</label>
            <input type="number" name="harga" step="0.01" required>

            <!-- Stok -->
            <label>Stok:</label>
            <input type="number" name="stok" required>

            <!-- Deskripsi -->
            <label>Deskripsi:</label>
            <textarea name="deskripsi" rows="3"></textarea>

            <!-- Foto Produk -->
            <label>Foto Produk:</label>
            <input type="file" name="foto_produk" accept="image/*" required onchange="previewImage(event)">
            <img id="preview" style="display:none; margin-top:10px; width:200px; border:2px solid #22c55e; border-radius:8px;">

            <!-- Tombol Submit -->
            <button type="submit" style="margin-top:15px;">Simpan Produk</button>
        </form>

    </div>
    <script>
        function previewImage(event) {
            const file = event.target.files[0];
            const preview = document.getElementById('preview');

            if (file) {
                preview.src = URL.createObjectURL(file);
                preview.style.display = 'block';
            }
        }
    </script>
</body>

</html>