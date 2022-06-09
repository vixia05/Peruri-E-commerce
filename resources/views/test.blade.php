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
            <h3 class="block text-sm md:text-base lg:text-lg font-bold">Velit commodo adipisicing dolore consectetur nisi pariatur sunt consectetur consectetur Lorem ad amet qui sunt.</h3>
            <div class="flex flex-wrap gap-1 py-3">
                <div class="flex gap-2 border-r-2 px-2">
                    <p class="text-lg underline text-blue-300">5.0</p>
                    <p class="text-lg font-bold text-blue-300">*****</p>
                </div>
                <div class="flex gap-2 border-r-2 px-2">
                    <p class="text-lg underline ">72</p>
                    <p class="text-md text-gray-400">Penilaian</p>
                </div>
                <div class="flex gap-2 px-2">
                    <p class="text-lg underline ">81</p>
                    <p class="text-md text-gray-400">Terjual</p>
                </div>
            </div>
            <h2 class="p-6 text-3xl font-bold">RP. 23.000.000</h2>
            <div class="flex flex-wrap px-2">
                <p class="text-sm my-auto text-slate-400 font-light mr-10"> Variasi </p>
                <p class="text-lg border px-2 mx-1"> Hitam </p>
                <p class="text-lg border px-2 mx-1"> Hitam </p>
            </div>
        </div>
        {{-- End Product Synopsis --}}
    </div>
</div>
@endsection
