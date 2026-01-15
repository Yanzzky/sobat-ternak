<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <title>Pesanan Berhasil | Sobat Ternak</title>

  <!-- ================= CSS ================= -->
  <link rel="stylesheet" href="/SobatTernak/assets/css/style.css">

  <!-- ================= GOOGLE FONT ================= -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Sarina&display=swap"
    rel="stylesheet">
</head>

<body class="bg-green-50 min-h-screen">

  <!-- ================= HEADER ================= -->
  <header class="bg-green-600 px-6 py-3 flex items-center justify-between">
    <div class="flex items-center gap-3">
      <img
        src="/SobatTernak/assets/img/stlogo-removebg-preview.png"
        alt="Logo Sobat Ternak"
        class="w-14">

      <h1 class="text-white text-xl font-semibold">
        Sobat Ternak
      </h1>
    </div>
  </header>

  <!-- ================= MAIN CONTENT ================= -->
  <main class="max-w-3xl mx-auto px-8 py-16">

    <!-- CARD -->
    <div class="bg-green-100 rounded-xl p-8 text-center space-y-6">

      <!-- ICON SUCCESS -->
      <div
        class="w-20 h-20 mx-auto rounded-full bg-green-700
               flex items-center justify-center
               text-white text-4xl font-bold">
        ✓
      </div>

      <!-- TITLE -->
      <h2 class="text-2xl font-bold text-green-800">
        Pesanan Berhasil Dibuat!
      </h2>

      <!-- DESCRIPTION -->
      <p class="text-gray-700">
        Terima kasih telah berbelanja di
        <span class="font-semibold">Sobat Ternak</span>.
        Pesanan kamu sedang diproses oleh penjual.
      </p>

      <!-- ================= DETAIL PESANAN ================= -->
      <div class="bg-white rounded-lg p-6 text-left space-y-3 text-sm">

        <div class="flex justify-between">
          <span class="font-semibold">Nomor Pesanan</span>
          <span>#ST-001245</span>
        </div>

        <div class="flex justify-between">
          <span class="font-semibold">Nama Produk</span>
          <span>Kambing umur 3 bulan</span>
        </div>

        <div class="flex justify-between">
          <span class="font-semibold">Jumlah</span>
          <span>1</span>
        </div>

        <div class="flex justify-between">
          <span class="font-semibold">Total Pembayaran</span>
          <span class="font-bold text-green-700">
            Rp.301.500
          </span>
        </div>

        <!-- ALAMAT -->
        <div class="border-t pt-3">
          <p class="font-semibold">Alamat Pengiriman</p>
          <p class="text-gray-600">
            Nama Penerima <br>
            Nomor Telepon <br>
            Detail alamat lengkap
          </p>
        </div>

      </div>

      <!-- ================= BUTTON ================= -->
      <div class="flex justify-center gap-4 pt-4">

        <a
          href="/SobatTernak/index.php"
          class="px-6 py-3 rounded-full
                 border border-green-700
                 text-green-700 font-semibold
                 no-underline">
          Kembali ke Beranda
        </a>

        <a
          href="/SobatTernak/user/pesanan.php"
          class="px-6 py-3 rounded-full
                 bg-green-700 text-white
                 font-semibold
                 no-underline">
          Lihat Pesanan
        </a>

      </div>

    </div>
  </main>

</body>
</html>
