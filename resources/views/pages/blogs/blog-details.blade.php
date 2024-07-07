@extends('layouts.main')
@section('content')
<div class="w-full h-auto pt-16 sm:pt-20 bg-pre-dark-green overflow-x-hidden">
    

    <div class="w-full">
        <div class="w-11/12 h-auto mx-auto">

            {{-- Title --}}
            <x-title-component :title="'Latest News and Blogs'" class="text-center text-slate-100 py-4 mb-3"/>

            <div class="w-full sm:w-11/12 mx-auto mb-3 flex justify-between items-center">
                {{-- Tags and Date --}}
                <div>
                    <span class="inline-block py-0 px-2 mr-2 text-slate-300 rounded-full bg-pre-dark-green bg-opacity-50 border border-white border-opacity-10 hover:bg-opacity-80 hover:text-white">
                        <a href="#">
                            #Diet
                        </a>
                    </span>
                    <span class="inline-block py-0 px-2 text-slate-300 rounded-full bg-pre-dark-green bg-opacity-50 border border-white border-opacity-10 hover:bg-opacity-80 hover:text-white">
                        <a href="#">
                            #Exercise
                        </a>
                    </span>
                    <p class="mt-2 text-sm text-slate-300">1 day ago <span class="hidden sm:inline-block">| 5 minutes read</span></p>

                </div>

                {{-- Social Media Share --}}
                <div class="flex">
                    {{-- Facebook share --}}
                    <a href="" class="inline-block p-2 mr-2 bg-white bg-opacity-30 rounded-full opacity-80 flex justify-center items-center hover:bg-opacity-50 hover:opacity-100">
                        <span class="sr-only">Share blog on facebook</span>

                        <svg width="20" height="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 320 512"><path d="M80 299.3V512H196V299.3h86.5l18-97.8H196V166.9c0-51.7 20.3-71.5 72.7-71.5c16.3 0 29.4 .4 37 1.2V7.9C291.4 4 256.4 0 236.2 0C129.3 0 80 50.5 80 159.4v42.1H14v97.8H80z"/></svg>
                    </a>

                    {{-- Twitter share --}}
                    <a href="" class="inline-block p-2 mr-2 bg-white bg-opacity-30 rounded-full opacity-80 flex justify-center items-center hover:bg-opacity-50 hover:opacity-100">
                        <span class="sr-only">Share blog on twitter-x</span>

                        <svg width="20" height="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"><path d="M389.2 48h70.6L305.6 224.2 487 464H345L233.7 318.6 106.5 464H35.8L200.7 275.5 26.8 48H172.4L272.9 180.9 389.2 48zM364.4 421.8h39.1L151.1 88h-42L364.4 421.8z"/></svg>
                    </a>

                    {{-- Link Copy --}}
                    <a href="" class="inline-block p-2 bg-white bg-opacity-30 rounded-full opacity-80 flex justify-center items-center hover:bg-opacity-50 hover:opacity-100">
                        <span class="sr-only">Copy link</span>

                        <svg width="20" height="20" fill="#fff" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path d="M579.8 267.7c56.5-56.5 56.5-148 0-204.5c-50-50-128.8-56.5-186.3-15.4l-1.6 1.1c-14.4 10.3-17.7 30.3-7.4 44.6s30.3 17.7 44.6 7.4l1.6-1.1c32.1-22.9 76-19.3 103.8 8.6c31.5 31.5 31.5 82.5 0 114L422.3 334.8c-31.5 31.5-82.5 31.5-114 0c-27.9-27.9-31.5-71.8-8.6-103.8l1.1-1.6c10.3-14.4 6.9-34.4-7.4-44.6s-34.4-6.9-44.6 7.4l-1.1 1.6C206.5 251.2 213 330 263 380c56.5 56.5 148 56.5 204.5 0L579.8 267.7zM60.2 244.3c-56.5 56.5-56.5 148 0 204.5c50 50 128.8 56.5 186.3 15.4l1.6-1.1c14.4-10.3 17.7-30.3 7.4-44.6s-30.3-17.7-44.6-7.4l-1.6 1.1c-32.1 22.9-76 19.3-103.8-8.6C74 372 74 321 105.5 289.5L217.7 177.2c31.5-31.5 82.5-31.5 114 0c27.9 27.9 31.5 71.8 8.6 103.9l-1.1 1.6c-10.3 14.4-6.9 34.4 7.4 44.6s34.4 6.9 44.6-7.4l1.1-1.6C433.5 260.8 427 182 377 132c-56.5-56.5-148-56.5-204.5 0L60.2 244.3z"/></svg>
                    </a>
                </div>
            </div>

            <div class="w-full sm:w-11/12 h-auto min-h-4/6 max-h-[80vh] mx-auto rounded-md overflow-hidden">
                <img src="{{ asset('images/blog-1.jpg') }}" alt="blog" class="w-full h-full object-cover object-top">
            </div>

            {{-- Blog Contents here --}}
            <div class="w-full sm:w-10/12 h-auto mx-auto py-3 text-white text-justify" id="blog-content">
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatum? Dignissimos, eius quis officiis in illo dicta sint omnis minus id deleniti autem, rerum eum consequatur atque voluptas iste ipsum. Odio neque id magni earum temporibus alias aliquam, cumque saepe laudantium nesciunt recusandae? Esse doloremque debitis cumque a minus eligendi quam! Voluptas et harum porro maiores, beatae in tempora ducimus tempore suscipit deserunt accusamus magnam. Accusantium distinctio sed quaerat ex esse dolor dolore commodi odio. Quasi non nobis aliquid odit suscipit? Cupiditate voluptatem sit consequuntur tenetur magnam natus accusamus saepe maiores, vitae numquam minima aliquam, cum ipsum unde, quo doloremque.
                </p>
    
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatum? Dignissimos, eius quis officiis in illo dicta sint omnis minus id deleniti autem, rerum eum consequatur atque voluptas iste ipsum. Odio neque id magni earum temporibus alias aliquam, cumque saepe laudantium nesciunt recusandae? Esse doloremque debitis cumque a minus eligendi quam! Voluptas et harum porro maiores, beatae in tempora ducimus tempore suscipit deserunt accusamus magnam. Accusantium distinctio sed quaerat ex esse dolor dolore commodi odio. Quasi non nobis aliquid odit suscipit? Cupiditate voluptatem sit consequuntur tenetur magnam natus accusamus saepe maiores, vitae numquam minima aliquam, cum ipsum unde, quo doloremque.
    
                </p>
                <img src="{{ asset('images/bolg-3.webp') }}" alt="" class="my-5 w-11/12 h-auto min-h-60 max-h-72 mx-auto rounded object-cover object-center">
    
                <p>
                    Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatum? Dignissimos, eius quis officiis in illo dicta sint omnis minus id deleniti autem, rerum eum consequatur atque voluptas iste ipsum. Odio neque id magni earum temporibus alias aliquam, cumque saepe laudantium nesciunt recusandae? Esse doloremque debitis cumque a minus eligendi quam! Voluptas et harum porro maiores, beatae in tempora ducimus tempore suscipit deserunt accusamus magnam. Accusantium distinctio sed quaerat ex esse dolor dolore commodi odio. Quasi non nobis aliquid odit suscipit? Cupiditate voluptatem sit consequuntur tenetur magnam natus accusamus saepe maiores, vitae numquam minima aliquam, cum ipsum unde, quo doloremque.
                </p>
    
                Lorem ipsum dolor sit amet consectetur, adipisicing elit. Rerum, voluptatum? Dignissimos, eius quis officiis in illo dicta sint omnis minus id deleniti autem, rerum eum consequatur atque voluptas iste ipsum. Odio neque id magni earum temporibus alias aliquam, cumque saepe laudantium nesciunt recusandae? Esse doloremque debitis cumque a minus eligendi quam! Voluptas et harum porro maiores, beatae in tempora ducimus tempore suscipit deserunt accusamus magnam. Accusantium distinctio sed quaerat ex esse dolor dolore commodi odio. Quasi non nobis aliquid odit suscipit? Cupiditate voluptatem sit consequuntur tenetur magnam natus accusamus saepe maiores, vitae numquam minima aliquam, cum ipsum unde, quo doloremque.
            </div>

            <hr class="opacity-30 my-3">

            {{-- Comments --}}
            <div class="w-full sm:w-10/12 h-auto mx-auto py-3 text-slate-100">
                {{-- Messages --}}
            <x-review-component 
            :name="'Mg Mg'"
            :date="'15 May 2023'"
            :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quibusdam velit sed autem ea? Porro optio sit culpa repellat repellendus!'" 
            :avatar="null"
            />
            <x-review-component 
            :name="'Mg Mg'"
            :date="'15 May 2023'"
            :message="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel quibusdam velit sed autem ea? Porro optio sit culpa repellat repellendus!'" 
            :avatar="null"
            :reply="true"
            />
            </div> 

        </div>
    </div>

</div>
@endsection