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


    <section class="pt-36 pb-36" id="home">
        <div class="m-h-[100vh] container flex items-center justify-center">
            <div class="slide-container swiper m-w-[1120px] w-full">
                <div class="slide-content md:mx-10px my-0 overflow-hidden ">
                    <div class="card-wrapper swiper-wrapper">
                        @php
                            $array = explode(',', $arr);
                        @endphp
                        @foreach ($array as $foto)
                            <div class="card swiper-slide card-ketang">
                                <img src="../img/{{ $foto }}" alt="foto_nonformal"
                                    class="brightness-50 w-[90%] h-[90%] mx-auto sm:w-[65%] sm:h-[65%] md:w-[50%] md:h-[50%] xl:w-[30%] xl:h-[30%]" />


                            </div>
                        @endforeach
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
        <div class="text-center text-white px-8 ">
            <h1 class="pt-5 font-bold text-xl lg:text-2xl">Nama : {{ $mhs->nama }}</h1>
            <h3 class="font-semibold text-base lg:text-2xl">NIM : {{ $mhs->nim }}</h3>
            <h3 class="pt-2 font-semibold text-base lg:text-xl">Hobi : {{ $mhs->hobi }}</h3>
            <h3 class="pt-2 font-semibold text-base lg:text-xl">TTL : {{ $mhs->ttl }}</h3>
            <h3 class="pt-2 font-semibold text-base lg:text-xl">Quotes : {{ $mhs->quotes }}
            </h3>
        </div>
    </section>

    <!-- Footer Start -->
    <footer class="bg-white pt-24 pb-12">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="mb-12 w-full px-4 font-medium text-dark md:w-1/3">
                    <img src="../img/matrix full logo.png" alt="" class="mb-5 -mx-[10px]">
                    <p>Jl. Prof. DR. Hadari Nawawi, Gdg. FMIPA Baru </p>
                    <p>Telepon : (0561) 577963</p>
                    <p>Email : sisfo@untan.ac.id</p>
                </div>
            </div>
        </div>

    </footer>
    <!-- Footer End -->


    <!-- Back to top Start -->
    <a href="#home"
        class="fixed bottom-4 right-4 z-[9999] hidden h-14 w-14 items-center justify-center rounded-full bg-primary p-4 hover:animate-pulse"
        id="to-top">
        <!-- icon666.com - MILLIONS vector ICONS FREE --><svg id="Layer_2" enable-background="new 0 0 32 32"
            viewBox="0 0 32 32" xmlns="http://www.w3.org/2000/svg">
            <path
                d="m16 22.5 13.7 3.9c.4.1.9 0 1.1-.4s.2-.8 0-1.2l-14-19c-.2-.3-.5-.4-.8-.4s-.6.2-.8.4l-14 19c-.1.3-.2.5-.2.7s.1.4.2.6c.2.4.7.5 1.1.4zm0-14.3 11.5 15.5-11.5-3.2-11.5 3.2z" />
        </svg>
    </a>
    <!-- Back to top End -->

    <script src="../js/script.js"></script>
    <script src="../js/swiper-bundle.min.js"></script>
    <script src="../js/script-carousel.js"></script>

</body>

</html>
