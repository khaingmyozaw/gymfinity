<div class="shrink-0 w-64 h-96 my-3 rounded-md overflow-hidden bg-pre-dark-green bg-opacity-70 backdrop-blur shadow-lg border border-slate-500">
    <div class="w-100 h-1/2">
        <img src="{{ asset($image) }}" alt="" class="w-full h-full object-contain object-center">
    </div>
    <hr class="opacity-20">
    <div class="w-100 h-1/2 p-2 relative">
        <h4 class="text-lg font-bold text-white">
            {{ $name }}
        </h4>
        <div class="flex items-center justify-between text-sm text-slate-300">
            <span>
                {{ $code }}
            </span>
        </div>
        <div class="py-3 flex items-center justify-between text-slate-300">
            <span class="text-pre-yellow">
                ${{ $price }}
            </span>
            <div class="flex">
                @foreach ($colors as $color)
                    @switch($color)
                        @case('black')
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-yellow-500"></span>
                            @break
                        @case('white')
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-red-500"></span>
                            @break
                        @default  
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-slate-800"></span>
                    @endswitch
                @endforeach 
            </div>
        </div>
        <div class="w-full flex items-center justify-between">
            <span class="text-xs text-white font-bold">
                {{ $weight }} kg
            </span>
            <a href="#" class="text-sm text-slate-300 hover:underline hover:italic">View Detail &#8594;</a>
        </div>
        <div class="w-full h-14 p-2 absolute bottom-0 inset-x-0">
            <button class="w-full h-full text-center text-slate-300 font-bold rounded-md bg-pre-extra-green bg-opacity-30 transition hover:text-white hover:bg-pre-yellow hover:bg-opacity-10 hover:shadow-md">
                Add to Card
            </button>
        </div>
    </div   >
</div>