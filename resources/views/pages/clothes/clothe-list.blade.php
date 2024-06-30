@extends('layouts.product-list')
@section('products')
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="clothes">

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

</div>
@endsection