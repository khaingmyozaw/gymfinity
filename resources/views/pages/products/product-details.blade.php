@extends('layouts.main')
@section('content')
    <div class="w-full h-auto py-12 px-5 pt-20 sm:px-8 bg-pre-extra-green overflow-x-hidden">
        <a href="#" class="inline-block py-5">
            <
        </a>
        {{-- Product Details --}}
        <div class="w-full h-auto p-5 rounded border bg-pre-dark-green bg-opacity-100 md:flex justify-center">
            <div class="w-full md:w-4/12 h-auto px-4">
                <div class="w-full h-96 rounded bg-slate-100 bg-opacity-10 shadow">
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
                <div class="w-full flex items-center">
                    <div class="mr-3">
                        <x-rating-component :type="false"/>
                        <span class="inline-block ms-2 text-orange-400">9.3</span>
                    </div>
                    <div class="mr-3 text-sm text-slate-300">
                        {{-- message icon --}}
                        <svg class="inline-block mr-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgb(203 213 225);transform: ;msFilter:;"><path d="M20 2H4c-1.103 0-2 .894-2 1.992v12.016C2 17.106 2.897 18 4 18h3v4l6.351-4H20c1.103 0 2-.894 2-1.992V3.992A1.998 1.998 0 0 0 20 2zm-6 11H7v-2h7v2zm3-4H7V7h10v2z"></path></svg>

                        <span>32 reviews</span>
                    </div>
                    <div class="text-sm text-slate-300">
                        {{-- cart icon --}}
                        <svg class="inline-block mr-1" xmlns="http://www.w3.org/2000/svg" width="18" height="18" viewBox="0 0 24 24" style="fill: rgb(203 213 225);transform: ;msFilter:;"><path d="M21.822 7.431A1 1 0 0 0 21 7H7.333L6.179 4.23A1.994 1.994 0 0 0 4.333 3H2v2h2.333l4.744 11.385A1 1 0 0 0 10 17h8c.417 0 .79-.259.937-.648l3-8a1 1 0 0 0-.115-.921z"></path><circle cx="10.5" cy="19.5" r="1.5"></circle><circle cx="17.5" cy="19.5" r="1.5"></circle></svg>

                        <span>192 orders</span>

                    </div>
                </div>

                {{-- In Stock --}}
                <p class="py-3 text-[#21f505]">
                    {{-- correct icon --}}
                    <svg class="inline-block mr-2" xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="#21f505" viewBox="0 0 448 512"><path d="M438.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L160 338.7 393.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/></svg>

                    <span>In stock</span>
                </p>

                {{-- If Product is a shirt , size section --}}
                <div class="py-3">
                    <h3 class="text-slate-300 my-2">
                        Select size
                    </h3>
                    <form action="">

                        <label for="size1" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500 cursor-pointer">
                            M
                            <input type="radio" name="size" id="size1" class="hidden" checked>
                        </label>

                        <label for="size2" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500 cursor-pointer">
                            L
                            <input type="radio" name="size" id="size2" class="hidden">
                        </label>

                        <label for="size3" class="w-10 h-10 mr-2 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500 cursor-pointer">
                            XL
                            <input type="radio" name="size" id="size3" class="hidden">
                        </label>

                        <label for="size4" class="w-10 h-10 rounded border border-slate-200 bg-slate-200 border-opacity-30 bg-opacity-30 text-lg inline-flex items-center justify-center has-[:checked]:bg-[#21f505] has-[:checked]:text-slate-500 cursor-pointer">
                            2XL
                            <input type="radio" name="size" id="size4" class="hidden">
                        </label>

                    </form>
                </div>

                {{-- Product Color --}}
                <div class="py-3">
                    <h3 class="text-slate-300 my-2">
                        Color: blue
                    </h3>
                    <form action="">

                        <label for="color1" class="w-6 h-6 mr-2 border border-slate-300 border-opacity-30 rounded-full inline-flex items-center justify-center has-[:checked]:bg-pre-dark-green has-[:checked]:border-opacity-100 has-[:checked]:border-[#21f505] has-[:checked]:border-2 cursor-pointer">
                            <div class="w-4 h-4 rounded-full bg-green-500"></div>
                            <input type="radio" name="color" id="color1" class="hidden" checked>
                        </label>

                        <label for="color2" class="w-6 h-6 mr-2 border border-slate-300 border-opacity-30 rounded-full inline-flex items-center justify-center has-[:checked]:bg-pre-dark-green has-[:checked]:border-opacity-100 has-[:checked]:border-[#21f505] has-[:checked]:border-2 cursor-pointer">
                            <div class="w-4 h-4 rounded-full bg-white"></div>
                            <input type="radio" name="color" id="color2" class="hidden">
                        </label>

                        <label for="color3" class="w-6 h-6 mr-2 border border-slate-300 border-opacity-30 rounded-full inline-flex items-center justify-center has-[:checked]:bg-pre-dark-green has-[:checked]:border-opacity-100 has-[:checked]:border-[#21f505] has-[:checked]:border-2 cursor-pointer">
                            <div class="w-4 h-4 rounded-full bg-red-300"></div>
                            <input type="radio" name="color" id="color3" class="hidden">
                        </label>

                        <label for="color-4" class="w-6 h-6 mr-2 border border-slate-300 border-opacity-30 rounded-full inline-flex items-center justify-center has-[:checked]:bg-pre-dark-green has-[:checked]:border-opacity-100 has-[:checked]:border-[#21f505] has-[:checked]:border-2 cursor-pointer">
                            <div class="w-4 h-4 rounded-full bg-blue-500"></div>
                            <input type="radio" name="color" id="color-4" class="hidden">
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
            <div class="w-full md:w-3/12 p-4">
                <div class="w-full h-auto h-max-full p-3 rounded-md border border-opacity-30 shadow">
                    <div class="py-3 flex items-center">
                        <h2 class="mr-3 text-2xl text-white font-bold">
                            $98.00
                        </h2>
                        <h3 class="line-through text-xl text-slate-300">
                            $128.50
                        </h3>
                    </div>
                    <p class="text-sm -mt-3 mb-5 text-slate-300 text-opacity-70">
                        Price by sizes.
                    </p>

                    <div class="py-3 mb-3">
                        <button class="w-full py-2 my-2 text-slate-100 font-bold bg-blue-700 bg-opacity-90 rounded hover:bg-opacity-100 hover:text-white">
                            Add to cart
                        </button>
    
                        <button class="w-full py-2 my-2 text-white font-bold bg-blue-300 bg-opacity-30 rounded hover:bg-opacity-40">
                            Buy now
                        </button>
    
                        <button class="w-full py-2 my-2 text-slate-100 font-bold bg-blue-300 bg-opacity-0 rounded flex items-center justify-center hover:bg-opacity-10">
                            <svg class="mr-2" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 512 512"><path fill="#ffffff" d="M225.8 468.2l-2.5-2.3L48.1 303.2C17.4 274.7 0 234.7 0 192.8v-3.3c0-70.4 50-130.8 119.2-144C158.6 37.9 198.9 47 231 69.6c9 6.4 17.4 13.8 25 22.3c4.2-4.8 8.7-9.2 13.5-13.3c3.7-3.2 7.5-6.2 11.5-9c0 0 0 0 0 0C313.1 47 353.4 37.9 392.8 45.4C462 58.6 512 119.1 512 189.5v3.3c0 41.9-17.4 81.9-48.1 110.4L288.7 465.9l-2.5 2.3c-8.2 7.6-19 11.9-30.2 11.9s-22-4.2-30.2-11.9zM239.1 145c-.4-.3-.7-.7-1-1.1l-17.8-20c0 0-.1-.1-.1-.1c0 0 0 0 0 0c-23.1-25.9-58-37.7-92-31.2C81.6 101.5 48 142.1 48 189.5v3.3c0 28.5 11.9 55.8 32.8 75.2L256 430.7 431.2 268c20.9-19.4 32.8-46.7 32.8-75.2v-3.3c0-47.3-33.6-88-80.1-96.9c-34-6.5-69 5.4-92 31.2c0 0 0 0-.1 .1s0 0-.1 .1l-17.8 20c-.3 .4-.7 .7-1 1.1c-4.5 4.5-10.6 7-16.9 7s-12.4-2.5-16.9-7z"/></svg>

                            <span>View wishlist</span>
                        </button>
                    </div>
                    <hr>

                    <div class="py-3">
                        <p class="py-2 flex items-center">
                            <svg class="mr-3" width="22" height="22" fill="rgb(203 213 225)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M316.9 18C311.6 7 300.4 0 288.1 0s-23.4 7-28.8 18L195 150.3 51.4 171.5c-12 1.8-22 10.2-25.7 21.7s-.7 24.2 7.9 32.7L137.8 329 113.2 474.7c-2 12 3 24.2 12.9 31.3s23 8 33.8 2.3l128.3-68.5 128.3 68.5c10.8 5.7 23.9 4.9 33.8-2.3s14.9-19.3 12.9-31.3L438.5 329 542.7 225.9c8.6-8.5 11.7-21.2 7.9-32.7s-13.7-19.9-25.7-21.7L381.2 150.3 316.9 18z"/></svg>

                            <span>Good quality</span>
                        </p>
                        <p class="py-2 flex items-center">
                            <svg class="mr-3" width="22" height="22" fill="rgb(203 213 225)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"><path d="M320 96a32 32 0 1 1 -64 0 32 32 0 1 1 64 0zm21.1 80C367 158.8 384 129.4 384 96c0-53-43-96-96-96s-96 43-96 96c0 33.4 17 62.8 42.9 80H224c-17.7 0-32 14.3-32 32s14.3 32 32 32h32V448H208c-53 0-96-43-96-96v-6.1l7 7c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9L97 263c-9.4-9.4-24.6-9.4-33.9 0L7 319c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l7-7V352c0 88.4 71.6 160 160 160h80 80c88.4 0 160-71.6 160-160v-6.1l7 7c9.4 9.4 24.6 9.4 33.9 0s9.4-24.6 0-33.9l-56-56c-9.4-9.4-24.6-9.4-33.9 0l-56 56c-9.4 9.4-9.4 24.6 0 33.9s24.6 9.4 33.9 0l7-7V352c0 53-43 96-96 96H320V240h32c17.7 0 32-14.3 32-32s-14.3-32-32-32H341.1z"/></svg>

                            <span>Worldwide shipping</span>
                        </p>
                        
                        <p class="py-2 flex items-center">
                            <svg class="mr-3" width="22" height="22" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" style="fill: rgba(203, 213, 225, 1);transform: ;msFilter:;"><path d="M12 2C9.243 2 7 4.243 7 7v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7c0-2.757-2.243-5-5-5zM9 7c0-1.654 1.346-3 3-3s3 1.346 3 3v3H9V7zm4 10.723V20h-2v-2.277a1.993 1.993 0 0 1 .567-3.677A2.001 2.001 0 0 1 14 16a1.99 1.99 0 0 1-1 1.723z"></path></svg>

                            <span>Secure payment</span>
                        </p>
                        
                        <p class="py-2 flex items-center">
                            <svg class="mr-3" width="22" height="22" fill="rgb(203 213 225)" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M112 0C85.5 0 64 21.5 64 48V96H16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 272c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 48c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 240c8.8 0 16 7.2 16 16s-7.2 16-16 16H64 16c-8.8 0-16 7.2-16 16s7.2 16 16 16H64 208c8.8 0 16 7.2 16 16s-7.2 16-16 16H64V416c0 53 43 96 96 96s96-43 96-96H384c0 53 43 96 96 96s96-43 96-96h32c17.7 0 32-14.3 32-32s-14.3-32-32-32V288 256 237.3c0-17-6.7-33.3-18.7-45.3L512 114.7c-12-12-28.3-18.7-45.3-18.7H416V48c0-26.5-21.5-48-48-48H112zM544 237.3V256H416V160h50.7L544 237.3zM160 368a48 48 0 1 1 0 96 48 48 0 1 1 0-96zm272 48a48 48 0 1 1 96 0 48 48 0 1 1 -96 0z"/></svg>

                            <span>Fast & free delivery service</span>
                        </p>
                    </div>

                </div>
            </div>
        </div>

        <div class="w-full h-auto py-12 px-5 sm:px-8 bg-pre-extra-green">
            <x-tab-component 
            :specifications="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab atque qui fuga laboriosam, odit dicta ipsam saepe labore amet necessitatibus deleniti exercitationem repellendus eligendi ea voluptate magni? Architecto, explicabo tempore!'"
            :shipping="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Ab atque qui fuga laboriosam, odit dicta ipsam saepe labore amet necessitatibus deleniti exercitationem repellendus eligendi ea voluptate magni? Architecto, explicabo tempore!'"
            />
        </div>

        {{-- Related Products --}}
        <div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-dark-green">
            <x-title-component :title="'Related Products'" class="text-white w-50"/>

            <div class="sm:p-3 flex gap-4 sm:gap-6 justify-center flex-wrap ">
                <x-suit-clothes 
                    :image="'images/fe-1.png'"
                    :name="'Gym wear one'"
                    :price="'100'"
                    :code="'#gwo-30'"
                    :type="'Female'"
                    :colors="['black', 'white']"
                    :sizes="'M / L / XL / 2XL'"
                    class="w-3/4 sm:w-2/5 md:w-1/5 "
                />
                <x-suit-clothes 
                    :image="'images/fe-1.png'"
                    :name="'Gym wear one'"
                    :price="'100'"
                    :code="'#gwo-30'"
                    :type="'Female'"
                    :colors="['black', 'white']"
                    :sizes="'M / L / XL / 2XL'"
                    class="w-3/4 sm:w-2/5 md:w-1/5 "
                />
                <x-suit-clothes 
                    :image="'images/fe-1.png'"
                    :name="'Gym wear one'"
                    :price="'100'"
                    :code="'#gwo-30'"
                    :type="'Female'"
                    :colors="['black', 'white']"
                    :sizes="'M / L / XL / 2XL'"
                    class="w-3/4 sm:w-2/5 md:w-1/5 "
                />
                <x-suit-clothes 
                    :image="'images/fe-1.png'"
                    :name="'Gym wear one'"
                    :price="'100'"
                    :code="'#gwo-30'"
                    :type="'Female'"
                    :colors="['black', 'white']"
                    :sizes="'M / L / XL / 2XL'"
                    class="w-3/4 sm:w-2/5 md:w-1/5 "
                />
            </div>
        </div>
    </div>
@endsection 