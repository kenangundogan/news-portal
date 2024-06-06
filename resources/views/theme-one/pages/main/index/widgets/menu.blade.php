@php
    $menus = [
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

<div class="px-4 pt-4">
    <x-swiper class="w-full"
        data-swiper='{
        "slidesPerView": "auto",
        "spaceBetween": 20,
        "loop": true,
        "freeMode": true
    }'>
        @foreach ($menus as $menu)
            <x-swiper.item class="w-auto">
                <a href="{{ $menu['url'] }}" class="block p-4 bg-white hover:bg-yellow-300">{{ $menu['name'] }}</a>
            </x-swiper.item>
        @endforeach
    </x-swiper>
</div>
