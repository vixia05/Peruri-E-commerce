@extends('layouts.app')

@section('content')
    <div class="flex-col border-b-2 px-44 space-x-5 py-2 text-sm">
        <select class="text-right px-2 border-r-2 ">
            <option>Categories</option>
        </select>
        <a href="#" class="col px-2">Makanan</a>
        <a href="#" class="col px-2">Pakain</a>
        <a href="#" class="col px-2">Product Original</a>
        <a href="#" class="col px-2">Jasa</a>
        <a href="#" class="col px-2">Otomotif</a>
        <a href="#" class="col px-2">Elektronik</a>
    </div>
    <div class="px-1 md:px-10 lg:px-16 py-10 space-y-10">
        {{-- Carousel Item --}}
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="0" class="active"
                    aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="1"
                    aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="2"
                    aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full max-h-60 overflow-hidden rounded-2xl">
                <div class="carousel-item active float-left w-full">
                    <img src="{{ asset('/images/motor.webp') }}" class="block w-full" alt="Wild Landscape" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="{{ asset('/images/042.webp') }}" class="block w-full" alt="Camera" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="{{ asset('/images/043.webp') }}" class="block w-full" alt="Exotic Fruits" />
                </div>
            </div>
            <button
                class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0"
                type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
                <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button
                class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0"
                type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
                <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
        </div>
        {{-- End Carousel Item --}}
        {{-- Feature Three Group --}}
          {{-- Featuring 1 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-white min-w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2 border-b-2">Produk Terbaru</h5>
                    <div class="flex overflow-x-scroll hide-scroll-bar p-4">
                        <div class="flex flex-nowrap">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
          {{-- Featuring 2 --}}
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-white min-w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-bold mb-2 border-b-2">Paling Sering Di lihat</h5>
                    <div class="flex overflow-x-scroll hide-scroll-bar p-4">
                        <div class="flex flex-nowrap">
                            @include('dummy.dummy-terbaru')
                        </div>
                    </div>
                </div>
            </div>
        {{-- End Three Feature --}}
        {{-- Item Showcase --}}

        <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 pb-2">Penawaran Lainnya</h5>
        @include('dummy.dummy-item')
        {{-- End item Showcase --}}
    </div>
@endsection
