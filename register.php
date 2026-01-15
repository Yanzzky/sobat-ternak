<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login | Sobat Ternak</title>

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

<body id="authPage" class="min-h-screen grid grid-cols-2">

    <!-- ================= KIRI : LOGO ================= -->
    <section
        id="logoSection"
        class="bg-white flex items-center justify-center">
        <img
            id="logoImage"
            src="/SobatTernak/assets/img/logo1.png"
            alt="Logo Sobat Ternak"
            class="w-96" />
    </section>

    <!-- ================= KANAN : FORM ================= -->
    <section
        id="authSection"
        class="bg-green-700 flex items-center justify-center">
        <div
            id="authCard"
            class="bg-white p-10 rounded-xl shadow-lg w-96">
            <h1
                id="authTitle"
                class="font-sarina text-3xl text-gray-900 text-center mb-6 whitespace-nowrap">
                Selamat Datang
            </h1>

            <!-- ================= FORM ================= -->
            <form id="authForm" class="space-y-4">

                <input
                    id="usernameInput"
                    type="text"
                    placeholder="Username"
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border
                   focus:outline-none focus:ring-2 focus:ring-green-500" />

                <input
                    id="emailInput"
                    type="email"
                    placeholder="Email"
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border
                   focus:outline-none focus:ring-2 focus:ring-green-500" />

                <input
                    id="phoneInput"
                    type="tel"
                    placeholder="No Telephone"
                    inputmode="numeric"
                    pattern="[0-9]*"
                    oninput="this.value = this.value.replace(/[^0-9]/g, '')"
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border
                   focus:outline-none focus:ring-2 focus:ring-green-500" />

                <input
                    id="passwordInput"
                    type="password"
                    placeholder="Password"
                    class="w-full rounded-lg bg-gray-200 px-4 py-2 border
                   focus:outline-none focus:ring-2 focus:ring-green-500" />

                <div id="divider" class="border-b-2 border-green-700"></div>

                <div id="forgotPassword" class="text-right text-blue-600 font-roboto">
                    <a href="#" id="forgotLink" class="hover:underline">
                        Lupa Password?
                    </a>
                </div>

                <!-- ================= BUTTON ================= -->
                <div id="authButtons" class="flex gap-4 pt-2">

                    <button
                        id="signInBtn"
                        type="button"
                        class="w-full border-2 border-green-700 text-green-700 py-2 rounded-full
                     hover:bg-green-700 hover:text-white transition">
                        Sign In
                    </button>

                    <button
                        id="loginBtn"
                        type="submit"
                        class="w-full bg-green-700 text-white py-2 rounded-full
                     hover:bg-green-800 transition">
                        Login
                    </button>

                </div>
            </form>
        </div>
    </section>

</body>

</html>