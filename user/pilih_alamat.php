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

<body>
 <!-- ================= HEADER ================= -->
    <header class="bg-green-700 px-8 py-3 flex items-center justify-between  shadow-md fixed top-0 left-0 right-0 z-50">

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

    <main class="pt-24">
    <section class="bg-green-100 min-h-screen py-10">

        <div class="max-w-7xl mx-auto px-8">

            <!-- Judul -->
            <div class="flex justify-between items-center border-b-2 border-green-700 pb-2 mb-4">
                <h2 class="font-semibold">Alamat Pengiriman :</h2>
            </div>

            <!-- Tambah Alamat -->
            <div class="font-semibold">
                <h2>Tambahkan alamat baru:</h2>
                <div class="border-b-2 border-green-700 pb-4 mt-4">
                    <button
                        class="w-full h-14
                               bg-white
                               border-2 border-green-700
                               rounded-lg
                               text-green-700 text-3xl font-bold
                               hover:bg-green-100
                               flex items-center justify-center">
                        +
                    </button>
                </div>
            </div>

        </div>
    </section>
</main>

</body>