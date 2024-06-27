@if (!$relatedNews->isEmpty())
<div data-name="related-news" class="relative bottom-0 left-0 z-30 overflow-hidden w-full">
    <div class="relative overflow-hidden bg-white px-4 md:px-12">
        <div class="relative z-20 p-4 text-xl text-center font-bold border-t"> RELATED NEWS </div>
        <x-theme-one.swiper class="relative z-20 border-t"
            data-swiper='{
                "slidesPerView": "auto",
                "autoplay": { "delay": 1500, "disableOnInteraction": false }
            }'>
            @foreach ($relatedNews as $item)
                <x-theme-one.swiper.item class="w-auto group">
                    <a href="/news/{{ $item->id }}-{{ Str::slug($item->title)}}" title="{{ $item->title }}" class="flex items-center h-32 p-4 overflow-hidden gap-4">
                        <div class="aspect-square w-24 h-24 overflow-hidden">
                            <img class="transition duration-500 ease-in-out group-hover:scale-125 group-hover:rotate-6" src="{{ asset('images/1x1/'. $item->image->image) }}" alt="{{ $item->title }}">
                        </div>
                        <div class="w-40 overflow-hidden">
                            <div class="text-[12px] text-[#E32C32]">{{ $item->category->name }}</div>
                            <div class="text-sm">{{ $item->title }}</div>
                        </div>
                    </a>
                </x-theme-one.swiper.item>
            @endforeach
        </x-theme-one.swiper>
        <div style="background-image: url('{{ asset('images/bg/11.svg') }}')" class="absolute z-10 top-0 left-0 w-full h-full bg-cover bg-center opacity-10"></div>
    </div>
</div>
@endif
