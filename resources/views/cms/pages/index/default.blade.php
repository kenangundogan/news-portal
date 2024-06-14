@extends('cms.master.default')

@section('content')
<div class="md:px-6">
    <div class="magicGrid relative z-30 w-full flex flex-wrap">
        <x-cms.box class="w-full md:w-6/12">
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('News - Top 5') }}</x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">
                @foreach ($news as $item)
                    <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                        <li>
                            <a href="{{ route('news.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div>{{ $item->title }}</div>
                            </a>
                        </li>
                    </ul>
                @endforeach
                <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('View All') }}"/>
            </x-slot>
        </x-cms.box>

        <x-cms.box class="w-full md:w-6/12">
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('Categories - Top 5') }}</x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">
                @foreach ($categories as $item)
                    <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                        <li>
                            <a href="{{ route('categories.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div>{{ $item->name }}</div>
                            </a>
                        </li>
                    </ul>
                @endforeach
                <x-cms.base.link href="{{ route('categories.index') }}" content="{{ __('View All') }}"/>
            </x-slot>
        </x-cms.box>

        <x-cms.box class="w-full md:w-6/12">
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('Images - Top 5') }}</x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">
                @foreach ($images as $item)
                    <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                        <li>
                            <a href="{{ route('images.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div>{{ $item->name }}</div>
                            </a>
                        </li>
                    </ul>
                @endforeach
                <x-cms.base.link href="{{ route('images.index') }}" content="{{ __('View All') }}"/>
            </x-slot>
        </x-cms.box>

        <x-cms.box class="w-full md:w-6/12">
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('Users - Top 5') }}</x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">
                @foreach ($users as $item)
                    <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                        <li>
                            <a href="{{ route('users.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div>{{ $item->name }}</div>
                            </a>
                        </li>
                    </ul>
                @endforeach
                <x-cms.base.link href="{{ route('users.index') }}" content="{{ __('View All') }}"/>
            </x-slot>
        </x-cms.box>
    </div>
</div>
@endsection
