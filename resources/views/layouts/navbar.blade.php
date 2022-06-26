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
        <div class="basis-1/2">
            <form>
                <div class="flex">
                    <label for="search-dropdown"
                        class="mb-2 text-sm font-medium text-gray-900 sr-only dark:text-gray-300">Your Email</label>
                    <button id="dropdown-button" data-dropdown-toggle="dropdown"
                        class="flex-shrink-0 z-10 inline-flex items-center py-2.5 px-4 text-sm font-medium text-center text-gray-900 bg-gray-100 border border-gray-300 rounded-l-lg hover:bg-gray-200 focus:ring-4 focus:outline-none focus:ring-gray-100 dark:bg-gray-700 dark:hover:bg-gray-600 dark:focus:ring-gray-700 dark:text-white dark:border-gray-600"
                        type="button">All categories <svg class="ml-1 w-4 h-4" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path fill-rule="evenodd"
                                d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                clip-rule="evenodd"></path>
                        </svg></button>
                    <div id="dropdown"
                        class="hidden z-10 w-44 bg-white rounded divide-y divide-gray-100 shadow dark:bg-gray-700"
                        data-popper-reference-hidden="" data-popper-escaped="" data-popper-placement="top"
                        style="position: absolute; inset: auto auto 0px 0px; margin: 0px; transform: translate3d(897px, 5637px, 0px);">
                        <ul class="py-1 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdown-button">
                            <li>
                                <button type="button"
                                    class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Mockups</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Templates</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Design</button>
                            </li>
                            <li>
                                <button type="button"
                                    class="inline-flex py-2 px-4 w-full hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logos</button>
                            </li>
                        </ul>
                    </div>
                    <div class="relative w-full">
                        <input type="search" id="search-dropdown"
                            class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-r-lg border-l-gray-50 border-l-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-l-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500"
                            placeholder="Search Mockups, Logos, Design Templates..." required>
                        <button type="submit"
                            class="absolute top-0 right-0 p-2.5 text-sm font-medium text-white bg-blue-700 rounded-r-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800"><svg
                                class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                                xmlns="http://www.w3.org/2000/svg">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path>
                            </svg></button>
                    </div>
                </div>
            </form>
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
                        <a href="{{ url('user/chat') }}" class="hover:text-blue-600 transition">
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
                        <a href="{{url('product')}}" class="hover:text-blue-600 transition">
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
                        <a href="{{ url('user/whislist') }}" class="hover:text-blue-600 transition">
                            <svg xmlns="http://www.w3.org/2000/svg" class="mx-auto my-auto h-8 w-12" fill="none"
                                viewBox="0 0 24 24" stroke="currentColor" stroke-width="2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0     2 2 0 014 0z" />
                            </svg>
                            <span class="p-2">Whislist</span>
                        </a>
                    </div>
                </div>
                {{-- End Orders --}}
            </div>
        </div>
        {{-- End Nav Login and Other --}}
    </div>
</div>
