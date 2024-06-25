<div class="shrink-0 w-64 h-96 my-3 rounded-md overflow-hidden bg-pre-dark-green bg-opacity-70 backdrop-blur shadow-lg border border-slate-500">
    <div class="w-100 h-1/2 relative favorite">
        <img src="{{ asset($image) }}" alt="" class="w-full h-full object-contain object-center flex items-center justify-center">
        <button class="inline-block absolute top-1 right-1 p-1 rounded-full bg-slate-100 bg-opacity-20 hover:bg-opacity-30 transition like-btn">
            <span class="sr-only">Add to favorites.</span>
            {{-- Needing js --}}
            <svg class="unliked" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #e9fd9e80;transform: ;msFilter:;"><path d="M12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412l7.332 7.332c.17.299.498.492.875.492a.99.99 0 0 0 .792-.409l7.415-7.415c2.354-2.354 2.354-6.049-.002-8.416a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595zm6.791 1.61c1.563 1.571 1.564 4.025.002 5.588L12 18.586l-6.793-6.793c-1.562-1.563-1.561-4.017-.002-5.584.76-.756 1.754-1.172 2.799-1.172s2.035.416 2.789 1.17l.5.5a.999.999 0 0 0 1.414 0l.5-.5c1.512-1.509 4.074-1.505 5.584-.002z"></path></svg>

            <svg class="hidden liked" xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 24 24" style="fill: #e9fd9e;transform: ;msFilter:;"><path d="M20.205 4.791a5.938 5.938 0 0 0-4.209-1.754A5.906 5.906 0 0 0 12 4.595a5.904 5.904 0 0 0-3.996-1.558 5.942 5.942 0 0 0-4.213 1.758c-2.353 2.363-2.352 6.059.002 8.412L12 21.414l8.207-8.207c2.354-2.353 2.355-6.049-.002-8.416z"></path></svg>

        </button>
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
            <span class="me-4">
                {{ $type }}
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
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-black"></span>
                            @break
                        @case('white')
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-white"></span>
                            @break
                        @default  
                        <span class="inline-block w-4 h-4 mx-1 rounded-full bg-slate-700"></span>
                    @endswitch
                @endforeach 
            </div>
        </div>
        <div class="w-full flex items-center justify-between">
            <span class="text-xs text-slate-300">
                {{ $sizes }}
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