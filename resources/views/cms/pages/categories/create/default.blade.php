@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Create Category') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('categories.index') }}" content="{{ __('List') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" :action="route('categories.store')" method="POST">
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="name" name="name" value="{{ old('name') }}" label="Name" />
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="create" id="create-category" name="create-category" title="Create Category" content="Create" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
