@extends('layouts.main')
@section('content')
    <div class="w-full h-auto py-12 px-5 pt-20 sm:px-8 bg-pre-extra-green overflow-x-hidden">
        <a href="#" class="inline-block py-5">
            <
        </a>
        <div class="w-full h-auto p-5 rounded border bg-slate-100 bg-opacity-10 md:flex justify-center">
            <div class="w-full md:w-4/12 h-auto px-4">
                <div class="w-full h-96 rounded bg-slate-100 bg-opacity-30 shadow">
                    <img src="{{ asset('images/fe-3.png') }}" alt="products" class="w-full h-full object-contain object-center">
                </div>
                <div class="w-full h-auto py-4 flex flex-nowrap gap-2 overflow-auto">
                    <div class="shrink-0 w-28 h-28 rounded bg-gradient-to-br from-slate-300 to-slate-500 shadow">
                        <img src="{{ asset('images/fe-3.png') }}" alt="products" class="w-full h-full object-contain object-center">
                    </div>
                    <div class="shrink-0 w-28 h-28 rounded bg-gradient-to-br from-slate-300 to-slate-500 shadow">
                        <img src="{{ asset('images/fe-1.png') }}" alt="products" class="w-full h-full object-contain object-center">
                    </div>
                    <div class="shrink-0 w-28 h-28 rounded bg-gradient-to-br from-slate-300 to-slate-500 shadow">
                        <img src="{{ asset('images/fe-2.png') }}" alt="products" class="w-full h-full object-contain object-center">
                    </div>
                    <div class="shrink-0 w-28 h-28 rounded bg-gradient-to-br from-slate-300 to-slate-500 shadow">
                        <img src="{{ asset('images/fe-3.png') }}" alt="products" class="w-full h-full object-contain object-center">
                    </div>
                </div>
            </div>
            <div class="w-full md:w-4/12 text-white">
                {{-- Product Name --}}
                <h2 class="text-xl font-bold mb-3">Product name here</h2>

                {{-- Rating, Reviews and Orders --}}
                <div class="w-full flex justify-between">
                    <div>
                        <x-rating-component :type="false"/>
                        <span class="inline-block ms-2 text-orange-400">9.3</span>
                    </div>
                    <div>
                        {{-- message icon --}}
                        <svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgb(203 213 225);transform: ;msFilter:;"><path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2zm-6 11H7v-2h7v2zm3-4H7V7h10v2z"></path></svg>

                        <span>32 reviews</span>
                    </div>
                    <div>
                        {{-- cart icon --}}
                        <svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="22" height="22" viewBox="0 0 24 24" style="fill: rgb(203 213 225);transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>

                        <span>192 orders</span>

                    </div>
                </div>

                {{-- In Stock --}}
                <p class="py-4 text-[#21f505]">
                    {{-- correct icon --}}
                    <svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#21f505" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>

                    <span>In stock</span>
                </p>

                {{-- If Product is a shirt , size section --}}
                <div>
                    <h3 class="text-slate-300 my-2">
                        Select size
                    </h3>
                    <form action="">

                        <label for="size1" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500">
                            M
                            <input type="radio" name="size" id="size1" class="hidden" checked>
                        </label>

                        <label for="size2" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500">
                            L
                            <input type="radio" name="size" id="size2" class="hidden">
                        </label>

                        <label for="size3" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500">
                            XL
                            <input type="radio" name="size" id="size3" class="hidden">
                        </label>

                        <label for="size4" class="w-10 h-10 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500">
                            2XL
                            <input type="radio" name="size" id="size4" class="hidden">
                        </label>

                    </form>
                </div>

                {{-- Product Color --}}
                <div>
                    <h3 class="text-slate-300 my-2">
                        Color: blue
                    </h3>
                    <form action="">

                        <label for="size1" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500">
                            M
                            <input type="radio" name="size" id="size1" class="hidden" checked>
                        </label>

                    </form>
                </div>

                {{-- Product Information --}}
                <div>
                    <ul class="list-disc ms-3">
                        <li>
                            Material: Lather
                        </li>
                        <li>
                            Color: Blue
                        </li>
                        <li>
                            Size: Medium
                        </li>
                        <li>
                            Waiting Time: In stock
                        </li>
                    </ul>
                </div>
            </div>
            <div class="w-3/12"></div>
        </div>
    </div>
@endsection