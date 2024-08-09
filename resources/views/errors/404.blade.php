@extends('theme-one.master.default')

@section('title', 'News Portal')
@section('description', '404 Page Not Found')
@section('image', '')
@section('main-class', 'bg-gray-50 pb-20')

@section('content')
    @include('theme-one.pages.index.widgets.menu', ['categoryName' => $categoryName ?? ''])
    <x-theme-one.box class="w-full" href="/">
        <x-theme-one.box.body class="py-10">
            <div class="text-center text-4xl font-bold text-gray-500">404 Page Not Found</div>
            <div class="text-center text-xl text-gray-500">Please check back later</div>
            <div class="text-center text-lg text-gray-500">Or try another category</div>
            <div class="text-center text-lg text-red-500 hover:text-red-700"><a href="{{ route('home') }}">Back to news</a></div>
        </x-theme-one.box.body>
    </x-theme-one.box>
@endsection
