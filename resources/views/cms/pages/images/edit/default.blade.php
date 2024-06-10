@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Update Image') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('images.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" action="{{ route('images.update', $image->id) }}" method="POST">
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="name" name="name" value="{{ $image->name }}" label="Name" />
                    <x-cms.base.input type="text" id="url" name="url" value="{{ $image->url }}" label="URL" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="update" id="update-image" name="update-image" title="Update Image" content="Update" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
