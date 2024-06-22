<div {{ $attributes->merge(['class' => 'p-3 bg-pre-dark-green']) }}>
    <div class="sm:w-4/12">
        <img src="{{ asset($image) }}" alt="promotion" class="size-44 rounded-md -mt-12 object-cover mx-auto shadow-3xl border border-pre-yellow sm:h-60 md:h-80 md:w-64 bs-img">
    </div>
    <div class="p-2 md-p-0 sm:w-8/12 bs-content">
        <h3 class="text-3xl font-bold text-white mt-3">
            {{ $title }}
        </h3>
        <p class="text-white text-center mt-5 md:text-start md:w-3/4">
            {{ $content }}
        </p>
        <a href={{ $link }} class="inline-block py-2 px-4 mt-3 rounded-md bg-pre-yellow">
            Shop Now
        </a>
    </div>
</div>