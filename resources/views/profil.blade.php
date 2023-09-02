@extends('template.main')

@section('main')
    <section id="home relative">
        @include('partials.hero')
        <h1
            class="absolute left-1/2 top-[20%] -translate-x-1/2 -translate-y-1/4 text-center text-xl font-bold text-primary lg:text-4xl xl:text-6xl sm:text-2xl sm:top-[35%] md:top-1/2">
            Profil Angkatan</h1>
    </section>

    <section id="about" class="pb-32 pt-36  ">
        <div class="m-h-[100vh] container flex items-center justify-center">
            <div class="slide-container swiper m-w-[1120px] w-full">
                <div class="slide-content md:mx-10px mx-10 my-0 overflow-hidden md:my-0">
                    <div class="card-wrapper swiper-wrapper px-0 xsm:px-0 sm:px-8 ">

                        @foreach ($mhs as $mhs)
                            <a href="/detail/{{ $mhs['nim'] }}" class="relative card swiper-slide card-ketang ">
                                <img src="img/{{ $mhs->foto_normal }}" alt="" class="brightness-50">
                                <div class="absolute bottom-0 left-4 p-4 text-white overflow-hidden w-[80%]">
                                    <h2 class="font-bold">{{ $mhs->nama }}</h2>
                                    <h2 class="font-bold">{{ $mhs->nim }}</h2>
                                </div>
                            </a>
                        @endforeach


                    </div>
                </div>

                <div class="swiper-button-next swiper-navBtn relative top-[150px]"></div>
                <div class="swiper-button-prev swiper-navBtn"></div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>
@endsection
