@extends('layouts.app')

@section('content')
    <div class="flex justify-center mx-auto mt-10 shadow-lg rounded-xl w-fit pb-8 px-4">
        {{-- Primary Image --}}
        <div class="flex flex-col max-w-3xl">
            <div class="min-h-[150px] min-w-[150px] max-w-[600px] max-h-[600px] mt-4 overflow-hidden rounded-lg shadow-md mx-4">
                <img src="{{ asset('images/motor.webp') }}" class=" w-[150px] h-[150px] lg:w-full lg:h-full object-cover">
            </div>
            <div class="mx-4 md:w-[600px] md:h-[600px]">
                <div class="flex justify-start">
                    <div class="block rounded-lg shadow-lg bg-white">
                        <div class="flex overflow-x-scroll hide-scroll-bar p-2 mt-4">
                            <div class="flex flex-nowrap space-x-4">
                                <img src="{{ asset('images/motor.webp') }}" class="w-[150px] h-[150px] rounded-md object-cover">
                                <img src="{{ asset('images/motor.webp') }}" class="w-[150px] h-[150px] rounded-md object-cover">
                                <img src="{{ asset('images/motor.webp') }}" class="w-[150px] h-[150px] rounded-md object-cover">
                                <img src="{{ asset('images/motor.webp') }}" class="w-[150px] h-[150px] rounded-md object-cover">
                                <img src="{{ asset('images/motor.webp') }}" class="w-[150px] h-[150px] rounded-md object-cover">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- End Primary Image --}}
        <div class="max-w-full">
            <div class="flex justify-center">
                <div class="block p-4 bg-white max-w-[45rem] min-w-fit mb-8">
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
                    <div class="block pt-14 mb-10">
                        <button type="button"
                            class="mb-2 w-1/2 inline-block px-6 py-2.5 bg-green-500 rounded shadow-md hover:bg-green-600 hover:shadow-lg focus:bg-green-600 focus:shadow-lg focus:outline-none focus:ring-0 active:bg-green-700 active:shadow-lg transition duration-150 ease-in-out">
                            <img src="{{ asset('images/logo/whatsapp.svg') }}" class="w-8 h-8 inline-block mr-2 text-white">
                            <span class="text-lg font-medium leading-normal text-white">Hubungi Penjual</span></button>
                    </div>
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item bg-white border-y border-gray-200">
                            <h2 class="accordion-header mb-0" id="headingOne">
                                <button
                                    class=" accordion-button relative flex items-center w-full py-4 px-5 text-base text-gray-800 text-left bg-white border-1 rounded-none transition focus:outline-noneys"
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne"
                                    aria-expanded="true" aria-controls="collapseOne">
                                    Accordion Item #1
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body py-4 px-5">
                                    <strong>This is the first item's accordion body.</strong> It is shown by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-white border-y border-gray-200">
                            <h2 class="accordion-header mb-0" id="headingTwo">
                                <button
                                    class="
                              accordion-button
                              collapsed
                              relative
                              flex
                              items-center
                              w-full
                              py-4
                              px-5
                              text-base text-gray-800 text-left
                              bg-white
                              border-1
                              rounded-none
                              transition
                              focus:outline-none
                            "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                    aria-expanded="false" aria-controls="collapseTwo">
                                    Accordion Item #2
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body py-4 px-5">
                                    <strong>This is the second item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item bg-white border-y border-gray-200">
                            <h2 class="accordion-header mb-0" id="headingThree">
                                <button
                                    class="
                              accordion-button
                              collapsed
                              relative
                              flex
                              items-center
                              w-full
                              py-4
                              px-5
                              text-base text-gray-800 text-left
                              bg-white
                              border-1
                              rounded-none
                              transition
                              focus:outline-none
                            "
                                    type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree"
                                    aria-expanded="false" aria-controls="collapseThree">
                                    Accordion Item #3
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree"
                                data-bs-parent="#accordionExample">
                                <div class="accordion-body py-4 px-5">
                                    <strong>This is the third item's accordion body.</strong> It is hidden by default,
                                    until the collapse plugin adds the appropriate classes that we use to style each
                                    element. These classes control the overall appearance, as well as the showing and
                                    hiding via CSS transitions. You can modify any of this with custom CSS or overriding
                                    our default variables. It's also worth noting that just about any HTML can go within
                                    the <code>.accordion-body</code>, though the transition does limit overflow.
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
