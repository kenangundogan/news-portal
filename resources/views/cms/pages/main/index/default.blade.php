@extends('cms.master.default')

@section('content')
<div class="md:px-6">
    <div class="magicGrid relative z-30 w-full flex flex-wrap">
        @include('cms.pages.main.index.widgets.news')
        @include('cms.pages.main.index.widgets.categories')
        @include('cms.pages.main.index.widgets.images')
        @include('cms.pages.main.index.widgets.users')
    </div>
</div>
@endsection
