@extends('theme-one.master.default')

@section('content')
    <div class="md:px-8">
        @include('theme-one.pages.main.index.widgets.menu', ['categories' => $categories])
        @include('theme-one.pages.main.index.widgets.news', ['news' => $news])
    </div>
@endsection
