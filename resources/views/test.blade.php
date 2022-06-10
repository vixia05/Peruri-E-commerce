@extends('layouts.app')

@section('content')
<div class="px-80">
    <div class="flex p-3 border space-x-8">
        {{-- Product Image --}}
        <div class="w-2/5">
            <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-full h-96 mb-6 border-2 rounded-sm">
            <div class="flex overflow-x-scroll gap-3">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
                <img src="{{ asset('/images/motor.webp') }}" class="block object-cover w-28 h-28">
            </div>
        </div>
        {{-- End Product Image --}}
        {{-- Product Synopsis --}}
        <div class="w-3/5">
            {{-- Product Title --}}
            <h3 class="block text-sm md:text-base lg:text-lg font-bold">Velit commodo adipisicing dolore consectetur nisi pariatur sunt consectetur consectetur Lorem ad amet qui sunt.</h3>
            {{-- End Product Title --}}
            {{-- Product Statistic --}}
            <div class="flex flex-wrap gap-1 py-3">
                <div class="flex gap-2 border-r-2 px-2">
                    <p class="text-lg underline text-blue-300">5.0</p>
                    <p class="text-lg font-bold text-blue-300">*****</p>
                </div>
                <div class="flex gap-2 border-r-2 px-2">
                    <p class="text-lg underline ">72</p>
                    <p class="text-md text-gray-500">Penilaian</p>
                </div>
                <div class="flex gap-2 px-2">
                    <p class="text-lg underline ">81</p>
                    <p class="text-md text-gray-500">Terjual</p>
                </div>
            </div>
            {{-- End Product Statistic --}}
            {{-- Product Price --}}
            <h2 class="p-6 text-3xl font-sans text font-bold py-7">RP. 23.000.000</h2>
            {{-- End Product Price --}}
            {{-- Sumarry Product --}}
            <div class="grid grid-flow-row w-full px-2 space-y-2">
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
                <div class="flex flex-wrap px-2 py-2">
                    <div class="block w-1/6">
                        <p class="text-sm text-slate-500 font-light"> Variasi </p>
                    </div>
                    <div class="block w-3/4">
                        <div class="flex flex-wrap gap-2">
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                            <button type="button" class="border rounded-sm hover:border-blue-500"><p class="text-sm hover:text-blue-500 px-3 py-2"> Hitam </p></button>
                        </div>
                    </div>
                </div>
                {{-- End Summary 2 to ... --}}
                {{-- Product Quantity --}}
                <div class="flex flex-wrap p-2">
                    <div class="block w-1/6">
                        <p class="text-sm text-slate-500 font-light"> Kuantitas </p>
                    </div>
                    <div class="block w-3/4">
                        <div class="flex flex-wrap ">
                            <button type="btn" class="border px-2 h-7 my-auto hover:border-blue-500">-</button>
                            <input type="number" class="border px-2 text-center appearance-none w-24 h-7 my-auto hover:border-blue-500 focus:border-blue-500 outline-blue-400" value="1"/>
                            <button type="btn" class="border px-2 h-7 my-auto hover:border-blue-500">+</button>
                            <p class="text-xs opacity-80 font-sans mx-2 my-auto">Tersisa 1.000 Unit</p>
                        </div>
                    </div>
                </div>
                {{-- End Product Quantity --}}
                {{-- Order Button --}}
                <div class="flex flex-wrap p-1 gap-2">
                    <div class="block mt-4">
                        <button type="btn" class="border-2 bg-blue-100 opacity-80 border-blue-300 hover:bg-blue-50  rounded-sm px-6 py-3">
                            <p class="font-sans">Masukan Ke Keranjang</p>
                        </button>
                    </div>
                    <div class="block mt-4">
                        <button type="btn" class="bg-blue-400 opacity-80 hover:bg-blue-50  rounded-sm px-6 py-3">
                            <p class="font-sans font-bold text-white">Beli Sekarang</p>
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
@endsection
