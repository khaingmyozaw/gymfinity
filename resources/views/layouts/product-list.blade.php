@extends('layouts.main')

@section('style')
<style>
.tab.active {
    background: #485c5b;
}
</style>
@endsection
@section('content')
<div class="py-5">
    {{-- Tabs --}}
    <div class="w-fit mx-auto flex justify-center rounded border border-slate-200 border-opacity-50 overflow-hidden">
        <a href="#" class="inline-block py-2 px-3 tab active">Clothes</a>
        <a href="#" class="inline-block py-2 px-3 tab">Items</a>
    </div>
</div>
<div class="w-full h-auto">
    @yield('products')
</div>
@endsection