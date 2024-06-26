@extends('layouts.main')
@section('content')
<div class="w-full h-auto home">
    {{-- Navbar --}}
    @include('pages.navbar')

    {{-- Home page content --}}
    <div class="w-full h-auto flex flex-col items-center bg-black bg-opacity-20 backdrop-blur-sm">
        <div class="px-3 md:w-3/4">
            <h1 class="text-white text-4xl md:text-5xl lg:text-6xl font-black w-full mt-16">
                Discover Your Perfect & <br>
                Shape the Body
            </h1>
            <p class="text-white md:text-lg mt-3 font-lg w-3/4">
                We blend the latest fashion trends with functional features to create gym wear that looks as good as it feels.
            </p>
            <div class="w-3/4">
                <a href="#" class="underline mt-3 py-2 px-4 inline-block text-slate-100 font-bold float-end hover:text-green-300 hover:italic md:text-lg">
                    Explore for more &#8594;
                </a>
            </div>
        </div>
        <div class="w-full bg-gradient-to-b from-transparent via-pre-dark-green to-pre-extra-green">
            <img src="{{ asset('images/reff-removebg-preview.png') }}" alt="man" class="w-full h-full md:w-3/4 md:h-3/4 mx-auto">
        </div>
    </div>
</div>

@include('pages.best-sellers')
@include('pages.clothes')
@include('pages.blog-page')
@include('pages.faq-page')
@endsection