@extends('theme-one.master.default')

@section('title', $news->title)
@section('description', $news->description)
@section('image', asset($news->image_url))
@section('main-class', 'bg-white')
@section('content')
    <div>

        <div class="relative overflow-hidden h-[calc(100vh-214px)] md:h-[calc(100vh-80px)] mb-4 md:mb-10 before:content-[''] before:absolute before:z-10 before:w-full before:h-full before:bg-gradient-to-t before:from-black/60">
            <div class="absolute z-20 left-0 right-0 m-auto bottom-4 md:bottom-10 max-w-3xl text-center p-4 overflow-hidden break-words">
                <a href="/news/category/{{ $news->category->slug }}" class="inline-block text-sm mb-2 text-white bg-[#E32C32] py-2 px-4 rounded-full transition-all hover:scale-75">{{ $news->category->name }}</a>
                <div class="text-3xl md:text-6xl font-bold mb-2 text-white font-sans">{{ $news->title }}</div>
                <div class="text-md md:text-xl text-white mb-2">{{ $news->description }}</div>
                <div class="text-sm text-gray-300">{{ $news->updated_at->format('d/m/Y - H:i') }}</div>
            </div>
            <x-theme-one.swiper class="w-full h-full mb-10"
                data-swiper='{
                    "centeredSlides": true,
                    "autoplay": { "delay": 2500, "disableOnInteraction": false }
                }'>
                <x-theme-one.swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url('{{ asset($news->image_url) }}')"/>
            </x-theme-one.swiper>
        </div>

        <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
            {!! $news->content !!}
        </div>

        <div class="relative overflow-hidden mb-10">
            <div class="h-[500px] bg-fixed bg-center bg-cover before:content-[''] before:absolute before:w-full before:h-full before:bg-black/30" style="background-image: url('{{ asset($news->image_url) }}')">
                <div class="relative z-10 h-full flex items-center justify-center max-w-3xl m-auto">
                    <span class="p-5 text-4xl text-center text-white font-handwriting">
                        {{ $news->title }}
                    </span>
                </div>
            </div>
        </div>

        <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
            {!! $news->content !!}
        </div>

        @include('theme-one.pages.show.widgets.share', ['news' => $news])

        @include('theme-one.pages.show.widgets.related-news', ['news' => $news])

    </div>
@endsection
