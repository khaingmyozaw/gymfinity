<div class="w-full h-96 py-16 bg-pre-dark-green relative">
    {{-- item 1 --}}
    <x-best-seller 
    :image="'images/man.jpeg'" 
    :title="'The Best Wear of the Week'" 
    :content="'Stay ahead of the game with our latest additions. Check out our new arrivals section to find the freshest styles in gym wear, designed to keep you motivated and looking great.'"
    :link="'#'"
    class="sm:flex active"
    />
    {{-- item 2 --}}
    <x-best-seller 
    :image="'images/woman.jpeg'" 
    :title="'The Best Wear of the Week'" 
    :content="'Stay ahead of the game with our latest additions. Check out our new arrivals section to find the freshest styles in gym wear, designed to keep you motivated and looking great.'"
    :link="'#'"
    class="hidden"
    />
    {{-- item 3 --}}
    <x-best-seller 
    :image="'images/item.jpeg'" 
    :title="'The Best Item of the Week'" 
    :content="'Stay ahead of the game with our latest additions. Check out our new arrivals section to find the freshest styles in gym wear, designed to keep you motivated and looking great.'"
    :link="'#'"
    class="hidden"
    />
</div>