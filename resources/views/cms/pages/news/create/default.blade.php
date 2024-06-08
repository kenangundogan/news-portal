@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Create News') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" :action="route('news.store')" method="POST">
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="title" name="title" value="{{ old('title') }}" label="Title" />
                    <x-cms.base.input type="text" id="description" name="description" value="{{ old('description') }}" label="description" />
                    <x-cms.base.textarea id="content" name="content" value="{{ old('content') }}" label="Content" />
                    <x-cms.base.select id="category_id" name="category_id" label="Category" :options="$categories" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="create" id="create-news" name="create-news" title="Create News" content="Create" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
