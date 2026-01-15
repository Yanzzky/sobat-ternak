<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Sobat Ternak</title>

    <!-- Custom CSS -->
    <link rel="stylesheet" href="/SobatTernak/assets/css/style.css" />

    <!-- Google Font -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Sarina&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap -->
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet" />
</head>

<body id="loginPage" class="min-h-screen grid grid-cols-2">

    <!-- ================= LOGO ================= -->
    <section
        id="logoSection"
        class="bg-white flex items-center justify-center">
        <img
            id="logoImage"
            src="/SobatTernak/assets/img/logo1.png"
            alt="Logo Sobat Ternak"
            class="w-96" />
    </section>

    <!-- ================= LOGIN ================= -->
    <section
        id="loginSection"
        class="bg-green-700 flex items-center justify-center min-h-screen">

        <div
            id="loginCard"
            class="bg-white p-10 rounded-xl shadow-lg w-96">

            <h1
                id="loginTitle"
                class="font-sarina text-3xl text-gray-900 text-center mb-6 whitespace-nowrap">
                Selamat Datang
            </h1>

            <!-- ===== FORM ===== -->
            <form action="../config/proses_login.php" method="POST" class="space-y-4">

                <input
                    name="email"
                    type="email"
                    placeholder="Email"
                    required
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border focus:outline-none focus:ring-2 focus:ring-green-500" />

                <input
                    name="password"
                    type="password"
                    placeholder="Password"
                    required
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border focus:outline-none focus:ring-2 focus:ring-green-500" />

                <div class="border-b-2 border-green-700"></div>

                <div class="text-right text-blue-600 font-roboto">
                    <a href="#" class="hover:underline">Lupa Password?</a>
                </div>

                <div class="flex gap-4 pt-2">

                    <a
                        href="sign.php"
                        class="w-full no-underline text-center border-2 border-green-700 text-green-700 py-2 rounded-full hover:bg-green-700 hover:text-white transition">
                        Daftar Akun
                    </a>

                    <button
                        type="submit"
                        name="login"
                        class="w-full text-center bg-green-700 text-white py-2 rounded-full hover:bg-green-800 transition font-bold">
                        Login
                    </button>

                </div>
            </form>
        </div>
    </section>

</body>

</html>