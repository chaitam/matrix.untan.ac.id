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
                    <p class="max-w-xl text-base font-medium text-white lg:text-lg">Lorem ipsum dolor sit amet consectetur
                        adipisicing elit. Id temporibus maiores sequi vitae saepe iusto deleniti!</p>
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
                <div class="mb-12 p-2 md:w-1/2 text-center  rounded border-red-900">
                    <h3 class="font-semibold text-xl text-primary mt-5 mb-3 ">VISI</h3>
                    <p class="font-medium text-base text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Laudantium iure eveniet perferendis enim mollitia iste eos? Dignissimos soluta consequuntur libero.
                    </p>
                </div>

                <div class="mb-12 p-4 md:w-1/2 text-center  rounded border-red-900">
                    <h3 class="font-semibold text-xl text-secondary mt-5 mb-3 ">MISI</h3>
                    <p class="font-medium text-base text-white">Lorem, ipsum dolor sit amet consectetur adipisicing elit.
                        Laudantium iure eveniet perferendis enim mollitia iste eos? Dignissimos soluta consequuntur libero.
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
                    <img src="img/1.jpg" alt="" class="brightness-50 w-full h-full object-cover ">
                </div>

                <div class="mb-12 p-4 md:w-1/2 text-center ">
                    <h3 class="font-semibold text-xl text-secondary mt-5 mb-3 lg:text-xl">NUGROHO EKO SULISTYO</h3>
                    <p class="font-medium text-base text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                        Veritatis obcaecati iste saepe amet consequuntur facere voluptas neque placeat aut quas illum quae
                        deleniti optio adipisci, totam unde. Laborum blanditiis omnis assumenda rerum facilis eaque at,
                        veniam nam molestias incidunt exercitationem non officiis maxime aperiam numquam error eius est
                        autem praesentium.</p>
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
