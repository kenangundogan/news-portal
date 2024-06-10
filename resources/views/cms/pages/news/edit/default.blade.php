@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Update News') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" action="{{ route('news.update', $news->id) }}" method="POST">
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="title" name="title" value="{{ $news->title }}" label="Title" />
                    <x-cms.base.input type="text" id="description" name="description" value="{{ $news->description }}" label="Description" />
                    <x-cms.base.textarea type="text" id="content" name="content" value="{{ $news->content }}" label="Content" class="min-h-72" classWrapper="col-start-1 col-end-3" />
                    <x-cms.base.select id="image_id" name="image_id" label="Images" :options="$images" :selected="$news->image_id" />
                    <x-cms.base.select id="category_id" name="category_id" label="Category" :options="$categories" :selected="$news->category_id" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="update" id="update-news" name="update-news" title="Update News" content="Update" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
