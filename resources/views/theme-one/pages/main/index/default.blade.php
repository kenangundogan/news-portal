@extends('theme-one.master.default')

@section('content')
    @include('theme-one.pages.main.index.widgets.menu')
    <div class="md:px-6">
        @include('theme-one.pages.main.index.widgets.news', ['news' => $news])
    </div>
@endsection
