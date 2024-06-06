@php
    $category = fake()->text(14);
    $title = fake()->text(60);
    $description = fake()->text(160);
    $date = fake()->date('Y-m-d-H:i:s');
@endphp

@extends('theme-one.master.default')

@section('title', 'Show')

@section('content')
<div class="bg-white">

    <div class="relative overflow-hidden h-[calc(100vh-214px)] md:h-[calc(100vh-80px)] mb-4 md:mb-10 before:content-[''] before:absolute before:z-10 before:w-full before:h-full before:bg-gradient-to-t before:from-black/60">
        <div class="absolute z-20 left-0 right-0 m-auto bottom-4 md:bottom-10 max-w-3xl text-center p-4 overflow-hidden break-words">
            <div class="inline-block text-sm mb-2 text-white bg-[#E32C32] py-2 px-4 rounded-full">{{ $category }}</div>
            <div class="text-3xl md:text-6xl font-bold mb-2 text-white">{{ $title }}</div>
            <div class="text-md md:text-xl text-white mb-2">{{ $description }}</div>
            <div class="text-sm text-gray-300">{{ $date }}</div>
        </div>
        <x-swiper class="w-full h-full mb-10"
            data-swiper='{
                "centeredSlides": true,
                "autoplay": { "delay": 2500, "disableOnInteraction": false }
            }'>
            <x-swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url({{ Vite::asset('resources/images/16x9/101.jpg') }})"/>
            <x-swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url({{ Vite::asset('resources/images/16x9/102.jpg') }})"/>
            <x-swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url({{ Vite::asset('resources/images/16x9/103.jpg') }})"/>
            <x-swiper.item class="bg-cover bg-top bg-fixed" style="background-image: url({{ Vite::asset('resources/images/16x9/104.jpg') }})"/>
        </x-swiper>
    </div>

    <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
    </div>

    <div class="relative overflow-hidden mb-10">
        <div class="h-[500px] bg-fixed bg-center bg-cover before:content-[''] before:absolute before:w-full before:h-full before:bg-black/30" style="background-image: url('{{ Vite::asset('resources/images/16x9/105.jpg') }}')">
            <div class="relative z-10 h-full flex items-center justify-center max-w-3xl m-auto">
                <span class="p-5 text-4xl text-center text-white">
                    {{ $title }}
                </span>
            </div>
        </div>
    </div>

    <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
    </div>

    <div class="max-w-3xl m-auto mb-10 px-4 pb-4">
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
        <p class="block mb-4">{{ fake()->text(400) }}</p>
        <p class="block mb-4">{{ fake()->text(300) }}</p>
        <p class="block mb-4">{{ fake()->text(600) }}</p>
    </div>

    <div data-name="related-news" class="relative bottom-0 left-0 z-50 overflow-hidden w-full px-4 md:px-12">
        <div class="relative overflow-hidden bg-white">
            <div class="relative z-20 p-4 text-xl text-center font-bold border-t"> İLGİLİ İÇERİKLER </div>
            <x-swiper class="relative z-20 border-t"
            data-swiper='{
                "slidesPerView": "auto",
                "autoplay": { "delay": 1500, "disableOnInteraction": false }
            }'>
            @for ($i = 0; $i < 100; $i++)
                @php
                    $randomImage = ["101.jpg", "201.jpg", "102.jpg", "202.jpg", "103.jpg", "203.jpg", "104.jpg", "204.jpg", "105.jpg", "205.jpg", "106.jpg", "206.jpg"];
                    $randomImage = $randomImage[array_rand($randomImage)];
                @endphp
                <x-swiper.item class="w-auto">
                    <a href="#" class="flex items-center h-32 p-4 overflow-hidden gap-4">
                        <div class="aspect-square w-24 h-24 overflow-hidden">
                            <img class="transition duration-500 ease-in-out hover:scale-125 hover:rotate-6" src="{{ Vite::asset('resources/images/1x1/'. $randomImage) }}" alt="">
                        </div>
                        <div class="w-40 overflow-hidden">
                            <div class="text-[12px] text-[#E32C32]">{{ fake()->text(14) }}</div>
                            <div class="text-sm">{{ fake()->text(60) }}</div>
                        </div>
                    </a>
                </x-swiper.item>
            @endfor
            </x-swiper>
            <div style="background-image: url('{{ Vite::asset('resources/images/bg/11.svg') }}')" class="absolute z-10 top-0 left-0 w-full h-full bg-cover bg-center opacity-10"></div>
        </div>
    </div>

    <div data-name="share">
        <div class="max-w-3xl m-auto px-4 py-10">
            <div class="text-center mb-4">Bu içeriği paylaş</div>
            <div class="flex justify-center gap-4">
                <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#3B5998] text-white rounded-full">
                    <i class="fab fa-facebook-f"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#55ACEE] text-white rounded-full">
                    <i class="fab fa-twitter"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#E4405F] text-white rounded-full">
                    <i class="fab fa-instagram"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#25D366] text-white rounded-full">
                    <i class="fab fa-whatsapp"></i>
                </a>
                <a href="#" class="w-10 h-10 flex items-center justify-center bg-[#0077B5] text-white rounded-full">
                    <i class="fab fa-linkedin-in"></i>
                </a>
            </div>
        </div>
    </div>

</div>
@endsection
