@extends('template.main')

@section('main')
    <section id="home relative">
        @include('partials.hero')
        <h1
            class="absolute left-1/2 top-[20%] -translate-x-1/2 -translate-y-[20%] text-center text-xl font-bold text-primary lg:text-4xl xl:text-6xl">
            Kontak</h1>
        <div class="hidden sm:hidden md:block">
            <div
                class="flex items-center justify-center absolute left-1/2 top-1/2 -translate-x-1/2 -translate-y-[20%] text-center">
                <div
                    class="pict-1 xl:w-[215px] xl:h-[215px] xl:mx-32 md:w-[100px] md:h-[100px] md:mx-12 lg:w-[125px] h-[125px] lg:mx-32">
                    <img src="img/email.png" alt="">
                    <h1 class="text-white font-bold xl:text-2xl  mt-4 ">sisfo@untan.ac.id</h1>
                </div>
                <div
                    class="pict-1 xl:w-[215px] xl:h-[215px] xl:mx-32 md:w-[100px] md:h-[100px] md:mx-12 lg:w-[125px] h-[125px] lg:mx-32">
                    <img src="img/lokasi.png" alt="">
                    <h1 class="text-white font-bold xl:text-2xl  mt-4 ">Jl. Prof. DR. Hadari Nawawi
                        Gdg. FMIPA Baru</h1>
                </div>
                <div
                    class="pict-1 xl:w-[215px] xl:h-[215px] xl:mx-32 md:w-[100px] md:h-[100px] md:mx-12 lg:w-[125px] h-[125px] lg:mx-32">
                    <img src="img/telepon.png" alt="">
                    <h1 class="text-white font-bold xl:text-2xl  mt-4 "> (0561) 577963</h1>
                </div>
            </div>
        </div>
    </section>

    <section id="about" class="pb-40 pt-36 flex w-full justify-center bg-white flex-wrap px-4 md:hidden">
        <div class="pict-1 w-[215px] h-[215px] mb-36 p-4">
            <img src="img/lokasi.png" alt="">
            <h2 class="font-bold text-dark text-xl text-center pt-6">Jl. Prof. DR. Hadari Nawawi
                Gdg. FMIPA Baru</h2>
        </div>
        <div class="pict-1 w-[215px] h-[215px] mb-36 p-4">
            <img src="img/telepon.png" alt="">
            <h2 class="font-bold text-dark text-xl text-center pt-6"> (0561) 577963</h2>
        </div>
        <div class="pict-1 w-[215px] h-[215px] mb-36 p-4">
            <img src="img/email.png" alt="">
            <h2 class="font-bold text-dark text-xl text-center pt-6">sisfo@untan.ac.id</h2>
        </div>
    </section>
@endsection
