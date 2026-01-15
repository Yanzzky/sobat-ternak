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
    <header id="header" class="bg-green-600 px-6 py-3 flex items-center justify-between">

        <!-- KIRI -->
        <div id="brand" class="flex items-center gap-3">
            <img
                src="/SobatTernak/assets/img/stlogo-removebg-preview.png"
                class="w-14"
                alt="Logo"
                id="logo" />
            <h1 id="brandName" class="text-white text-xl font-semibold">
                Sobat Ternak
            </h1>
        </div>

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
            <i id="cartBtn" class="bi bi-cart text-3xl cursor-pointer"></i>

            <div id="storeBtn" class="flex items-center gap-1 cursor-pointer">
                <i class="bi bi-box-seam text-3xl"></i>
                <span class="text-sm">Toko</span>
            </div>

            <a href="./user/login.php" id="profileBtn">
                <i class="bi bi-person-circle text-3xl"></i>
            </a>
        </div>
    </header>

    <main class="max-w-7xl mx-auto px-6 py-10 bg-white rounded-lg mt-6">

        <div class="flex gap-12">

            <!-- ===== KIRI : GAMBAR ===== -->
            <div class="w-1/2 flex justify-center">
                <div class="w-[28rem] h-[18rem] bg-gray-200 rounded-lg flex items-center justify-center">
                    <img
                        src="/SobatTernak/assets/img/g-ternak1.jpeg"
                        alt="Produk"
                        class="object-cover w-full h-full rounded-lg" />
                </div>
            </div>

            <!-- ===== KANAN : DETAIL ===== -->
            <div class="w-1/2 space-y-4">


                <!-- Nama Produk -->
                <h1 class="text-2xl font-semibold text-gray-900">
                    Nama produk
                </h1>

                <!-- Rating -->
                <div class="flex items-center gap-2 text-sm text-gray-500">
                    <span>Terjual 10rb+</span>
                    <span class="flex items-center gap-1 text-yellow-400">
                        ★ 4.9
                    </span>
                    <span>(10rb+ penilaian)</span>
                </div>

                <!-- Harga -->
                <div class="text-3xl font-bold text-gray-900">
                    Rp. 100.000
                </div>

                <!-- Deskripsi -->
                <p class="text-sm text-gray-600 leading-relaxed max-w-md">
                    Deskripsi barang Lorem ipsum dolor sit amet, consectetur
                    adipiscing elit. Sed do eiusmod tempor incididunt ut labore
                    et dolore magna aliqua. Ut enim ad minim veniam.
                </p>

                <!-- Qty + Button -->
                <div class="flex items-center gap-4 pt-4">

                    <!-- Quantity -->
                    <label for="counter-input" class="sr-only">Choose quantity:</label>
                    <button type="button" id="decrement-button" data-input-counter-decrement="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-green-600 dark:bg-green-700 dark:hover:bg-green-600 dark:focus:ring-green-700" onclick="decrementCounter()">
                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 2">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1h16" />
                        </svg>
                    </button>
                    <input type="text" id="counter-input" data-input-counter data-input-counter-min="1" class="w-10 shrink-0 border-0 text-center text-sm font-medium text-black focus:outline-none focus:ring-0 [appearance:textfield] [&::-webkit-outer-spin-button]:appearance-none [&::-webkit-inner-spin-button]:appearance-none" placeholder="" value="1" required min="1" />
                    <button type="button" id="increment-button" data-input-counter-increment="counter-input" class="inline-flex h-5 w-5 shrink-0 items-center justify-center rounded-md border border-gray-300 bg-gray-100 hover:bg-gray-200 focus:outline-none focus:ring-2 focus:ring-gray-100 dark:border-green-600 dark:bg-green-700 dark:hover:bg-green-600 dark:focus:ring-green-700" onclick="incrementCounter()">
                        <svg class="h-2.5 w-2.5 text-gray-900 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 18">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 1v16M1 9h16" />
                        </svg>
                    </button>

                    <!-- Beli -->
                    <a href="/SobatTernak/user/checkout.php" class="bg-green-600 text-white px-5 py-2 rounded-lg text-sm">
                        Beli
                    </a>

                    <!-- Keranjang -->
                    <a href="/SobatTernak/user/cart.php" class="border border-green-600 text-green-600 px-5 py-2 rounded-lg text-sm flex items-center gap-2">
                        <i class="bi bi-cart"></i>
                        Keranjang
                    </a>
                </div>

            </div>

        </div>

        <!-- ===== REVIEW ===== -->
        <section class="mt-12">
            <h2 class="font-semibold text-lg mb-4 border-b pb-2 ">
                Review
            </h2>
            <div class="grid gap-6 grid-cols-2">
                <section class="bg-white border-black border ">
                    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                        <img class="w-auto dark:block" src="/SobatTernak/assets/img/g-ternak3.jpeg" alt="dashboard image">
                        <div class="mt-4 md:mt-0">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-300">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                <?php endfor; ?>
                                <p class="text-black">5 dari 5</p>
                            </div>
                            <p class="text-black">Kondisi Ternak : </p>
                            <p class="text-black">Respon Ternak : </p>
                            <p class="text-black">Proses Pengiriman : </p>
                        </div>
                    </div>
                </section>

                <section class="bg-white border-black border">
                    <div class="gap-8 items-center py-8 px-4 mx-auto max-w-screen-xl xl:gap-16 md:grid md:grid-cols-2 sm:py-16 lg:px-6">
                        <img class="w-auto dark:block" src="/SobatTernak/assets/img/g-ternak3.jpeg" alt="dashboard image">
                        <div class="mt-4 md:mt-0">
                            <div class="flex items-center space-x-1 rtl:space-x-reverse text-yellow-300">
                                <?php for ($i = 0; $i < 5; $i++): ?>
                                    <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                        <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                    </svg>
                                <?php endfor; ?>
                                <p class="text-black">5 dari 5</p>
                            </div>
                            <p class="text-black">Kondisi Ternak : </p>
                            <p class="text-black">Respon Ternak : </p>
                            <p class="text-black">Proses Pengiriman : </p>
                        </div>
                    </div>
                </section>
            </div>
        </section>

        <!-- ===== REKOMENDASI ===== -->
        <section class="mt-12">
            <h2 class="font-semibold text-lg mb-4 border-b pb-2 ">
                Rekomendasi untuk Anda
            </h2>

            <!-- Produk Grid -->
            <div class="grid grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">

                <!-- Produk Item 1 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 2 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 3 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 4 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 5 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 6 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 7 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

                <!-- Produk Item 8 -->
                <div class="w-full bg-white border border-gray-200 rounded-lg shadow-md hover:shadow-lg transition-shadow duration-300 flex flex-col justify-between">
                    <a href="/sobatTernak/user/review.php">
                        <img class="p-4 rounded-t-lg w-full h-48 object-cover" src="/SobatTernak/assets/img/g-ternak2.jpeg" alt="Produk" />
                    </a>

                    <div class="px-5 pb-5">
                        <div class="flex items-center space-x-1 text-yellow-300">
                            <?php for ($i = 0; $i < 5; $i++): ?>
                                <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 22 20">
                                    <path d="M20.924 7.625a1.523 1.523 0 0 0-1.238-1.044l-5.051-.734-2.259-4.577a1.534 1.534 0 0 0-2.752 0L7.365 5.847l-5.051.734A1.535 1.535 0 0 0 1.463 9.2l3.656 3.563-.863 5.031a1.532 1.532 0 0 0 2.226 1.616L11 17.033l4.518 2.375a1.534 1.534 0 0 0 2.226-1.617l-.863-5.03L20.537 9.2a1.523 1.523 0 0 0 .387-1.575Z" />
                                </svg>
                            <?php endfor; ?>
                            <p class="text-black">5 dari 5</p>
                        </div>
                        <a href="/sobatTernak/user/review.php">
                            <h5 class="text-lg font-semibold tracking-tight text-gray-900 line-clamp-1">
                                Ternak Aku
                            </h5>
                            <h6>
                                Peternak Lokal
                            </h6>
                        </a>
                        <h1 class="text-lg font-bold tracking-tight line-clamp-1">Rp.300.000</h1>
                    </div>
                </div>

            </div>
        </section>
    </main>

    <script src=" https://cdn.jsdelivr.net/npm/flowbite@4.0.1/dist/flowbite.min.js">
    </script>
</body>

</html>