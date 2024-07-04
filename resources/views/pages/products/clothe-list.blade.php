@extends('layouts.product-list')
@section('products')
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="clothes">

    {{-- Breadcrumb --}}
    <x-breadcrumb 
    :links="[
        [
        'url' => '#',
        'label' => 'Home'
        ],
        ['url' => '#', 'label' => 'Clothes'],
    ]"
    icon='<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 28 28" style="fill: #ffffff60;transform: ;msFilter:;"><path d="M3 13h1v7c0 1.103.897 2 2 2h12c1.103 0 2-.897 2-2v-7h1a1 1 0 0 0 .707-1.707l-9-9a.999.999 0 0 0-1.414 0l-9 9A1 1 0 0 0 3 13zm7 7v-5h4v5h-4zm2-15.586 6 6V15l.001 5H16v-5c0-1.103-.897-2-2-2h-4c-1.103 0-2 .897-2 2v5H6v-9.586l6-6z"></path></svg>'
    />

    <div class="sm:p-3 flex items-end justify-between">
        <x-title-component :title="'Available Clothes'" class="text-white w-50"/>
        <a href="#" class="inline-block shrink-0 w-auto text-white font-md hover:underline hover:italic">View Cart&#8594;</a>
    </div>

    <div class="sm:p-3 flex flex-wrap">
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            />
        </div>
    </div>

    {{-- Pagination --}}
    <x-pagination/>
</div>
@endsection