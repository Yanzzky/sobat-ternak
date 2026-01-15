<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Keranjang | Sobat Ternak</title>

  <!-- Tailwind CSS (hasil build lokal kamu) -->
  <link rel="stylesheet" href="/SobatTernak/assets/css/style.css" />

  <!-- Google Font -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet" />

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
    <div class="grid grid-cols-12 gap-8">

      <!-- ============ LEFT : CART LIST ============ -->
      <section class="col-span-8 bg-green-100 rounded-xl p-6">

        <!-- Pilih semua -->
        <div class="flex justify-between items-center mb-4">
          <label class="flex items-center gap-2 font-semibold">
            <input type="checkbox" class="accent-green-700">
            Pilih Semua
          </label>
          <button class="text-green-700 font-semibold">Hapus</button>
        </div>

        <!-- Toko -->
        <div class="border-t border-green-700 pt-4">
          <label class="flex items-center gap-2 font-semibold mb-4">
            <input type="checkbox" class="accent-green-700">
            Kebon Atok
          </label>

          <!-- Item -->
          <div class="flex justify-between items-center py-4 border-b border-green-700">
            <div class="flex gap-4">
              <input type="checkbox" class="accent-green-700 mt-2">

              <div class="w-24 h-20 bg-gray-300 rounded flex items-center justify-center text-gray-400">
                IMG
              </div>

              <div>
                <p class="font-semibold leading-tight">
                  Kambing umur 3 bulan asli kampung durian Runtuh
                </p>
                <p class="font-bold mt-2">Rp.300.000</p>
              </div>
            </div>

            <div class="flex items-center gap-2">
              <button class="w-7 h-7 border rounded">-</button>
              <span>1</span>
              <button class="w-7 h-7 border rounded">+</button>
            </div>
          </div>

          <!-- Item 2 -->
          <div class="flex justify-between items-center py-4">
            <div class="flex gap-4">
              <input type="checkbox" class="accent-green-700 mt-2">

              <div class="w-24 h-20 bg-gray-300 rounded flex items-center justify-center text-gray-400">
                IMG
              </div>

              <div>
                <p class="font-semibold leading-tight">
                  Kambing umur 12 bulan asli kampung durian Runtuh
                </p>
                <p class="font-bold mt-2">Rp.300.000</p>
              </div>
            </div>

            <div class="flex items-center gap-2">
              <button class="w-7 h-7 border rounded">-</button>
              <span>1</span>
              <button class="w-7 h-7 border rounded">+</button>
            </div>
          </div>
        </div>
      </section>

      <!-- ============ RIGHT : SUMMARY ============ -->
      <aside class="col-span-4 bg-green-100 rounded-xl p-6 flex flex-col">
        <div class="bg-white rounded-lg p-4 mb-4 h-64">
          <p class="text-gray-400 mb-2">...</p>
          <div class="flex justify-between font-semibold">
            <span>kambing umur 3 bul...</span>
            <span>Rp.300.000</span>
          </div>
        </div>

        <div class="border-t border-black pt-4 flex justify-between font-semibold mb-4">
          <span>Total :</span>
          <span>Rp.300.000</span>
        </div>

        <a href="/SobatTernak/user/checkout.php" class="bg-green-700 text-center text-white py-3 rounded-full font-semibold hover:bg-green-800">
          Buat Pesanan
        </a>
      </aside>

    </div>
  </main>

</body>

</html>
<!DOCTYPE html>