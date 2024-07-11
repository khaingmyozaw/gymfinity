@extends('layouts.main')
@section('content')
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="clothes">

    {{-- Breadcrumb --}}
    <x-breadcrumb 
    :links="[
        [
        'url' => "#",
        'label' => 'Home'
        ],
        ['url' => '#', 'label' => 'Clothes'],
    ]"
    class="mt-16 sm:mt-20"
    > </x-breadcrumb>

    <div class="sm:p-3 flex items-end justify-between">
        <x-title-component :title="'Available Clothes'" class="text-white w-50"/>
        <a href="#" class="inline-block shrink-0 w-auto text-white font-md hover:underline hover:italic">View Cart&#8594;</a>
    </div>

    {{-- Pagination --}}
    <x-pagination/>
</div>
@endsection