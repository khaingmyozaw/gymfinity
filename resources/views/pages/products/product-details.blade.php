@extends('layouts.main')
@section('content')
    <div class="w-100 h-auto py-12 px-5 pt-20 sm:px-8 bg-pre-extra-green">
        <a href="#" class="inline-block py-5">
            <
        </a>
        <div class="w-full h-auto flex items-center justify-center">
            <div class="w-4/12 h-auto px-4">
                <div class="w-full h-96 rounded bg-slate-100 shadow">
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
            <div class="w-4/12">
                
            </div>
            <div class="w-3/12"></div>
        </div>
    </div>
@endsection