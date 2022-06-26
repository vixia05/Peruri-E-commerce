@extends('layouts.app')

@section('content')
    {{-- Poduct Overview --}}
    <div class="w-full md:w-4/5 mx-auto bg-white rounded shadow-lg">
        <div class="flex flex-wrap md:p-2 space-x-8">
            {{-- Product Image --}}
            <div class="w-full md:w-2/5 mb-6">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-full h-96 mb-6 md:border-2 ">
                <div class="hidden md:block">
                    <div class="flex overflow-x-scroll gap-3">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                        <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                    </div>
                </div>
            </div>
            {{-- End Product Image --}}
            {{-- Product Synopsis --}}
            <div class="w-full md:w-1/2">
                {{-- Product Title --}}
                <h3 class="block text-sm md:text-base lg:text-lg font-bold">Velit commodo adipisicing dolore consectetur
                    nisi pariatur sunt consectetur consectetur Lorem ad amet qui sunt.</h3>
                {{-- End Product Title --}}
                {{-- Product Price --}}
                <h2 class="p-6 text-3xl font-sans text font-bold py-7">RP. 23.000.000</h2>
                {{-- End Product Price --}}
                {{-- Sumarry Product --}}
                <div class="grid grid-flow-row w-full px-2 space-y-6">
                    {{-- Summary 1 --}}
                    <div class="flex flex-wrap px-2 py-2">
                        <div class="block w-1/6">
                            <p class="text-sm text-slate-500 font-light">Lokasi</p>
                        </div>
                        <div class="block w-3/4">
                            <p class="text-sm hover:text-blue-500"> Teluk Jambe Karawang </p>
                        </div>
                    </div>
                    {{-- End Summary 1 --}}
                    {{-- Summary 2 --}}
                    <div class="flex flex-row flex-wrap px-2 py-2">
                        <div class="block basis-1/6">
                            <p class="text-sm text-slate-500 font-light"> Variasi </p>
                        </div>
                        <div class="block basis-3/4">
                            <div class="flex flex-row flex-wrap gap-2">
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam Sangat Boss </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                                <button type="button" class="border rounded-sm hover:border-blue-500">
                                    <p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p>
                                </button>
                            </div>
                        </div>
                    </div>
                    {{-- End Summary 2 to ... --}}
                    {{-- Order Button --}}
                    <div class="flex flex-wrap p-1 gap-2 pb-6 border-b-2">
                        <div class="block mt-4">
                            <button type="btn"
                                class="border-2 border-blue-300 bg-blue-100 bg-opacity-70 hover:bg-blue-200 hover:bg-opacity-70 rounded-sm px-6 py-3 transition ease-in-out">
                                <p class="font-sans">Tambah Whistlist</p>
                            </button>
                        </div>
                        <div class="block mt-4">
                            <button type="btn"
                                class="bg-blue-600 bg-opacity-90 hover:bg-blue-500  rounded-sm px-6 py-3 transition">
                                <p class="font-sans font-bold text-white">Hubungi Penjual</p>
                            </button>
                        </div>
                    </div>
                    {{-- Order Button --}}
                </div>
                {{-- End Summary Product --}}
            </div>
            {{-- End Product Synopsis --}}
        </div>
    </div>
    {{-- End Product Oveview --}}
    {{-- Store Credibility --}}
    <div class="w-full md:w-4/5 mx-auto bg-white rounded my-10 shadow-lg">
        <div class="md:p-2">
            <div class="flex flex-wrap">
                <img src="{{ asset('images/041.webp') }}" class="rounded-full h-20 w-20" alt="store_ava">
                <div class="block px-6 border-r-2 w-2/6">
                    <p class="text-basic">AutoParts Atlantis</p>
                    <p class="text-sm opacity-70">Aktif 1 Jam Lalu</p>
                    <div class="block mt-2">
                        <button type="btn"
                            class="border border-blue-300 bg-blue-100 bg-opacity-70 hover:bg-blue-200 hover:bg-opacity-70 rounded-sm px-3 py-1 transition ease-in-out">
                            <p class="font-sans text-sm">Chat Sekarang</p>
                        </button>
                        <button type="btn"
                            class="border border-slate-300 bg-slate-100 bg-opacity-70 hover:bg-slate-200 hover:bg-opacity-70 rounded-sm px-3 py-1 transition ease-in-out">
                            <p class="font-sans text-sm">Kunjungi Toko</p>
                        </button>
                    </div>
                </div>
                <div class="block w-1/2 p-4">
                    <div class="grid grid-flow-row grid-cols-3 gap-2">
                        <p class="font-sans text-sm opacity-80">Penilaian</p>
                        <p class="font-sans text-sm opacity-80">Persentase Chat Di Balas</p>
                        <p class="font-sans text-sm opacity-80">Bergabung</p>
                        <p class="font-sans text-sm opacity-80">Produk</p>
                        <p class="font-sans text-sm opacity-80">Waktu Chat Di Balas</p>
                        <p class="font-sans text-sm opacity-80">Pengikut</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Store Credibility --}}
    {{-- Sesification & Deskription Product --}}
    <div class="flex justify-center">
        <div class="block p-6 rounded-lg shadow-lg bg-white max-w-full w-full md:w-4/5">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 shadow-sm">Spesifikasi Produk</h5>
            <div class="grid grid-flow-row gap-4 py-6">
                <section class="flex flex-wrap pl-6">
                    <p class="text-gray-700 text-base basis-1/4 ">Jenis</p>
                    <p class="text-gray-700 text-base max-w-full">Motor</p>
                </section>
                <section class="flex flex-wrap pl-6">
                    <p class="text-gray-700 text-base basis-1/4">Variasi</p>
                    <p class="text-gray-700 text-base max-w-full">Hitam</p>
                </section>
                <section class="flex flex-wrap pl-6">
                    <p class="text-gray-700 text-base basis-1/4">Lokasi</p>
                    <p class="text-gray-700 text-base max-w-full">Teluk Jambe Karawang</p>
                </section>
            </div>
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 shadow-sm">Deskripsi Produk</h5>
            <div class="flex flex-wrap py-6">
                <p class="text-gray-700 text-base">Aute do nostrud nisi amet non culpa voluptate fugiat quis. Adipisicing
                    velit quis Lorem nisi cupidatat esse consectetur aliquip ex sint. Aute tempor officia sit proident Lorem
                    enim. Sit qui duis Lorem fugiat cupidatat duis nulla ex cillum.</p>
            </div>
        </div>
    </div>
    {{-- End Spesification & Deskription Product --}}
    {{-- Diskusi Produk --}}
    <div class="flex justify-center my-10">
        <div class="block p-10 rounded-lg shadow-lg bg-white max-w-full w-full md:w-4/5">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2 border-b-2 shadow-sm">Diskusi Produk</h5>
            <div class="flex justify-start">
                <div class="block p-6 rounded-lg shadow-lg bg-slate-100 max-w-full w-full">
                    <div class="flex justify-start border-b-2 p-2">
                        <div class="basis-auto mx-auto mb-auto min-w-fit">
                            <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                alt="store_ava">
                        </div>
                        <div class="basis-full pl-4 pt-1">
                            <p class="text-gray-700 text-xs mb-2">
                                <span class="font-bold text-sm">User-A</span>
                                15-06-2022
                            </p>
                            <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                consectetur
                                dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem aliquip
                                laboris
                                veniam.
                            </p>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                    consectetur
                                    dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem
                                    aliquip
                                    laboris
                                    veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="block p-2 pl-24">
                        <div class="flex justify-start p-2">
                            <div class="basis-auto mx-auto mb-auto min-w-fit">
                                <img src="{{ asset('images/041.webp') }}" class="rounded-full object-cover h-12 w-12"
                                    alt="store_ava">
                            </div>
                            <div class="basis-full pl-4 pt-1">
                                <p class="text-gray-700 text-xs mb-2">
                                    <span class="text-sm font-bold">Seller-A</span>
                                    15-06-2022
                                    <span
                                        class="text-xs inline-block py-1 px-2.5 leading-none text-center whitespace-nowrap align-baseline font-bold bg-blue-400 text-white rounded ml-6">Seller</span>

                                </p>
                                <p class="text-gray-700 text-sm mb-1 max-w-lg">
                                    Id esse exercitation eu enim dolor quis enim reprehenderit. Enim culpa duis fugiat
                                    consectetur
                                    dolore. In ea commodo fugiat eu exercitation ullamco proident est exercitation Lorem
                                    aliquip
                                    laboris
                                    veniam.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- End Diskusi Produk --}}
    {{-- Produk Lainnya --}}
    <div class="flex justify-center my-10">
        <div class="block p-10 rounded-lg shadow-lg bg-white max-w-full w-full md:w-4/5">
            <h5 class="text-gray-900 text-xl leading-tight font-medium mb-6 border-b-2 shadow-sm">Pilihan Lainnya</h5>

            @include('dummy.dummy-item')
        </div>
    </div>
    {{-- End Produk Lainnya --}}
@endsection
