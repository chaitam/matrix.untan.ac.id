@extends('template.main')
@section('main')
    <!-- Hero Section Start -->
    <section id="home relative">
        @include('partials.hero')
        <h1
            class="absolute left-1/2 top-[20%] -translate-x-1/2 -translate-y-1/4 text-center text-xl font-bold text-primary lg:text-4xl xl:text-6xl sm:text-2xl sm:top-[35%] md:top-1/2">
            Selamat Datang
            <br>
            <span class="text-secondary text-base xl:text-6xl lg:text-4xl">Di Website Angkatan 2022</span>
        </h1>

    </section>
    <!-- Hero Section End -->

    <!-- About Section Start -->
    <section id="about" class="pt-36 pb-32 text-center ">
        <div class="container">
            <div class="flex flex-wrap">
                <div class="mb-10 w-full px-4 lg:w-1/2">
                    <h4 class="mb-3 text-lg font-bold uppercase text-primary lg:text-4xl">TENTANG <span
                            class="text-secondary">MATRIX</span></h4>
                    <p class="max-w-xl text-base font-medium text-white lg:text-lg">MATRIX 22 adalah komunitas yang berisi
                        mahasiswa-mahasiswi yang tergabung didalam Program Studi Sistem Informasi Universitas Tanjung Pura.
                    </p>
                    <p class="max-w-xl text-base font-medium text-white lg:text-lg">Komunitas ini bersifat tertutup dan
                        hanya diisi oleh mahasiswa/i angkatan 2022.</p>
                    <p class="max-w-xl text-base font-medium text-white lg:text-lg">MATRIX 22 diisi oleh orang-orang dari
                        berbagai latar belakang suku, ras, dan agama. Namun dengan perbedaan tersebut tercipta suatu
                        solidaritas yang terbangun didalamnya.</p>
                </div>
                <div class="w-full px-4 lg:w-1/2">
                    <img src="img/matrix logo 3.png" alt="" class="w-full h-full">
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- About Section End -->

    <!-- Visi dan Misi  Start -->
    <section id="portfolio" class=" pt-36 pb-16 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-bold text-primary lg:text-4xl">VISI & <span
                            class="text-secondary">MISI</span></h4>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12 ">
                <div class="mb-12 p-2 md:w-1/2 text-center">
                    <h3 class="font-semibold text-xl text-primary mt-5 mb-3 ">VISI</h3>
                    <p class="font-medium text-base text-white">Menjadi angkatan yang memiliki rasa solidaritas yang tinggi
                        dan rasa kekeluargaan yang erat serta memiliki inovasi yang dapat membawa perubahan yang berdampak
                        pada pengelolaan sistem informasi mengikuti perkembangan zaman.
                    </p>
                </div>

                <div class="mb-12 p-4 md:w-1/2 text-center">
                    <h3 class="font-semibold text-xl text-secondary mt-5 mb-3 ">MISI</h3>
                    <p class="font-medium text-base text-white">1. Membangun rasa saling percaya antar mahasiswa sistem
                        informasi angkatan 2022.<br>
                        2. Melaksanakan aktivitas bersama yang dapat menciptakan keharmonisan yang baik diantara mahasiswa.
                        <br>
                        3. Membangun sistem informasi yang dikelola bersama guna mendukung tranformasi digitalisasi
                        pengelolaan sumber daya.<br>
                        4. Melaksanakan pengabdian kepada masyarakat pada bidang sistem informasi untuk menciptakan
                        masyarakat yang paham teknologi.<br>
                        5. Mendukung jurusan dalam melaksanakan kegiatan Tri Dharma Perguruan Tinggi.
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- Visi dan Misi  End -->

    <section id="portfolio" class=" pt-36 pb-16 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-bold text-primary lg:text-4xl">KETUA <span
                            class="text-secondary">ANGKATAN</span></h4>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12 card-ketang">

                <div class="mb-12 p-4 md:w-1/2 text-center">
                    <img src="img/H1101221025.png" alt="" class="brightness-50 w-full object-cover h-[450px]">
                </div>

                <div class="mb-12 p-4 md:w-1/2 text-center ">
                    <h3 class="font-semibold text-xl text-secondary mt-5 mb-3 lg:text-xl">NUGROHO EKO SULISTYO</h3>
                    <p class="font-medium text-base text-white">Angaktan 2022 Sistem Informasi Universitas Tanjungpura</p>
                    <p class="font-medium text-base text-white">Jabatan Ketua Angkatan dipercayakan kepada Nugroho Eko atau
                        yang biasa di panggil eko sebagai ketua angkatan.</p>
                    <p class="font-medium text-base text-white">Eko diharapkan mampu membawa dan mempersatukan Angkatan 2022
                        menuju solidaritas dan kebersamaan didalam menjalani masa perkuliahan.</p>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class=" pt-36 pb-16 ">
        <div class="container">
            <div class="w-full px-4">
                <div class="mx-auto mb-16 max-w-xl text-center">
                    <h4 class="mb-2 text-lg font-bold text-primary lg:text-4xl">JUMLAH <span
                            class="text-secondary">ANGKATAN</span></h4>
                </div>
            </div>

            <div class="flex w-full flex-wrap justify-center px-4 xl:mx-auto xl:w-10/12 ">
                <div class="mb-12 p-4 md:w-1/2 ">
                    <img src="img/cowo.png" alt="" class="w-full h-full ">
                </div>
                <div class="mb-12 p-4 md:w-1/2  ">
                    <img src="img/cewe.png" alt="" class="w-full h-full ">
                </div>
            </div>
        </div>
    </section>
@endsection
