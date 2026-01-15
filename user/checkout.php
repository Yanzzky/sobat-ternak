<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Checkout | Sobat Ternak</title>

  <link rel="stylesheet" href="/SobatTernak/assets/css/style.css">

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">

  <!-- Bootstrap Icons-->
  <link
    href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
    rel="stylesheet" />

</head>

<body class="bg-green-50 min-h-screen">

  <!-- ================= HEADER ================= -->
  <header class="bg-green-700 px-8 py-3 flex items-center justify-between fixed top-0 left-0 right-0 z-50 shadow-md">

    <!-- Logo -->
    <a href="/SobatTernak/" id="brand" class="flex items-center gap-3 cursor-pointer">
      <img
        src="/SobatTernak/assets/img/stlogo-removebg-preview.png"
        class="w-14"
        alt="Logo"
        id="logo" />
      <h1 id="brandName" class="text-white text-xl font-semibold">
        Sobat Ternak
      </h1>
    </a>

    <!-- SEARCH -->
    <form id="searchForm" class="flex-1 mx-10 max-w-2xl">
      <div class="relative flex items-center">
        <input
          id="searchInput"
          type="text"
          placeholder="Search"
          class="w-full p-2.5 pr-10 rounded-full border focus:outline-none" />

        <i
          id="searchIcon"
          class="bi bi-search absolute right-3 text-gray-400">
        </i>
      </div>
    </form>


    <!-- KANAN -->
    <div id="headerMenu" class="flex items-center gap-8 text-white">
      <a href="/SobatTernak/user/cart.php" id="cartBtnWrapper">
        <i id="cartBtn" class="bi bi-cart text-3xl cursor-pointer"></i>
      </a>

      <div id="storeBtn" class="flex items-center gap-1 cursor-pointer">
        <i class="bi bi-box-seam text-3xl"></i>
        <span class="text-sm">Toko</span>
      </div>

      <a href="/SobatTernak/user/profil.php" id="profileBtn">
        <i class="bi bi-person-circle text-3xl"></i>
      </a>
    </div>
  </header>


  <!-- ================= CONTENT ================= -->
  <main class="max-w-7xl mx-auto px-8 py-10 pt-24">

    <!-- ===== ALAMAT ===== -->
    <section class="bg-green-100 rounded-xl p-6">
      <div class="flex justify-between items-center border-b-2 border-green-700 pb-2 mb-4">
        <h2 class="font-semibold">Alamat Pengiriman :</h2>
        <button class="text-green-700 font-semibold">Ubah</button>
      </div>

      <div class="grid grid-cols-2 gap-6 text-sm">
        <div>
          <p class="font-semibold">Nama Penerima</p>
          <p>Nomor Penerima</p>
        </div>

        <div class="border-l-2 border-dashed border-green-700 pl-6">
          <p class="font-semibold">Detail Alamat</p>
        </div>
      </div>
    </section>

    <!-- ===== PRODUK ===== -->
    <section class="bg-green-100 rounded-xl p-6 space-y-4">

      <div class="border-b-2 border-green-700 pb-2 font-semibold">
        Kebon Atok
      </div>

      <div class="flex justify-between items-center">
        <div class="flex gap-4">
          <div class="w-24 h-20 bg-gray-300 rounded"></div>

          <div>
            <p class="font-semibold">
              Kambing umur 3 bulan asli kampung durian Runtuh
            </p>
            <p class="font-bold mt-2">Rp.300.000</p>
          </div>
        </div>

        <div class="text-green-700 font-semibold">
          Jumlah : 1
        </div>
      </div>

      <!-- PESAN & ONGKIR -->
      <div class="grid grid-cols-2 gap-6 border-t-2 border-green-700 pt-4">

        <div>
          <label class="font-semibold text-sm">Pesan :</label>
          <textarea
            class="w-full mt-2 p-3 rounded-lg border bg-white text-sm"
            placeholder="(Opsional) tinggalkan pesan ke penjual"></textarea>
        </div>

        <div class="border-l-2 border-dashed border-green-700 pl-6 text-sm">
          <p class="font-semibold">Jasa Pengiriman :</p>
          <p>Nama Jasa</p>
          <p class="text-xs text-gray-600">Estimasi sampai</p>
          <p class="font-bold text-right mt-2">Rp.1.000</p>
        </div>

      </div>
    </section>

    <!-- ===== PEMBAYARAN ===== -->
    <section class="bg-green-100 rounded-xl p-6 grid grid-cols-2 gap-6">

      <div class="font-semibold">
        Metode Pembayaran :
      </div>

      <div class="border-l-2 border-dashed border-green-700 pl-6 space-y-2 text-sm">

        <div class="flex justify-between">
          <span>Subtotal pesanan</span>
          <span>Rp.300.000</span>
        </div>

        <div class="flex justify-between">
          <span>Subtotal pengiriman</span>
          <span>Rp.1.000</span>
        </div>

        <div class="flex justify-between">
          <span>Biaya layanan</span>
          <span>Rp.500</span>
        </div>

        <div class="border-t-2 border-green-700 pt-3 flex justify-between font-bold text-lg">
          <span>Total Pesanan : Rp.</span>
          <span>301.500</span>
        </div>

      </div>
    </section>

    <!-- ===== BUTTON ===== -->
    <div class="flex justify-end">
      <a
        href="/SobatTernak/user/bukti_pembayaran.php"
        class="bg-green-700 text-white px-10 py-3 rounded-full font-semibold">
        Buat Pesanan
      </a>
    </div>

  </main>

</body>

</html>