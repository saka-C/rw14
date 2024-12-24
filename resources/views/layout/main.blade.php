<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Website RW 14</title>
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
        @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/sidebar.js', 'resources/js/navbar.js'])
    </head>
    <body class="bg-basecol">
    <nav id="navbar" class="flex justify-between bg-transparent h-24 shadow-none fixed top-0 w-full z-50 transition-all duration-300">
        <!-- Logo Section -->
        <div class="flex items-center md:pl-8 pl-2">
            <img src="{{ asset('assets/images/logo.png') }}" alt="logo" class="w-13">
            <div class="flex flex-col">
                <span class="font-poppins700 text-xl">RW 14</span>
                <span class="font-poppins-500 text-xs">Desa Cilebut Timur <br> Sukaraja - Kab. Bogor</span>
            </div>
        </div>

        <!-- Desktop Menu -->
        <div class="hidden lg:flex items-center gap-6">
            <h5><a href="#" class="hover:text-primary-500 transition-colors">Beranda</a></h5>
            <h5><a href="#" class="hover:text-primary-500 transition-colors">Struktur</a></h5>
            <h5><a href="#" class="hover:text-primary-500 transition-colors">Layanan</a></h5>
            <h5><a href="#" class="hover:text-primary-500 transition-colors">Demografis</a></h5>
            <h5><a href="#" class="hover:text-primary-500 transition-colors">Kelembagaan</a></h5>      
        </div>

        <!-- Login Button -->
        <a href="#" class="hidden hover:bg-primary-600 lg:flex bg-primary-500 items-center px-8 text-basecol">
            <h5 class="flex items-center">Login<i class='bx bx-log-in text-2xl ml-2'></i></h5>
        </a>

        <!-- Hamburger Button -->
        <button id="hamburger" class="lg:hidden px-6 ">
            <i class='bx bx-menu text-3xl'></i>
        </button>
    </nav>

    <!-- Mobile Sidebar -->
    <div id="sidebar" class="fixed top-0 right-0 w-64 h-full bg-white shadow-lg transform translate-x-full transition-transform duration-300 ease-in-out z-50">
        <!-- Close Button -->
        <button id="closeSidebar" class="absolute top-4 right-4 p-2 hover:bg-gray-100 rounded-full">
            <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </button>

        <!-- Mobile Menu -->
        <div class="flex flex-col pt-20 px-6">
            <a href="#" class="py-2 hover:text-primary-500 transition-colors">Beranda</a>
            <a href="#" class="py-2 hover:text-primary-500 transition-colors">Struktur</a>
            <a href="#" class="py-2 hover:text-primary-500 transition-colors">Layanan</a>
            <a href="#" class="py-2 hover:text-primary-500 transition-colors">Demografis</a>
            <a href="#" class="py-2 hover:text-primary-500 transition-colors">Kelembagaan</a>
            <a href="#" class="mt-4 bg-primary-500 py-2 px-4 text-basecol text-center rounded-md">
                Login <i class='bx bx-log-in inline-block ml-2'></i>
            </a>
        </div>
    </div>

    <!-- Overlay -->
    <div id="overlay" class="fixed inset-0 bg-black opacity-0 pointer-events-none transition-opacity duration-300 ease-in-out z-40"></div>

        @yield('pages')

        <footer class="bg-primary-500 w-full text-basecol flex lg:flex-row flex-col px-10 gap-20 justify-center py-16">
            <div class="flex flex-col">
                <h2>Sekretariat RW 14</h2>
                <h6 class="mb-6">Perum Bumi Pertiwi 2 Blok FF 2 <br> Cilebut Timur Sukaraja <br> Kabupaten Bogor 17610</h6>
                <div class="flex items-center text-5xl text-[#308478] gap-5">
                    <a href="#"><i class='bx bxl-instagram-alt' ></i></a>
                    <a href="#"><i class='bx bxl-facebook-circle'></i></a>
                    <a href="#"><i class='bx bxl-twitter'></i></a>
                </div>
            </div>
            <div class="text-[#308478]">
                <h2>Kontak</h2>
                <a href="#" class="flex items-center"><i class='bx bxl-whatsapp text-3xl mr-4' ></i><h4>0891234567</h4></a>
                <a href="#" class="flex items-center"><i class='bx bx-envelope text-3xl mr-4' ></i><h4>bp2@gmail.com</h4></a>
                <a href="#" class="flex items-center"><i class='bx bx-map text-3xl mr-4'></i><h4>Sekretariat RW 14</h4></a>
            </div>
            <div class="md:w-[280px] md:h-[215px] h-[300px]">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3964.022408848047!2d106.79961857413551!3d-6.518846863728137!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c3088536f939%3A0xfa17241bf38225a4!2sPerumahan%20Bumi%20Pertiwi%202!5e0!3m2!1sid!2sid!4v1733081410789!5m2!1sid!2sid" width="100%" height="100%" style="border-radius:10px;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
        </footer>

        <script src=""></script>
    </body>
</html>
