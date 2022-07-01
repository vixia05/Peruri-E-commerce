@extends('layouts.app')

@section('content')
    <div class="flex justify-center mx-auto mt-10 shadow-lg rounded-xl w-fit pb-8">
        <div class="max-w-lg p-4">
            <img src="{{ asset('images/motor.webp') }}" class="rounded-md shadow-md object-cover">
        </div>
        <div class="max-w-full">
            <div class="flex justify-center">
                <div class="block p-4 bg-white max-w-2xl min-w-fit">
                    <h5 class="text-gray-900 text-2xl leading-tight font-extrabold mb-3">Motor Racing</h5>
                    <p class="text-gray-900 text-2xl leading-snug font-medium mb-3">Rp.125.000.000</p>
                    <p class="text-gray-700 text-base mb-10 leading-normal">
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo libero perferendis est error? Omnis
                        odit neque commodi laborum culpa alias, veniam similique molestias, excepturi sequi reiciendis
                        doloremque ipsa labore eum amet mollitia! Porro quas optio dolore. Facilis sed minus, ducimus
                        similique fugiat, dicta esse nihil, illo iusto suscipit voluptatem error.
                    </p>
                    <p class="text-gray-700 text-sm leading-tight font-medium">
                        Color
                    </p>
                    <div class="form-check space-x-3 mb-6">
                        <input
                            class="form-check-input rounded-full appearance-none h-8 w-8 border hover:black border-gray-300 bg-white checked:bg-black checked:border-black focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                            type="checkbox" value="" id="flexCheckDefault3" checked>
                        <input
                            class="form-check-input appearance-none h-8 w-8 border border-gray-300 rounded-full bg-white active::bg-black checked:bg-yellow-600 checked:border-yellow-600 focus:outline-none transition duration-200 my-1 align-top bg-no-repeat bg-center bg-contain float-left cursor-pointer"
                            type="checkbox" value="" id="flexCheckChecked3">
                    </div>
                    <div class="block pt-14">
                        <button type="button" class="mb-2 w-1/2 inline-block px-6 py-2.5 bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                        <img src="{{asset('images/logo/whatsapp.svg')}}" class="w-8 h-8 inline-block mr-2 text-white">
                        <span class="text-lg font-medium leading-normal text-white">Hubungi Penjual</span></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
