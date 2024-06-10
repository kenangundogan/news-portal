@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Content') }}</x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
        </x-slot>
    </x-cms.box>
@endsection
