<div {{ $attributes->merge(['class' => 'w-full h-90 p-3 bg-pre-extra-green relative bs-item']) }}>
    <div class="sm:w-4/12">
        <img src="{{ asset($image) }}" alt="promotion" class="size-44 rounded-md -mt-12 object-cover mx-auto shadow-3xl border border-pre-extra-gree sm:h-60 md:h-72 md:w-64 bs-img">
    </div>
    <div class="p-2 md-p-0 sm:w-8/12 bs-content flex sm:block flex-col items-centera">
        <x-title-component title="{{ $title }}" class="text-white"/>
        <p class="text-white text-center mt-5 md:text-start md:w-3/4">
            {{ $content }}
        </p>
        <a href={{ $link }} class="inline-block py-2 px-4 mt-3 rounded-md bg-pre-yellow">
            Shop Now
        </a>
    </div>
</div>

{{-- Contains some css and js --}}