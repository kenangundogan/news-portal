@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Create Image') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('images.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" :action="route('images.store')" method="POST">
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="name" name="name" value="{{ old('name') }}" label="Name" />
                    <x-cms.base.input type="text" id="url" name="url" value="{{ old('url') }}" label="URL" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="create" id="create-image" name="create-image" title="Create Image" content="Create" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
