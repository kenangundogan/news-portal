@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Add New User') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="/cms/users" content="{{ __('LIST') }}"  mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" action="/cms/users" method="POST" enctype="multipart/form-data">
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input id="name" name="name" label="Name" value="{{ old('name') }}" placeholder="Name" />
                    <x-cms.base.input id="email" name="email" label="email" value="{{ old('email') }}" placeholder="email" />
                    <x-cms.base.input id="phone" name="phone" label="phone" value="{{ old('phone') }}" placeholder="phone" />
                    <x-cms.base.input id="city" name="city" label="city" value="{{ old('city') }}" placeholder="city" />
                    <x-cms.base.input id="country" name="country" label="country" value="{{ old('country') }}" placeholder="country" />
                    <x-cms.base.input type="file" id="image" name="image" label="image" value="{{ old('image') }}" placeholder="image" />
                    <x-cms.base.input id="password" name="password" label="password" type="password" value="{{ old('password') }}" placeholder="******" />
                    <x-cms.base.input id="password_confirmation" name="password_confirmation" label="password_confirmation" type="password" value="{{ old('password_confirmation') }}" placeholder="******" />
                    <x-cms.base.button id="" type="submit" name="" mission="add" content="{{ __('ADD') }}"/>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
