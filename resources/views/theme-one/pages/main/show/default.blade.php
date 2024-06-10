@extends('theme-one.master.default')

@section('title', 'Show')

@section('content')
<div class="bg-white pb-60">

    <div class="relative overflow-hidden h-[calc(100vh-214px)] md:h-[calc(100vh-80px)] mb-4 md:mb-10 before:content-[''] before:absolute before:z-10 before:w-full before:h-full before:bg-gradient-to-t before:from-black/60">
        <div class="absolute z-20 left-0 right-0 m-auto bottom-4 md:bottom-10 max-w-3xl text-center p-4 overflow-hidden break-words">
            <div class="inline-block text-sm mb-2 text-white bg-[#E32C32] py-2 px-4 rounded-full">{{ $news->category->name }}</div>
            <div class="text-3xl md:text-6xl font-bold mb-2 text-white">{{ $news->title }}</div>
            <div class="text-md md:text-xl text-white mb-2">{{ $news->description }}</div>
            <div class="text-sm text-gray-300">{{ $news->updated_at->format('d/m/Y') }}</div>
        </div>
        <x-swiper class="w-full h-full mb-10"
            data-swiper='{
                "centeredSlides": true,
                "autoplay": { "delay": 2500, "disableOnInteraction": false }
            }'>
            <x-swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url({{ Vite::asset('resources/images/16x9/' . $news->image->name . '.jpg') }})"/>
        </x-swiper>
    </div>

    <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
        <p class="block mb-4">{!! $news->content !!}</p>
    </div>

    <div class="relative overflow-hidden mb-10">
        <div class="h-[500px] bg-fixed bg-center bg-cover before:content-[''] before:absolute before:w-full before:h-full before:bg-black/30" style="background-image: url('{{ Vite::asset('resources/images/16x9/' . $news->image->name . '.jpg') }}')">
            <div class="relative z-10 h-full flex items-center justify-center max-w-3xl m-auto">
                <span class="p-5 text-4xl text-center text-white">
                    {{ $news->title }}
                </span>
            </div>
        </div>
    </div>

    <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
        <p class="block mb-4">{!! $news->content !!}</p>
    </div>

    @include('theme-one.pages.main.show.widgets.related-news', ['news' => $news])

    @include('theme-one.pages.main.show.widgets.share')

</div>
@endsection
