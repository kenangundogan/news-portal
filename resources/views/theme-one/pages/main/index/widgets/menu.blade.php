<div class="px-2 md:px-8 bg-white">
    <x-swiper class="w-full"
        data-swiper='{
        "slidesPerView": "auto",
        "loop": true,
        "freeMode": true
    }'>
        @foreach ($categories as $category)
            <x-swiper.item class="w-auto">
                <a href="/news/category/{{ $category->slug }}" class="block p-4 bg-white hover:bg-yellow-300">{{ $category->name }}</a>
            </x-swiper.item>
        @endforeach
    </x-swiper>
</div>
