@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Content') }}</x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.link href="{{ route('categories.index') }}" content="{{ __('Categories') }}"/>
            <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('News') }}"/>
        </x-slot>
    </x-cms.box>
@endsection
