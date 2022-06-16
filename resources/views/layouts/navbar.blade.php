<div class="hidden md:block sticky-top">
    <div
        class="flex flex-wrap space-y-3 md:space-x-2 md:space-y-0 py-3 px-4 md:px-6 lg:px-32 shadow-sm border-b-2 mb-3 bg-cyan-50">
        {{-- Logo E-commerce --}}
        <div class="mx-auto my-auto w-full md:basis-1/5">
            <a href="{{ url('/') }}">
                <img src="{{ asset('images/logo/Peruri.png') }}" class="max-h-14 mx-auto md:max-h-12">
            </a>
        </div>
        {{-- End Logo E-commerce --}}
        {{-- Search & Filter Bar --}}
        <div class="flex-intial w-full md:basis-1/2 pl-5">
            <div class="flex mt-3">
                <select id="fil-cats" name="fil-cats"
                    class="hidden md:block border-2 border-r-0 px-2 focus:border-blue-500 focus:outline-blue-600 focus:ring-blue-500 border-blue-400 rounded-l-3xl font-sans text-sm">
                    <option>Filter</option>
                    <option>Elektronik</option>
                    <option>Otomotif</option>
                    <option>3</option>
                </select>
                <input type="text" id="search-items" name="search-items" placeholder="Search Something ..."
                    class="pl-1 border-2 border-r-0 rounded-l-lg md:rounded-none focus:border-blue-500 focus:outline-none focus:ring-blue-00 border-blue-400 w-4/5 md:w-3/4 font-sans">
                <button type="button"
                    class="flex px-1 bg-blue-400 h-8 rounded-r-3xl text-white md:w-fit md:pr-4 hover:bg-blue-600 transition ease-in-out">
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="min-h-full max-h-full max-w-full my-auto px-1 py-1 mx-auto md:mx-1" viewBox="0 0 20 20"
                        fill="currentColor">
                        <path fill-rule="evenodd"
                            d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                            clip-rule="evenodd" />
                    </svg>
                    <h3 class="my-auto hidden lg:block text-sm ">Search</h3>
                </button>
            </div>
        </div>
        {{-- End Search & Filter Bar --}}
        {{-- Nav Login and Other --}}
        <div class="flex-auto my-auto mx-auto w-1/4 hidden md:block">
            <div class="flex">
                {{-- Login & Register --}}
                <div class="flex mx-4 my-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" class="ml-2 h-full w-12" fill="none" viewBox="0 0 24 24"
                        stroke="currentColor" stroke-width="2">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M5.121 17.804A13.937 13.937 0 0112 16c2.5 0 4.847.655 6.879 1.804M15 10a3 3 0 11-6 0 3 3 0 016 0zm6 2a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                    <div class="grid grid-flow-row grid-rows-2 ml-2">
                        <a href="{{ url('/user') }}" class="font-mono hover:underline">Masuk</a>
                        <a href="#" class="font-mono hover:underline">Daftar</a>
                    </div>
                </div>
                {{-- End Login & Register --}}
                {{-- Chat --}}
                <div class="flex">
                    <div class="grid grid-flow-row grid-rows-1">
                        <a href="#" class="hover:text-blue-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto my-auto h-8 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z" />
                            </svg>
                            <span class="p-2">Chat</span>
                        </a>
                    </div>
                </div>
                {{-- End Chat --}}
                {{-- Notification --}}
                <div class="flex">
                    <div class="grid grid-flow-row grid-rows-1">
                        <a href="#" class="hover:text-blue-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto my-auto h-8 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9" />
                            </svg>
                            <span class="p-2">Notif</span>
                        </a>
                    </div>
                </div>
                {{-- End Notification --}}
                {{-- Orders --}}
                <div class="flex">
                    <div class="grid grid-flow-row grid-rows-1">
                        <a href="#" class="hover:text-blue-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto my-auto h-8 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0     2 2 0 014 0z" />
                            </svg>
                            <span class="p-2">Cart</span>
                        </a>
                    </div>
                </div>
                {{-- End Orders --}}
            </div>
        </div>
        {{-- End Nav Login and Other --}}
    </div>
</div>
