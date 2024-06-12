@extends('theme-one.master.default')

@section('content')
    @include('theme-one.pages.main.index.widgets.menu', ['categoryName' => $categoryName ?? ''])
    <div class="md:px-6">
        @if($news->count() > 0)
            @include('theme-one.pages.main.index.widgets.news', ['news' => $news])
        @else
            @include('theme-one.pages.main.index.widgets.empty')
        @endif
    </div>
@endsection
