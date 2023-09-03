<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>MATRIX</title>
    <link rel="icon" type="image/x-icon" href="../img/MATRIX.png">
    @vite('resources/css/app.css')
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="../css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="../css/style.css" />

</head>

<body style="background-color: #1E1E1E; ">
    <!-- Header Start -->
    <header class="absolute top-0 left-0 z-10 flex w-full items-center bg-transparent">
        <div class="container">
            <div class="relative flex items-center justify-between">
                <div class="flex items-center justify-center px-4">
                    <div class="px-1.5">
                        <a href="#" class="block py-6">
                            <img src="../img/Logo-Untan-Universitas-Tanjungpura-PNG-1140x1142 1.png" alt=""
                                class="h-49 w-49" />
                        </a>
                    </div>
                    <div class="px-1.5">
                        <a href="#" class="block py-6">
                            <img src="../img/hmsi 1.png" alt="" class="h-49 w-49" />
                        </a>
                    </div>
                    <div class="px-1.5">
                        <a href="#home" class="block py-6">
                            <img src="../img/MATRIX.png" alt="" class="h-[60px] w-[88px]" />
                        </a>
                    </div>
                </div>
                <div class="flex items-center px-4">
                    <button id="hamburger" name="hamburger" type="button" class="absolute right-4 block lg:hidden">
                        <span class="hamburger-line origin-top-left transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line transition duration-300 ease-in-out"></span>
                        <span class="hamburger-line origin-bottom-left transition duration-300 ease-in-out"></span>
                    </button>

                    <nav id="nav-menu"
                        class="absolute right-4 top-full hidden  w-full max-w-[250px] rounded-lg bg-primary py-5 shadow-lg lg:static lg:block lg:max-w-full lg:rounded-none lg:bg-transparent lg:shadow-none ">
                        <ul class="block lg:flex">
                            <li class="group">
                                <a href="/"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-secondary">Beranda</a>
                            </li>

                            <li class="group">
                                <a href="/profil"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-secondary">Profil
                                    Angkatan</a>
                            </li>
                            <li class="group">
                                <a href="/galeri"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-secondary">Galeri</a>
                            </li>
                            <li class="group">
                                <a href="/lagu"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-secondary">Lagu-Lagu</a>
                            </li>
                            <li class="group">
                                <a href="/kontak"
                                    class="mx-8 flex py-2 text-base text-white group-hover:text-secondary">Kontak</a>
                            </li>

                        </ul>
                    </nav>
                </div>
            </div>
        </div>

    </header>
    <!-- Header End -->
    <section id="home relative">
        <div class="relative">
            <img src="../img/2.jpg" alt="" class="relative mx-auto max-w-full blur-xs brightness-50" />

        </div>
        <h1
            class="absolute left-1/2 top-[20%] -translate-x-1/2 -translate-y-1/4 text-center text-xl font-bold text-primary lg:text-4xl xl:text-6xl sm:text-2xl sm:top-[35%] md:top-1/2">
            {{ $lagu->judul }}</h1>
    </section>

    <div class="pt-24 pb-32 px-12 text-white text-center font-bold text-xl xl:text-2xl">
        <h2 class="text-primary">Lirik :</h2>
        {!! $lagu->lirik !!}
    </div>

    <script src="../js/script.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/swiper.js"></script>
    <script src="js/script-carousel.js"></script>

</body>

</html>
