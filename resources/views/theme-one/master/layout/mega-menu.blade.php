<div data-name="mega-menu-modal" class="fixed z-40 top-20 left-0 w-full h-[calc(100vh-80px)] bg-white/95 p-12 flex items-center !hidden">
    <div class="w-full h-full overflow-hidden">
        <x-theme-one.swiper class="w-full h-full"
        data-swiper='{
        "slidesPerView": "auto",
        "freeMode": true,
        "direction": "vertical",
        "touchReleaseOnEdges":true,
        "mousewheel": {
            "sensitivity":0.5,
            "releaseOnEdges":true
        }
    }'>
        @foreach ($categories as $category)
            <x-theme-one.swiper.item class="w-full h-auto">
                <a href="/news/category/{{ $category->slug }}" class="block py-2 text-4xl md:text-7xl font-bold hover:text-red-500">
                    <span class="border-b border-black">{{ $category->name }}</span>
                </a>
            </x-theme-one.swiper.item>
        @endforeach
    </x-theme-one.swiper>
    </div>
</div>

