@extends('layouts.app')

@section('content')
    <div class="flex-col border-b-2 px-44 space-x-5 py-2 text-sm">
        <select class="text-right px-2 border-r-2 ">
            <option>Categories</option>
        </select>
        <a href="#" class="col px-2">Elektronik</a>
        <a href="#" class="col px-2">Otomotif</a>
        <a href="#" class="col px-2">Clothes</a>
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
                    <img src="https://i0.wp.com/electrek.co/wp-content/uploads/sites/3/2022/01/damon-hyperfighter-header.jpg?w=1500&quality=82&strip=all&ssl=1"
                        class="block w-full" alt="Wild Landscape" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full" alt="Camera" />
                </div>
                <div class="carousel-item float-left w-full">
                    <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full"
                        alt="Exotic Fruits" />
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
        <div class="grid grid-flow-rows border-b-4 pb-6">
            <div class="grid grid-cols-1 lg:grid-cols-3 grid-flow-row gap-3">
                {{-- Featuring 1 --}}
                <div class="border-0 md:border-2 p-3 rounded-lg">
                    <h4 class="font-bold border-b-2 md:border-b-0">Produk Terbaru</h4>
                    <div class="grid grid-cols-3 grid-flow-row py-4 gap-3">
                        <div class="border-2 rounded-lg">
                            <img src="https://i0.wp.com/electrek.co/wp-content/uploads/sites/3/2022/01/damon-hyperfighter-header.jpg?w=1500&quality=82&strip=all&ssl=1"
                                class="block object-contain w-full h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">MotorCycle Yellow Type Like Know Nothing</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 1</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                class="block object-contain w-full h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Camera Conon</p>
                                <p class="font-bold text-sm font-sans" >Rp.1.500.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 10+</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                class="block object-contain w-full h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Fruit Fruty</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 100+</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Featuring 1 --}}
                {{-- Featuring 2 --}}
                <div class="border-2 p-3 rounded-lg">
                    <h4 class="font-bold">Produk Trending</h4>
                    <div class="grid grid-cols-3 grid-flow-row py-4 gap-3">
                        <div class="border-2 rounded-lg">
                            <img src="https://i0.wp.com/electrek.co/wp-content/uploads/sites/3/2022/01/damon-hyperfighter-header.jpg?w=1500&quality=82&strip=all&ssl=1"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">MotorCycle Yellow Type Like Know Nothing</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 1</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Camera Conon</p>
                                <p class="font-bold text-sm font-sans" >Rp.1.500.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 10+</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Fruit Fruty</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 100+</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Featuring 2 --}}
                {{-- Featuring 3 --}}
                <div class="border-2 p-3 rounded-lg">
                    <h4 class="font-bold">Rating Terbaik</h4>
                    <div class="grid grid-cols-3 grid-flow-row py-4 gap-3">
                        <div class="border-2 rounded-lg">
                            <img src="https://i0.wp.com/electrek.co/wp-content/uploads/sites/3/2022/01/damon-hyperfighter-header.jpg?w=1500&quality=82&strip=all&ssl=1"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">MotorCycle Yellow Type Like Know Nothing</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 1</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Camera Conon</p>
                                <p class="font-bold text-sm font-sans" >Rp.1.500.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 10+</p>
                            </div>
                        </div>
                        <div class="border-2 rounded-lg">
                            <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp"
                                class="block object-contain w-36 h-36 rounded-sm bg-slate-50" alt="Motorcycle" />
                            <div class="my-1 p-2">
                                <p class="text-sm font-sans line-clamp-2">Fruit Fruty</p>
                                <p class="font-bold text-sm font-sans" >Rp.23.000</p>
                                <p class="my-2 text-xs font-sans">Karawang</p>
                                <p class="my-2 text-xs font-sans">5.0 | Terjual 100+</p>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- End Featuring 3 --}}
            </div>
        </div>
        {{-- End Three Feature --}}
        {{-- Item Showcase --}}
        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 grid-flow-row gap-3">
            @include('dummy-item')
        </div>
        {{-- End item Showcase --}}
    </div>
@endsection
