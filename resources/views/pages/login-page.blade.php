@extends('layouts.main')
@section('content')
<div class="w-full h-screen p-5 bg-pre-dark-green flex items-center justify-center">
    <div class="w-full md:w-3/4 h-3/4 h-min-96 rounded bg-slate-100 shadow-md overflow-hidden flex">
        <div class="sm:w-2/5 h-full overflow-hidden hidden sm:block">
            <img src="{{ asset('images/woman.jpeg') }}" alt="login" class="size-full object-cover object-center">
        </div>
        <div class="w-full sm:w-3/5 h-full p-5">
            <h1 class="text-2xl h-1/5 font-bold text-pre-dark-green text-center">Gymfinity</h1>
            <form action="" method="" class="w-full h-3/5 size-full py-3 flex flex-col items-center justify-around">
                <p class="mt-4">Welcome back! Please, login.</p>
                {{-- name --}}
                <x-input-component 
                    :id="'name'"
                    :type="'text'"
                    :placeholder="'Please, enter your username or email'"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                </x-input-component>

                {{-- password --}}
                <x-input-component 
                :id="'password'"
                :type="'password'"
                :placeholder="''"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M7 17a5.007 5.007 0 0 0 4.898-4H14v2h2v-2h2v3h2v-3h1v-2h-9.102A5.007 5.007 0 0 0 7 7c-2.757 0-5 2.243-5 5s2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"></path></svg>
                </x-input-component>

                <button class="w-full md:w-4/5 py-2 text-slate-100 bg-blue-700 bg-opacity-70 rounded">
                    Sign in
                </button>
            </form>
        </div>
    </div>
</div>
@endsection