<div class="shrink-0 w-full sm:w-3/4 md:w-80 h-96 p-3 rounded-md bg-pre-extra-green bg-opacity-70 backdrop-blur snap-start">
    <div class="w-full flex items-end justify-between">
        <div>
            @foreach ($categories as $category)
            <span class="inline-block py-0 px-2 text-sm text-slate-300 rounded-full bg-pre-dark-green bg-opacity-50 border border-white border-opacity-10">
                {{ $category }}
            </span>
            @endforeach
        </div>
        <div class="text-sm text-pre-yellow opacity-50">
            {{ $date }}
        </div>
    </div>
    <div class="w-full h-1/2 my-2 overflow-hidden rounded-lg ">
        <img src="{{ asset($image) }}" alt="blog" class="w-full h-full object-center object-cover">
    </div>
    <div class="w-full max-h-32 overflow-hidden">
        <a href="#" class="w-full text-white hover:underline">
            <h3 class="text-lg font-bold">
                {{ $title }}
            </h3>
        </a>
        <a href="#" class="w-full hover:underline text-slate-300">
            <p class="w-full h-8 truncate">
               {{ $contents }}
            </p>
        </a>
    </div>
    <div class="w-full h-8 flex items-end justify-between">
        <a href="#" class="text-sm text-pre-yellow opacity-80 hover:opacity-90 hover:underline">
            {{ $comments }} comments >
        </a>

        <div class="flex items-end">
            <span class="inline-block me-1 text-sm text-pre-yellow opacity-80">
                {{ $likes }}
            </span>
            <button class="p-2 text-sm text-pre-yellow opacity-80 rounded-full hover:bg-white hover:bg-opacity-20 hover:opacity-100 transition translate-y-2">
                <span class="sr-only">Like the post.</span>

                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" style="fill:#e9fd9e;transform: ;msFilter:;"><path d="M20 8h-5.612l1.123-3.367c.202-.608.1-1.282-.275-1.802S14.253 2 13.612 2H12c-.297 0-.578.132-.769.36L6.531 8H4c-1.103 0-2 .897-2 2v9c0 1.103.897 2 2 2h13.307a2.01 2.01 0 0 0 1.873-1.298l2.757-7.351A1 1 0 0 0 22 12v-2c0-1.103-.897-2-2-2zM4 10h2v9H4v-9zm16 1.819L17.307 19H8V9.362L12.468 4h1.146l-1.562 4.683A.998.998 0 0 0 13 10h7v1.819z"></path></svg>
            </button>
        </div>
    </div>
</div>