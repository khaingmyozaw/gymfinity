@extends('layouts.main')
@section('content')
<div class="p-5 w-screen h-screen bg-pre-dark-green">
    <div class="w-3/4 h-full mx-auto rounded bg-white shadow flex">
        <div class="w-1/4 h-auto">
            <img src="{{ asset('images/woman.jpeg') }}" alt="" class="w-full h-full">
        </div>
        <div class="w-3/4 h-auto p-5">
            <form action="" method="">
                <label for="name">Full Name: <span class="text-red-500">*</span></label> <br>
                <input type="name" name="name" id="name" class="w-3/4 py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your full name"> <br> <br>

                <label for="email">Email: <span class="text-red-500">*</span></label> <br>
                <input type="email" name="email" id="email" class="w-3/4 py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your email"> <br> <br>

                <label for="phone">Phone Number: <span class="text-red-500">(optional)</span></label> <br>
                <input type="tel" name="phone" id="phone" class="w-3/4 py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your phone number"> <br> <br>
            </form>
        </div>
    </div>
</div>
@endsection