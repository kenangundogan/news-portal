<div data-name="swiper" class="swiper slider-custom {{$class ?? ''}}" data-swiper="{{$dataSwiper ?? ''}}">
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>
    <div class="w-full px-4 flex justify-between">
        @isset($pagination)
            @if ($pagination == "true")
                <x-swiper.pagination/>
            @endif
        @endisset
        @isset($navigation)
            @if ($navigation == "true")
                <x-swiper.navigation/>
            @endif
        @endisset
        @isset($scrollbar)
            @if ($scrollbar == "true")
                <x-swiper.scrollbar/>
            @endif
        @endisset
    </div>
</div>

{{-- sample
<x-swiper class="" navigation=true pagination=true
    data-swiper='{
        "slidesPerView": "auto",
        "spaceBetween": 20,
        "navigation": { "nextEl": ".swiper-button-next", "prevEl": ".swiper-button-prev"},
        "pagination": { "el": ".swiper-pagination"}
    }'>
    <x-swiper.item class=""></x-swiper.item>
</x-swiper>
--}}

