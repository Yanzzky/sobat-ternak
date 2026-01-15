<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobat Ternak</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="/SobatTernak/assets/css/style.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sarina&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap Icons -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css"
        rel="stylesheet" />

    <!-- Tailwind CSS & Flowbite -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.css" rel="stylesheet" />
</head>

<body class="bg-green-50" id="app">

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

            <a href="/SobatTernak/user/cart.php"><i class="bi bi-cart text-3xl"></i></a>
            <div class="flex items-center gap-1 cursor-pointer"><i class="bi bi-box-seam text-3xl"></i><span>Toko</span></div>

            <?php if (isset($_SESSION['login']) && $_SESSION['login'] == true) : ?>
                <a href="/SobatTernak/user/profil.php" title="Halo, <?= $_SESSION['nama'] ?>">
                    <i class="bi bi-person-circle text-3xl text-yellow-300"></i>
                </a>
            <?php else : ?>
                <a href="/SobatTernak/auth/login.php">
                    <button class="bg-white text-green-700 px-4 py-1 rounded-full font-bold text-sm">Masuk</button>
                </a>
            <?php endif; ?>

        </div>
    </header>

    <main id="mainContent" class="py-24 px-6">
        <div id="contentWrapper" class="max-w-7xl mx-auto bg-white rounded-lg px-6 py-6">


            <section id="bannerSection" class="relative mb-6 h-72 flex items-center justify-center overflow-hidden">

                <!-- Gambar kiri -->
                <img
                    src="/SobatTernak/assets/img/g-ternak1.jpeg"
                    class="absolute w-[45rem] h-56 object-cover rounded-xl
           -translate-x-56 scale-90 opacity-70 z-10"
                    id="bannerLeft" />

                <!-- Gambar tengah -->
                <img
                    src="/SobatTernak/assets/img/g-ternak2.jpeg"
                    class="absolute w-[45rem] h-64 object-cover rounded-xl
           z-20 shadow-xl"
                    id="bannerCenter" />

                <!-- Gambar kanan -->
                <img
                    src="/SobatTernak/assets/img/g-ternak3.jpeg"
                    class="absolute w-[45rem] h-56 object-cover rounded-xl
                    translate-x-56 scale-90 opacity-70 z-10"
                    id="bannerRight" />

                <!-- BUTTON PREV -->
                <button
                    id="bannerPrev"
                    class="absolute left-60 top-1/2 -translate-y-1/2
                            bg-white w-10 h-10 rounded-full shadow z-30
                            flex items-center justify-center">
                    <i class="bi bi-chevron-left"></i>
                </button>

                <!-- BUTTON NEXT -->
                <button
                    id="bannerNext"
                    class="absolute right-60 top-1/2 -translate-y-1/2
                            bg-white w-10 h-10 rounded-full shadow z-30
                            flex items-center justify-center">
                    <i class="bi bi-chevron-right"></i>
                </button>


            </section>

            <!-- ===== TAB ===== -->
            <section id="tabSection" class="pl-32 flex items-center justify-between border-b mb-6">
                <button
                    id="tabRekomendasi"
                    class=" text-purple-600 font-semibold border-b-2 border-purple-600 pb-2">
                    Rekomendasi
                </button>

                <i id="filterBtn" class="bi bi-funnel text-xl cursor-pointer" fixed top-0 left-0 right-0 z-50 shadow-md></i>
            </section>

            <div id="chat" class="fixed bottom-8 right-8 bg-green-600 w-14 h-14 rounded-full shadow-lg flex items-center justify-center text-white cursor-pointer hover:bg-green-700 transition-colors duration-300 z-50">
                <i class="bi bi-chat-right-text"></i>
            </div>

            <?php
            $daftarTernak = [
                [
                    "nama" => "Sapi Limosin Super",
                    "harga" => 25000000,
                    "gambar" => "/SobatTernak/assets/img/g-ternak2.jpeg",
                    "rating" => 4.8,
                    "kategori" => "Sapi"
                ],
                [
                    "nama" => "Kambing Etawa Jantan",
                    "harga" => 4500000,
                    "gambar" => "/SobatTernak/assets/img/g-ternak1.jpeg",
                    "rating" => 4.5,
                    "kategori" => "Kambing"
                ],
                [
                    "nama" => "Domba Garut Aduan",
                    "harga" => 7000000,
                    "gambar" => "/SobatTernak/assets/img/g-ternak3.jpeg", // Pastikan file ada
                    "rating" => 4.9,
                    "kategori" => "Domba"
                ],
                [
                    "nama" => "Sapi Brahman Cross",
                    "harga" => 18500000,
                    "gambar" => "/SobatTernak/assets/img/g-ternak2.jpeg",
                    "rating" => 4.2,
                    "kategori" => "Sapi"
                ]
            ];
            ?>

            <!-- ===== PRODUK GRID ===== -->
            <section id="productGrid" class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <?php foreach ($daftarTernak as $ternak) : ?>

                    <div class="w-full max-w-sm bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">

                        <a href="/sobatTernak/user/review.php">
                            <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="<?= $ternak['gambar'] ?>" alt="<?= $ternak['nama'] ?>" />
                        </a>

                        <div class="px-5 pb-5">
                            <a href="/sobatTernak/user/review.php">
                                <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                    <?= $ternak['nama'] ?>
                                </h5>
                            </a>

                            <div class="flex items-center mt-2.5 mb-5">
                                <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-300">
                                    <?php for ($i = 0; $i < 5; $i++): ?>
                                        <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                            <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                        </svg>
                                    <?php endfor; ?>
                                </div>
                                <span class="bg-green-100 text-green-800 text-xs font-semibold px-2.5 py-0.5 rounded ms-3">
                                    <?= $ternak['rating'] ?>
                                </span>
                            </div>

                            <div class="flex items-center justify-between mt-auto">
                                <span class="text-xl font-bold text-gray-900">
                                    Rp <?= number_format($ternak['harga'], 0, ',', '.') ?>
                                </span>

                                <a href="/SobatTernak/user/checkout.php" class="text-white bg-green-600 hover:bg-green-700 focus:ring-4 focus:outline-none focus:ring-green-300 font-medium rounded-lg text-sm px-3 py-2 text-center flex items-center gap-2">
                                    <i class="bi bi-cart-plus"></i> Beli
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endforeach; ?>
            </section>

            <script src="https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js"></script>
</body>

</html>