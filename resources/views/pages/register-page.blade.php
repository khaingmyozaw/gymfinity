@extends('layouts.main')
@section('content')
<div class="w-full h-screen bg-pre-dark-green flex items-center justify-center overflow-hidden">
    <div class="w-3/5 h-3/5 mx-auto rounded bg-white shadow flex">
        <div class="w-2/5 h-auto">
            <img src="{{ asset('images/woman.jpeg') }}" alt="" class="w-full h-full">
        </div>
        <div class="w-3/5 h-auto p-5">
            <form action="" method="">
                <label for="name">Full Name: <span class="text-red-500">*</span></label> <br>
                <input type="name" name="name" id="name" class="w-full py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your full name"> <br> <br>

                <label for="email">Email: <span class="text-red-500">*</span></label> <br>
                <input type="email" name="email" id="email" class="w-full py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your email"> <br> <br>

                <label for="phone">Phone Number: <span>(optional)</span></label> <br>
                <input type="tel" name="phone" id="phone" class="w-full py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100" placeholder="Please, enter your phone number"> <br> <br>

                <label for="password">Password: <span>(optional)</span></label> <br>
                <input type="password" name="password" id="password" class="w-full py-2 px-4 rounded outline-0 border border-slate-100 border-opacity-60 bg-slate-100"> <br> <br>
                
                <div class="w-full flex justify-center">
                    <button class="w-3/4 mx-auto py-2 mt-3 text-slate-100 rounded bg-slate-600">
                        Register
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection