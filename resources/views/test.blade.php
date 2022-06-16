@extends('layouts.app')

@section('content')
    <div class="flex justify-center mx-20 mt-10">
        @include('layouts.sidebar.user-menu')
        <div class="block p-6 rounded-lg shadow-lg bg-white ml-10 min-w-min w-full">
            <div class="flex justify-start h-screen">
                <section class="flex flex-col justify-center antialiased bg-gray-50 text-gray-600 min-h-screen p-4">
                    <div class="h-full">
                        <!-- Card -->
                        <div class="relative max-w-[340px] mx-auto bg-white shadow-lg rounded-lg">
                            <!-- Card header -->
                            <header class="pt-6 pb-4 px-5 border-b border-gray-200">
                                <div class="flex justify-between items-center mb-3">
                                    <!-- Image + name -->
                                    <div class="flex items-center">
                                        <a class="inline-flex items-start mr-3" href="#0">
                                            <img class="rounded-full"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-48-01_nugblk.jpg"
                                                width="48" height="48" alt="Lauren Marsano" />
                                        </a>
                                        <div class="pr-1">
                                            <a class="inline-flex text-gray-800 hover:text-gray-900" href="#0">
                                                <h2 class="text-xl leading-snug font-bold">Lauren Marsano</h2>
                                            </a>
                                            <a class="block text-sm font-medium hover:text-indigo-500"
                                                href="#0">@lauren.mars</a>
                                        </div>
                                    </div>
                                    <!-- Settings button -->
                                    <div class="relative inline-flex flex-shrink-0">
                                        <button
                                            class="text-gray-400 hover:text-gray-500 rounded-full focus:ring-0 outline-none focus:outline-none">
                                            <span class="sr-only">Settings</span>
                                            <svg class="w-4 h-4 fill-current" viewBox="0 0 16 16">
                                                <path
                                                    d="m15.621 7.015-1.8-.451A5.992 5.992 0 0 0 13.13 4.9l.956-1.593a.5.5 0 0 0-.075-.611l-.711-.707a.5.5 0 0 0-.611-.075L11.1 2.87a5.99 5.99 0 0 0-1.664-.69L8.985.379A.5.5 0 0 0 8.5 0h-1a.5.5 0 0 0-.485.379l-.451 1.8A5.992 5.992 0 0 0 4.9 2.87l-1.593-.956a.5.5 0 0 0-.611.075l-.707.711a.5.5 0 0 0-.075.611L2.87 4.9a5.99 5.99 0 0 0-.69 1.664l-1.8.451A.5.5 0 0 0 0 7.5v1a.5.5 0 0 0 .379.485l1.8.451c.145.586.378 1.147.691 1.664l-.956 1.593a.5.5 0 0 0 .075.611l.707.707a.5.5 0 0 0 .611.075L4.9 13.13a5.99 5.99 0 0 0 1.664.69l.451 1.8A.5.5 0 0 0 7.5 16h1a.5.5 0 0 0 .485-.379l.451-1.8a5.99 5.99 0 0 0 1.664-.69l1.593.956a.5.5 0 0 0 .611-.075l.707-.707a.5.5 0 0 0 .075-.611L13.13 11.1a5.99 5.99 0 0 0 .69-1.664l1.8-.451A.5.5 0 0 0 16 8.5v-1a.5.5 0 0 0-.379-.485ZM8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </div>
                                <!-- Meta -->
                                <div class="flex flex-wrap justify-center sm:justify-start space-x-4">
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current flex-shrink-0 text-gray-400" viewBox="0 0 16 16">
                                            <path
                                                d="M8 8.992a2 2 0 1 1-.002-3.998A2 2 0 0 1 8 8.992Zm-.7 6.694c-.1-.1-4.2-3.696-4.2-3.796C1.7 10.69 1 8.892 1 6.994 1 3.097 4.1 0 8 0s7 3.097 7 6.994c0 1.898-.7 3.697-2.1 4.996-.1.1-4.1 3.696-4.2 3.796-.4.3-1 .3-1.4-.1Zm-2.7-4.995L8 13.688l3.4-2.997c1-1 1.6-2.198 1.6-3.597 0-2.798-2.2-4.996-5-4.996S3 4.196 3 6.994c0 1.399.6 2.698 1.6 3.697 0-.1 0-.1 0 0Z" />
                                        </svg>
                                        <span class="text-sm whitespace-nowrap ml-2">Milan, IT</span>
                                    </div>
                                    <div class="flex items-center">
                                        <svg class="w-4 h-4 fill-current flex-shrink-0 text-gray-400" viewBox="0 0 16 16">
                                            <path
                                                d="M11 0c1.3 0 2.6.5 3.5 1.5 1 .9 1.5 2.2 1.5 3.5 0 1.3-.5 2.6-1.4 3.5l-1.2 1.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l1.1-1.2c.6-.5.9-1.3.9-2.1s-.3-1.6-.9-2.2C12 1.7 10 1.7 8.9 2.8L7.7 4c-.4.4-1 .4-1.4 0-.4-.4-.4-1 0-1.4l1.2-1.1C8.4.5 9.7 0 11 0ZM8.3 12c.4-.4 1-.5 1.4-.1.4.4.4 1 0 1.4l-1.2 1.2C7.6 15.5 6.3 16 5 16c-1.3 0-2.6-.5-3.5-1.5C.5 13.6 0 12.3 0 11c0-1.3.5-2.6 1.5-3.5l1.1-1.2c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4L2.9 8.9c-.6.5-.9 1.3-.9 2.1s.3 1.6.9 2.2c1.1 1.1 3.1 1.1 4.2 0L8.3 12Zm1.1-6.8c.4-.4 1-.4 1.4 0 .4.4.4 1 0 1.4l-4.2 4.2c-.2.2-.5.3-.7.3-.2 0-.5-.1-.7-.3-.4-.4-.4-1 0-1.4l4.2-4.2Z" />
                                        </svg>
                                        <a class="text-sm font-medium whitespace-nowrap text-indigo-500 hover:text-indigo-600 ml-2"
                                            href="#0">carolinmcneail.com</a>
                                    </div>
                                </div>
                            </header>
                            <!-- Card body -->
                            <div class="py-3 px-5">
                                <h3 class="text-xs font-semibold uppercase text-gray-400 mb-1">Chats</h3>
                                <!-- Chat list -->
                                <div class="divide-y divide-gray-200">
                                    <!-- User -->
                                    <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                        <div class="flex items-center">
                                            <img class="rounded-full items-start flex-shrink-0 mr-3"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-01_pfck4u.jpg"
                                                width="32" height="32" alt="Marie Zulfikar" />
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-900">Marie Zulfikar</h4>
                                                <div class="text-[13px]">The video chat ended · 2hrs</div>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- User -->
                                    <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                        <div class="flex items-center">
                                            <img class="rounded-full items-start flex-shrink-0 mr-3"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-02_vll8uv.jpg"
                                                width="32" height="32" alt="Nhu Cassel" />
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-900">Nhu Cassel</h4>
                                                <div class="text-[13px]">Hello Lauren 👋, · 24 Mar</div>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- User -->
                                    <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                        <div class="flex items-center">
                                            <img class="rounded-full items-start flex-shrink-0 mr-3"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-03_uzwykl.jpg"
                                                width="32" height="32" alt="Patrick Friedman" />
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-900">Patrick Friedman</h4>
                                                <div class="text-[13px]">Yes, you’re right but… · 14 Mar</div>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- User -->
                                    <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                        <div class="flex items-center">
                                            <img class="rounded-full items-start flex-shrink-0 mr-3"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-04_ttlftd.jpg"
                                                width="32" height="32" alt="Byrne McKenzie" />
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-900">Byrne McKenzie</h4>
                                                <div class="text-[13px]">Hey Lauren ✨, first of all… · 14 Mar</div>
                                            </div>
                                        </div>
                                    </button>
                                    <!-- User -->
                                    <button class="w-full text-left py-2 focus:outline-none focus-visible:bg-indigo-50">
                                        <div class="flex items-center">
                                            <img class="rounded-full items-start flex-shrink-0 mr-3"
                                                src="https://res.cloudinary.com/dc6deairt/image/upload/v1638102932/user-32-05_bktgmb.jpg"
                                                width="32" height="32" alt="Scott Micheal" />
                                            <div>
                                                <h4 class="text-sm font-semibold text-gray-900">Scott Micheal</h4>
                                                <div class="text-[13px]">No way 🤙! · 11 Mar</div>
                                            </div>
                                        </div>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

                <!-- More components -->
                <div x-show="open" class="fixed bottom-0 right-0 w-full md:bottom-8 md:right-12 md:w-auto z-60"
                    x-data="{ open: true }">
                    <div class="bg-gray-800 text-gray-50 text-sm p-3 md:rounded shadow-lg flex justify-between">
                        <div>👉 <a class="hover:underline ml-1" href="https://cruip.com/?ref=codepen-cruip-snippet-6"
                                target="_blank">More components on Cruip.com</a></div>
                        <button class="text-gray-500 hover:text-gray-400 ml-5" @click="open = false">
                            <span class="sr-only">Close</span>
                            <svg class="w-4 h-4 flex-shrink-0 fill-current" viewBox="0 0 16 16">
                                <path
                                    d="M12.72 3.293a1 1 0 00-1.415 0L8.012 6.586 4.72 3.293a1 1 0 00-1.414 1.414L6.598 8l-3.293 3.293a1 1 0 101.414 1.414l3.293-3.293 3.293 3.293a1 1 0 001.414-1.414L9.426 8l3.293-3.293a1 1 0 000-1.414z" />
                            </svg>
                        </button>
                    </div>
                </div>
                {{-- Chat Box --}}
                <div class="block p-6 rounded-r-lg shadow-lg bg-white border-r-2 w-full">
                    <h5 class="text-gray-900 text-xl leading-tight font-medium mb-2">Card title</h5>
                    <p class="text-gray-700 text-base mb-4">
                        Some quick example text to build on the card title and make up the bulk of the card's
                        content.
                    </p>
                    <button type="button"
                        class=" inline-block px-6 py-2.5 bg-blue-600 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:bg-blue-700 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-blue-800 active:shadow-lg transition duration-150 ease-in-out">Button</button>
                </div>
                {{-- Chat Box --}}
            </div>
        </div>
    </div>
@endsection
