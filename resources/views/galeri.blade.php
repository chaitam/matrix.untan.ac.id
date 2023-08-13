@extends('template.main')

@section('main')
    <section id="home relative">
        @include('partials.hero')
        <h1
            class="absolute left-1/2 top-[20%] -translate-x-1/2 -translate-y-1/4 text-center text-xl font-bold text-primary lg:text-4xl xl:text-6xl sm:text-2xl sm:top-[35%] md:top-1/2">
            Galeri</h1>
    </section>

    <section id="about" class="pb-32 pt-36">
        <div class="m-h-[100vh] container flex items-center justify-center">
            <div class="slide-container swiper m-w-[1120px] w-full">
                <div class="slide-content md:mx-10px mx-10 my-0 overflow-hidden md:my-0">
                    <div class="card-wrapper swiper-wrapper ">
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                        <div class="card swiper-slide relative ">
                            <img src="img/bg-meteor.png" alt="" class="brightness-50 rounded-xl" />
                            <div class="absolute top-4 left-2 p-4 text-white">
                                <h2 class="font-bold text-xl">Nama Kegiatan</h2>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn" style="padding-left: 20px;"></div>
                <div class="swiper-button-prev swiper-navBtn" style="padding-right: 20px;"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
