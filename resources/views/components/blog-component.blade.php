<div class="shrink-0 w-full sm:w-3/4 md:w-80 h-96 p-3 rounded-md bg-pre-extra-green bg-opacity-70 backdrop-blur snap-start">
    <div class="w-full flex items-end justify-between">
        <div>
            @foreach ($categories as $category)
            <span class="inline-block py-0 px-2 text-sm text-slate-300 rounded-full bg-pre-dark-green bg-opacity-50 border border-white border-opacity-10 hover:bg-opacity-80 hover:text-white">
                <a href="#">
                    {{ $category }}
                </a>
            </span>
            @endforeach
        </div>
        <div class="text-sm text-pre-yellow opacity-50">
            {{ $date }}
        </div>
    </div>
    <a href="#" class="w-full hover:underline text-slate-300">
        <div class="w-full h-1/2 my-2 overflow-hidden rounded-lg ">
            <img src="{{ asset($image) }}" alt="blog" class="w-full h-full object-center object-cover">
        </div>
        <div class="w-full max-h-32 overflow-hidden">
            <h3 class="text-lg font-bold">
                {{ $title }}
            </h3>
            <p class="w-full h-8 truncate">
               {{ $contents }}
            </p>
        </div>
    </a>
    <div class="w-full h-8 flex items-end justify-between">
        <a href="#" class="text-sm text-pre-yellow opacity-80 hover:opacity-90 hover:underline">
            {{ $comments }} comments >
        </a>

        <x-like-button :count="$likes"/>

    </div>
</div>