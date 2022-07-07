{{-- Header --}}
<div class="flex justify-end relative bg-slate-800 py-2 px-4">
    <div class="flex-none">
        <a href="{{ url('register') }}" class="text-sm text-white border-r-2 pr-2">Register</a>
        <a href="{{ url('login') }}" class="text-sm text-white pl-2 pr-4">Login</a>
    </div>
</div>
{{-- End Header --}}
{{-- Navbar --}}
<nav class="flex justify-start flex-wrap sticky top-0 z-50 bg-white shadow-md p-4">
    {{-- Logo --}}
    <a href="{{ url('/') }}">
        <img src="{{ asset('images/logo/Peruri.svg') }}" class="w-full md:w-fit max-h-10 my-auto ml-10 pb-2 md:pb-0">
    </a>
    {{-- End Logo --}}
    {{-- Categories --}}
    <div class="dropdown ml-8 my-auto mr-4 hidden md:block">
        <button
            class="dropdown-toggle text-sm font-semibold transition focus:drop-shadow-lg focus:outline-none focus:ring-0 active:drop-shadow-lg active:text-gray-600 duration-150 ease-in-out flex items-center whitespace-nowrap"
            type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
            Categories
            <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="caret-down" class="w-2 ml-2"
                role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512">
                <path fill="currentColor"
                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z">
                </path>
            </svg>
        </button>
        <ul class=" dropdown-menu min-w-max absolute hidden bg-white text-base z-50 float-left py-2 list-none text-left rounded-lg shadow-lg mt-1 hidden m-0 bg-clip-padding border-none"
            aria-labelledby="dropdownMenuButton1">
            <li>
                <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                    href="{{ url('product/category') }}">Produk Original</a>
            </li>
            <li>
                <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                    href="#">Makanan</a>
            </li>
            <li>
                <a class=" dropdown-item text-sm py-2 px-4 font-normal block w-full whitespace-nowrap bg-transparent text-gray-700 hover:bg-gray-100"
                    href="#">Pakaian</a>
            </li>
        </ul>
    </div>
    <div class="flex-1 my-auto text-sm font-semibold space-x-4 hidden lg:block">
        <a href="{{ url('product/category') }}" class="p-1">Produk Original</a>
        <a href="{{ url('product/detail') }}" class="p-1">Makanan</a>
        <a href="{{ url('product/detail') }}" class="p-1">Jasa</a>
    </div>
    {{-- End Categories --}}
    {{-- Search And Others --}}
    <div class="pr-2 mr-1 border-r-2 ml-auto my-auto">
        <div class="flex justify-center space-x-4">
            <div class="my-auto w-fit">
                <div class="input-group relative flex flex-wrap w-fit">
                    <input type="search"
                        class="form-control relative flex-auto min-w-0 block w-fit px-3 py-1 text-sm font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded-full transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                        placeholder="Search.." aria-label="Search" aria-describedby="button-addon2">
                    <button
                        class="btn inline-block px-4 py-2 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700  focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out flex items-center"
                        type="button" id="button-addon2">
                        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="search" class="w-4"
                            role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                            <path fill="currentColor"
                                d="M505 442.7L405.3 343c-4.5-4.5-10.6-7-17-7H372c27.6-35.3 44-79.7 44-128C416 93.1 322.9 0 208 0S0 93.1 0 208s93.1 208 208 208c48.3 0 92.7-16.4 128-44v16.3c0 6.4 2.5 12.5 7 17l99.7 99.7c9.4 9.4 24.6 9.4 33.9 0l28.3-28.3c9.4-9.4 9.4-24.6.1-34zM208 336c-70.7 0-128-57.2-128-128 0-70.7 57.2-128 128-128 70.7 0 128 57.2 128 128 0 70.7-57.2 128-128 128z">
                            </path>
                        </svg>
                    </button>
                </div>
            </div>
            <a href="{{ url('user') }}" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                  </svg>
            </a>
        </div>
    </div>
    <div class="p-2 ml-1 my-auto">
        <div class="flex justify-center space-x-3">
            <a href="{{ url('user/chat') }}" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M8 10h.01M12 10h.01M16 10h.01M9 16H5a2 2 0 01-2-2V6a2 2 0 012-2h14a2 2 0 012 2v8a2 2 0 01-2 2h-5l-5 5v-5z" />
                  </svg>
            </a>
            <a href="{{ url('user/diskusi') }}" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                  </svg>
            </a>
            <a href="{{ url('user/wishlist') }}" class="my-auto transition ease-in-out text-gray-500 hover:text-slate-800">
                <svg xmlns="http://www.w3.org/2000/svg" class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor" stroke-width="1.5">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z" />
                  </svg>
            </a>
        </div>
    </div>
    {{-- End Search And Others --}}

</nav>
{{-- End Navbar --}}
