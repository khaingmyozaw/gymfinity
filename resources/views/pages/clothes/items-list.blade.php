@extends('layouts.product-list')
@section('products')
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="clothes">

    <div class="sm:p-3 flex items-end justify-between">
        <x-title-component 
        :title="'Available Items'" 
        class="text-white w-50"
        />
        <a href="#" class="inline-block shrink-0 w-auto text-white font-md hover:underline hover:italic">View Cart&#8594;</a>
    </div>

    <div class="sm:p-3 flex flex-wrap">
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
        <div class="mx-auto sm:mx-0 p-1 w-4/5 sm:w-2/5 md:w-1/5">
            <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
            class=""
            />
        </div>
    </div>

</div>
@endsection