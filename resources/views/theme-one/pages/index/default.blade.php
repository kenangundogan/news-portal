@extends('theme-one.master.default')

@section('title', 'News Portal')
@section('description', 'News Portal is a news portal website that provides the latest news from various categories such as technology, health, sports, and others.')
@section('image', '')
@section('main-class', 'bg-gray-50 pb-20')

@section('content')
    @include('theme-one.pages.index.widgets.menu', ['categoryName' => $categoryName ?? ''])
    <div class="md:px-6">
        @if($news->count() > 0)
            @include('theme-one.pages.index.widgets.news', ['news' => $news])
        @else
            @include('theme-one.pages.index.widgets.empty')
        @endif
    </div>
@endsection
