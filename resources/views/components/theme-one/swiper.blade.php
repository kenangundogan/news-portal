<div data-name="swiper" class="swiper slider-custom {{$class ?? ''}}" data-swiper="{{$dataSwiper ?? ''}}">
    <div class="swiper-wrapper">
        {{ $slot }}
    </div>
    <div class="w-full px-4 flex justify-between">
        @isset($pagination)
            @if ($pagination == "true")
                <x-theme-one.swiper.pagination/>
            @endif
        @endisset
        @isset($navigation)
            @if ($navigation == "true")
                <x-theme-one.swiper.navigation/>
            @endif
        @endisset
        @isset($scrollbar)
            @if ($scrollbar == "true")
                <x-theme-one.swiper.scrollbar/>
            @endif
        @endisset
    </div>
</div>

