@extends('layouts.main')
@section('content')
<div class="w-full h-screen p-5 bg-pre-dark-green flex items-center justify-center">
    <div class="w-full md:w-3/4 h-3/4 h-min-96 rounded bg-slate-100 shadow-md overflow-hidden flex">
        <div class="sm:w-2/5 h-full overflow-hidden hidden sm:block">
            <img src="{{ asset('images/woman.jpeg') }}" alt="login" class="size-full object-cover object-center">
        </div>
        <div class="w-full sm:w-3/5 h-full p-5">
            <h1 class="text-2xl font-bold text-pre-dark-green text-center">Gymfinity</h1>
            <form action="" method="" class="w-full h-full size-full py-3 flex flex-col items-center justify-around">
                <p class="mt-4">Welcome! Please, register to be a new member.</p>
                {{-- name --}}
                <x-input-component 
                    :id="'name'"
                    :type="'text'"
                    :placeholder="'Please, enter your name'"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M7.5 6.5C7.5 8.981 9.519 11 12 11s4.5-2.019 4.5-4.5S14.481 2 12 2 7.5 4.019 7.5 6.5zM20 21h1v-1c0-3.859-3.141-7-7-7h-4c-3.86 0-7 3.141-7 7v1h17z"></path></svg>
                </x-input-component>

                {{-- Email --}}
                <x-input-component 
                    :id="'email'"
                    :type="'email'"
                    :placeholder="'Please, enter your email'"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M20 4H6c-1.103 0-2 .897-2 2v5h2V8l6.4 4.8a1.001 1.001 0 0 0 1.2 0L20 8v9h-8v2h8c1.103 0 2-.897 2-2V6c0-1.103-.897-2-2-2zm-7 6.75L6.666 6h12.668L13 10.75z"></path><path d="M2 12h7v2H2zm2 3h6v2H4zm3 3h4v2H7z"></path></svg>
                </x-input-component>

                {{-- Phone --}}
                <x-input-component 
                :id="'phone'"
                :type="'tel'"
                :placeholder="'Please, enter your phone number'"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="m20.487 17.14-4.065-3.696a1.001 1.001 0 0 0-1.391.043l-2.393 2.461c-.576-.11-1.734-.471-2.926-1.66-1.192-1.193-1.553-2.354-1.66-2.926l2.459-2.394a1 1 0 0 0 .043-1.391L6.859 3.513a1 1 0 0 0-1.391-.087l-2.17 1.861a1 1 0 0 0-.29.649c-.015.25-.301 6.172 4.291 10.766C11.305 20.707 16.323 21 17.705 21c.202 0 .326-.006.359-.008a.992.992 0 0 0 .648-.291l1.86-2.171a.997.997 0 0 0-.085-1.39z"></path></svg>
                </x-input-component>
                
                {{-- password --}}
                <x-input-component 
                :id="'password'"
                :type="'password'"
                :placeholder="''"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M7 17a5.007 5.007 0 0 0 4.898-4H14v2h2v-2h2v3h2v-3h1v-2h-9.102A5.007 5.007 0 0 0 7 7c-2.757 0-5 2.243-5 5s2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"></path></svg>
                </x-input-component>

                {{-- conform password --}}
                <x-input-component 
                :id="'confirm-password1n'"
                :type="'password'"
                :placeholder="'Please, confirm you password'"
                >
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill: rgba(0, 0, 0, .6);transform: ;msFilter:;"><path d="M7 17a5.007 5.007 0 0 0 4.898-4H14v2h2v-2h2v3h2v-3h1v-2h-9.102A5.007 5.007 0 0 0 7 7c-2.757 0-5 2.243-5 5s2.243 5 5 5zm0-8c1.654 0 3 1.346 3 3s-1.346 3-3 3-3-1.346-3-3 1.346-3 3-3z"></path></svg>
                </x-input-component>

                <button class="w-full md:w-4/5 py-2 text-slate-100 bg-blue-700 bg-opacity-70 rounded">
                    Sign up
                </button>
            </form>
        </div>
    </div>
</div>
@endsection