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
                <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
                    <span>{{ __('Total News') }}</span>
                    <span class="font-bold">{{ $news->count() }}</span>
                </div>
                <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                    @foreach ($news as $item)
                        @if ($loop->iteration > 5)
                            @break
                        @endif
                        <li>
                            <a href="{{ route('news.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div class="flex gap-4">
                                    <img src="{{ asset('images/1x1/'.$item->image->image) }}" alt="{{ $item->title }}" class="w-20 h-20"/>
                                    <div>
                                        <div class="font-bold">{{ $item->title }}</div>
                                        <div>{{ $item->description }}</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
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
                <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
                    <span>{{ __('Total Categories') }}</span>
                    <span class="font-bold">{{ $news->count() }}</span>
                </div>
                <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                    @foreach ($categories as $item)
                        @if ($loop->iteration > 5)
                            @break
                        @endif
                        <li>
                            <a href="{{ route('categories.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div>{{ $item->name }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
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
                <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
                    <span>{{ __('Total Images') }}</span>
                    <span class="font-bold">{{ $images->count() }}</span>
                </div>
                <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                    @foreach ($images as $item)
                        @if ($loop->iteration > 5)
                            @break
                        @endif
                        <li>
                            <a href="{{ route('images.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <img src="{{ asset('images/1x1/'.$item->image) }}" alt="{{ $item->name }}" class="w-20 h-20"/>
                                <div>{{ $item->name }}</div>
                            </a>
                        </li>
                    @endforeach
                </ul>
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
                <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
                    <span>{{ __('Total Users') }}</span>
                    <span class="font-bold">{{ $users->count() }}</span>
                </div>
                <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
                    @foreach ($users as $item)
                        @if ($loop->iteration > 5)
                            @break
                        @endif
                        <li>
                            <a href="{{ route('users.edit', $item->id) }}" class="flex gap-4 text-sm">
                                <div class="font-bold">{{ $item->id }}</div>
                                <div class="flex gap-4">
                                    <img src="{{ asset('images/avatar/'.$item->image) }}" alt="{{ $item->name }}" class="w-20 h-20"/>
                                    <div>
                                        <div>{{ $item->name }}</div>
                                        <div>{{ $item->surname }}</div>
                                        <div class="font-bold">{{ $item->email }}</div>
                                        <div>{{ $item->city }}</div>
                                        <div>{{ $item->country }}</div>
                                    </div>
                                </div>
                            </a>
                        </li>
                    @endforeach
                </ul>
                <x-cms.base.link href="{{ route('users.index') }}" content="{{ __('View All') }}"/>
            </x-slot>
        </x-cms.box>
    </div>
</div>
@endsection
