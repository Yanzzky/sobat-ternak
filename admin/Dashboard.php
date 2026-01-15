<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Sobat Ternak</title>

    <!-- Tailwind CSS -->
    <link rel="stylesheet" href="/SobatTernak1/assets/css/style.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sarina&display=swap"
        rel="stylesheet" />

<body class="bg-gray-100 flex">

    <aside class="w-64 bg-green-800 min-h-screen text-white p-6">
        <h2 class="text-2xl font-bold mb-8">Admin Sobat Ternak</h2>
        <nav class="space-y-4">
            <a href="#" class="block py-2.5 px-4 rounded bg-green-700"><i class="bi bi-speedometer2 mr-2"></i> Dashboard</a>
            <a href="Kelola Pesanan.php" class="block py-2.5 px-4 rounded hover:bg-green-600 transition"><i class="bi bi-box-seam mr-2"></i> Kelola Produk</a>
            <a href="Tambah_produk.php" class="block py-2.5 px-4 rounded hover:bg-green-600 transition"><i class="bi bi-box-seam mr-2"></i> Tamabah Produk</a>
            <hr class="border-green-700">
        </nav>
    </aside>

    <main class="flex-1 p-8">
        <header class="flex justify-between items-center mb-8">
            <h1 class="text-3xl font-semibold text-gray-800">Dashboard Overview</h1>
            <div class="text-gray-600">Selamat Datang, Admin!</div>
        </header>

        <div class="bg-white rounded-xl shadow-sm overflow-hidden">
            <div class="p-6 border-b">
                <h3 class="font-bold text-gray-700 text-lg">Pesanan Terbaru</h3>
            </div>
            <table class="w-full text-left">
                <thead class="bg-gray-50">
                    <tr>

                        <th>
                            Hallo world
                        </th>

                    </tr>
                </thead>
                <tbody class="divide-y divide-gray-200">
                </tbody>
            </table>
        </div>
    </main>
</body>

</html>