{{-- Clothes --}}
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="clothes">

    <div class="sm:p-3 flex items-end justify-between">
        <x-title-component :title="'Latest Available Clothes'" class="text-white w-50"/>
        <a href="#" class="inline-block shrink-0 w-20 text-white font-md hover:underline hover:italic">View All&#8594;</a>
    </div>

    <div class="sm:p-3 flex gap-4 sm:gap-6 flex-nowrap overflow-x-scroll snap-x">
        <x-suit-clothes 
            :image="'images/fe-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
        <x-suit-clothes 
            :image="'images/fe-2.png'"
            :name="'Gym wear Two'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
        <x-suit-clothes 
            :image="'images/fe-3.png'"
            :name="'Gym wear Three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
        <x-suit-clothes 
            :image="'images/m-1.png'"
            :name="'Gym wear man one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
        <x-suit-clothes 
            :image="'images/m-2.png'"
            :name="'Gym wear man two'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
        <x-suit-clothes 
            :image="'images/m-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :colors="['black', 'white', 'gray']"
            :sizes="'M / L / XL / 2XL'"
            class="w-3/4 sm:w-2/5 md:w-1/5 "
        />
    </div>

</div>

{{-- Items --}}
<div class="w-100 h-auto py-12 px-5 sm:px-8 bg-pre-extra-green" id="items">

    <div class="sm:p-3 flex items-end justify-between">
        <x-title-component :title="'Latest Available Items'" class="text-white w-50"/>
        <a href="#" class="inline-block shrink-0 w-20 text-white font-md hover:underline hover:italic">View All&#8594;</a>
    </div>

    <div class="sm:p-3 flex gap-4 sm:gap-6 flex-nowrap overflow-x-scroll snap-x">
        <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white']"
        />
        <x-items-component 
            :image="'images/item-2.png'"
            :name="'Gym wear Two'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white', 'gray']"
            class=" w-3/4 sm:w-2/5 md:w-1/5"
        />
        <x-items-component 
            :image="'images/item-3.png'"
            :name="'Gym wear Three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white', 'gray']"
            class=" w-3/4 sm:w-2/5 md:w-1/5"
        />
        <x-items-component 
            :image="'images/item-1.png'"
            :name="'Gym wear man one'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white', 'gray']"
            class=" w-3/4 sm:w-2/5 md:w-1/5"
        />
        <x-items-component 
            :image="'images/item-2.png'"
            :name="'Gym wear man two'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white', 'gray']"
            class=" w-3/4 sm:w-2/5 md:w-1/5"
        />
        <x-items-component 
            :image="'images/item-3.png'"
            :name="'Gym wear man three'"
            :price="'100'"
            :code="'#gwo-30'"
            :type="'Female'"
            :weight="'5'"
            :colors="['black', 'white', 'gray']"
            class=" w-3/4 sm:w-2/5 md:w-1/5"
        />
    </div>

</div>