@php
    $menus = [
        [
            'name' => 'Tümü',
            'url' => '/tumu',
        ],
        [
            'name' => 'Gündem',
            'url' => '/gundem',
        ],
        [
            'name' => 'Dünya',
            'url' => '/dunya',
        ],
        [
            'name' => 'Siyaset',
            'url' => '/siyaset',
        ],
        [
            'name' => 'Yaşam',
            'url' => '/yasam',
        ],
        [
            'name' => 'Sanat',
            'url' => '/sanat',
        ],
        [
            'name' => 'Kültür Sanat',
            'url' => '/kultur-sanat',
        ],
        [
            'name' => 'Ekonomi',
            'url' => '/ekonomi',
        ],
        [
            'name' => 'Finans',
            'url' => '/finans',
        ],
        [
            'name' => 'Spor',
            'url' => '/spor',
        ],
        [
            'name' => 'Magazin',
            'url' => '/magazin',
        ],
        [
            'name' => 'Astroloji',
            'url' => '/astroloji',
        ],
        [
            'name' => 'Teknoloji',
            'url' => '/teknoloji',
        ],
        [
            'name' => 'Bilim',
            'url' => '/bilim',
        ],
        [
            'name' => 'Eğitim',
            'url' => '/egitim',
        ],
        [
            'name' => 'Sağlık',
            'url' => '/saglik',
        ],

    ];
@endphp

<div data-name="mega-menu-modal" class="fixed z-40 top-20 left-0 w-full h-[calc(100vh-80px)] bg-white/95 p-12 flex items-center !hidden">
    <div class="h-full overflow-hidden">
        <x-swiper class="w-full h-full"
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
        @foreach ($menus as $menu)
            <x-swiper.item class="w-auto h-auto">
                <a href="{{ $menu['url'] }}" class="inline-block py-2 text-4xl md:text-7xl border-b border-black font-bold hover:text-red-500">{{ $menu['name'] }}</a>
            </x-swiper.item>
        @endforeach
    </x-swiper>
    </div>
</div>

