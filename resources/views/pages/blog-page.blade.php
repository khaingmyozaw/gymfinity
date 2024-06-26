<div class="w-full h-auto py-12 px-5 sm:px-8 bg-pre-dark-green ">
    <x-title-component :title="'Latest News and Blogs'" class="text-center text-white py-4"/>
    <div class="py-3 flex gap-4 items-center justify-center sm:gap-6 flex-wrap md:flex-nowrap overflow-hidden sm:overflow-x-scroll snap-x">
        <x-blog-component 
            :categories="['Diet', 'Health']"
            :date="'25 May 2024'"
            :image="'images/blog-1.jpg'"
            :title="'Is real not to eat for weight looser?'"
            :contents="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sed quasi soluta? Consequatur nihil excepturi amet ipsa magnam, molestiae doloribus! Explicabo, reprehenderit error. Distinctio impedit voluptatem dolore sit adipisci sequi?'"
            :comments="'10'"
            :likes="'100'"
        />
        <x-blog-component 
            :categories="['Exercise', 'Health']"
            :date="'25 May 2024'"
            :image="'images/blog-2.jpg'"
            :title="'Is real not to eat for weight looser?'"
            :contents="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sed quasi soluta? Consequatur nihil excepturi amet ipsa magnam, molestiae doloribus! Explicabo, reprehenderit error. Distinctio impedit voluptatem dolore sit adipisci sequi?'"
            :comments="'10'"
            :likes="'100'"
        />
        <x-blog-component 
            :categories="['Diet', 'Exercise']"
            :date="'25 May 2024'"
            :image="'images/blog-1.jpg'"
            :title="'Is real not to eat for weight looser?'"
            :contents="'Lorem ipsum dolor sit amet consectetur adipisicing elit. Aut sed quasi soluta? Consequatur nihil excepturi amet ipsa magnam, molestiae doloribus! Explicabo, reprehenderit error. Distinctio impedit voluptatem dolore sit adipisci sequi?'"
            :comments="'10'"
            :likes="'100'"
        />
    </div>
</div>