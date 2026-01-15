<?php
// 1. MULAI SESSION & CEK LOGIN
session_start();

// Jika belum login, tendang ke halaman login
if (!isset($_SESSION['login'])) {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Profil | Sobat Ternak</title>

    <script src="https://cdn.tailwindcss.com"></script>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet" />

    <link href="https://fonts.googleapis.com/css2?family=Sarina&display=swap" rel="stylesheet">
</head>

<body class="bg-gray-100">

    <header class="bg-green-700 px-8 py-3 flex items-center justify-between fixed top-0 left-0 right-0 z-50 shadow-md">

        <a href="/SobatTernak/" id="brand" class="flex items-center gap-3 cursor-pointer">
            <img src="/SobatTernak/assets/img/stlogo-removebg-preview.png" class="w-14" alt="Logo" id="logo" />
            <h1 id="brandName" class="text-white text-xl font-semibold">
                Sobat Ternak
            </h1>
        </a>

        <form id="searchForm" class="flex-1 mx-10 max-w-2xl">
            <div class="relative flex items-center">
                <input id="searchInput" type="text" placeholder="Search" class="w-full p-2.5 pr-10 rounded-full border focus:outline-none" />
                <i id="searchIcon" class="bi bi-search absolute right-3 text-gray-400"></i>
            </div>
        </form>

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

    <div class="pt-24 flex gap-6 px-6">

        <aside class="w-72 bg-green-50 min-h-screen p-6 rounded-lg">
            <div class="flex items-center gap-4 mb-8 pb-8 border-b border-green-700">
                <div class="w-20 h-20 rounded-full bg-green-700 flex items-center justify-center flex-shrink-0">
                    <i class="bi bi-person text-4xl text-white"></i>
                </div>

                <div>
                    <p class="font-semibold text-gray-700 text-lg">
                        <?= $_SESSION['nama']; ?>
                    </p>
                    <span class="text-xs text-green-600 bg-green-100 px-2 py-1 rounded">Pembeli</span>
                </div>

            </div>

            <nav class="space-y-2 text-gray-700">
                <a href="#akun" onclick="switchTab(event, 'akun')" class="flex items-center gap-3 px-4 py-2 rounded-lg bg-white font-bold tab-btn" data-tab="akun">
                    <i class="bi bi-person text-xl text-green-700"></i> Akun saya
                </a>
                <a href="#pesanan" onclick="switchTab(event, 'pesanan')" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-100 font-bold tab-btn" data-tab="pesanan">
                    <i class="bi bi-truck text-xl text-green-700"></i> Pesanan saya
                </a>
                <a href="#pengaturan" onclick="switchTab(event, 'pengaturan')" class="flex items-center gap-3 px-4 py-2 rounded-lg hover:bg-green-100 font-bold tab-btn" data-tab="pengaturan">
                    <i class="bi bi-gear text-xl text-green-700"></i> Pengaturan
                </a>
            </nav>

            <div class="mt-16 flex justify-center border-t border-green-700 pt-4 text-gray-700">

                <a href="logout.php" class="flex items-center gap-2 hover:text-red-600 transition font-bold" onclick="return confirm('Yakin ingin keluar?')">
                    <i class="bi bi-box-arrow-right text-red-600"></i> Log Out
                </a>

            </div>
        </aside>

        <main class="flex-1 bg-white p-8 rounded-lg">

            <div id="profile-tabs" class="flex gap-8 mb-6 h-12">
                <button onclick="switchProfileTab('akun')" id="tab-akun" class="pb-3 font-semibold text-green-700 border-b-2 border-green-700">
                    Profil Akun
                </button>

                <button onclick="switchProfileTab('toko')" id="tab-toko" class="pb-3 font-semibold text-gray-500 hover:text-green-700 border-b-2">
                    Profil Toko
                </button>
            </div>
            <div class="flex mb-2 border-b-2 border-green-700"></div>

            <div id="profil-akun">
                <h2 class="text-2xl font-bold mb-4">Informasi Akun</h2>
                <div class="grid grid-cols-2 gap-4">
                    <div>
                        <label class="block text-gray-700 text-sm font-bold mb-2">Nama Lengkap</label>
                        <input type="text" value="<?= $_SESSION['nama']; ?>" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" readonly>
                    </div>
                </div>
            </div>

            <div id="profil-toko" class="hidden">
                <h2 class="text-xl font-bold">Belum Ada Toko</h2>
                <p>Silakan buat toko untuk mulai berjualan.</p>
            </div>

            <div id="content-pesanan" class="hidden">
                <h2 class="text-xl font-bold mb-4">Pesanan Saya</h2>
                <p>Daftar pesanan muncul di sini</p>
            </div>

            <div id="content-pengaturan" class="hidden">
                <h2 class="text-xl font-bold mb-4">Pengaturan</h2>
                <p>Pengaturan akun di sini</p>
            </div>

        </main>


    </div>

    <script>
        function switchTab(event, tabName) {
            event.preventDefault();

            document.querySelectorAll('.tab-btn').forEach(btn => {
                btn.classList.remove('bg-white');
                btn.classList.add('hover:bg-green-100');
            });

            event.target.closest('.tab-btn').classList.add('bg-white');
            event.target.closest('.tab-btn').classList.remove('hover:bg-green-100');

            // Sembunyikan semua konten
            document.querySelectorAll('main > div').forEach(div => {
                div.classList.add('hidden');
            });

            // Sembunyikan tab profil secara default
            document.getElementById('profile-tabs').classList.add('hidden');

            if (tabName === 'akun') {
                document.getElementById('profil-akun').classList.remove('hidden');
                document.getElementById('profile-tabs').classList.remove('hidden'); // Tampilkan tab profil
                switchProfileTab('akun');
            } else {
                document.getElementById(`content-${tabName}`).classList.remove('hidden');
            }
        }

        function switchProfileTab(tab) {
            const tabAkun = document.getElementById('tab-akun');
            const tabToko = document.getElementById('tab-toko');

            const profilAkun = document.getElementById('profil-akun');
            const profilToko = document.getElementById('profil-toko');

            // Pastikan semua tab konten sidebar tersembunyi
            document.getElementById('content-pesanan').classList.add('hidden');
            document.getElementById('content-pengaturan').classList.add('hidden');

            if (tab === 'akun') {
                tabAkun.classList.add('text-green-700', 'border-b-2', 'border-green-700');
                tabToko.classList.remove('text-green-700', 'border-b-2', 'border-green-700');
                tabToko.classList.add('text-gray-500');

                profilAkun.classList.remove('hidden');
                profilToko.classList.add('hidden');
            } else {
                tabToko.classList.add('text-green-700', 'border-b-2', 'border-green-700');
                tabAkun.classList.remove('text-green-700', 'border-b-2', 'border-green-700');
                tabAkun.classList.add('text-gray-500');

                profilToko.classList.remove('hidden');
                profilAkun.classList.add('hidden');
            }
        }
    </script>

</body>

</html>