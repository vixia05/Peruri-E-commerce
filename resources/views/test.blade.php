@extends('layouts.app')

@section('content')
    <div class="flex-col border-b-2 px-44 space-x-5 pb-2 text-sm">
        <select class="text-right px-2 border-r-2 ">
            <option>Categories</option>
        </select>
        <a href="#" class="col px-2">Elektronik</a>
        <a href="#" class="col px-2">Otomotif</a>
        <a href="#" class="col px-2">Clothes</a>
    </div>
    <div class="px-1 md:px-10 lg:px-44">
        <div id="carouselExampleCrossfade" class="carousel slide carousel-fade relative" data-bs-ride="carousel">
            <div class="carousel-indicators absolute right-0 bottom-0 left-0 flex justify-center p-0 mb-4">
              <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
              <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="1" aria-label="Slide 2"></button>
              <button type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner relative w-full overflow-hidden">
              <div class="carousel-item active float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/041.webp" class="block w-full" alt="Wild Landscape"/>
              </div>
              <div class="carousel-item float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/042.webp" class="block w-full" alt="Camera"/>
              </div>
              <div class="carousel-item float-left w-full">
                <img src="https://mdbcdn.b-cdn.net/img/new/slides/043.webp" class="block w-full" alt="Exotic Fruits"/>
              </div>
            </div>
            <button class="carousel-control-prev absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline left-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="prev">
              <span class="carousel-control-prev-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next absolute top-0 bottom-0 flex items-center justify-center p-0 text-center border-0 hover:outline-none hover:no-underline focus:outline-none focus:no-underline right-0" type="button" data-bs-target="#carouselExampleCrossfade" data-bs-slide="next">
              <span class="carousel-control-next-icon inline-block bg-no-repeat" aria-hidden="true"></span>
              <span class="visually-hidden">Next</span>
            </button>
        </div>
    </div>
@endsection