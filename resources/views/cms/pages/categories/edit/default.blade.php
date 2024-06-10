@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Update Category') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('categories.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" action="{{ route('categories.update', $category->id) }}" method="POST">
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="name" name="name" value="{{ $category->name }}" label="Name" />
                    <x-cms.base.input type="text" id="slug" name="slug" value="{{ $category->slug }}" label="Slug" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="update" id="update-category" name="update-category" title="Update Category" content="Update" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
