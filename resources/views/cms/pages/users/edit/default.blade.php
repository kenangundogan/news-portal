@extends('cms.master.default')

@section('content')

    <div class="w-full flex flex-wrap">
        <div class="w-1/2">
            <x-cms.box>
                <x-slot name="head">
                    <x-cms.box.head>
                        <x-slot name="title">{{ __('Edit User') }}</x-slot>
                    </x-cms.box.head>
                </x-slot>
                <x-slot name="body">
                    <x-cms.base.form id="form-user" name="form-user" method="POST" action="/cms/users/{{ $user->id }}" enctype="multipart/form-data">
                        @method('PUT')
                        <div class="grid md:grid-cols-1 gap-4">
                            <x-cms.base.input id="name" name="name" label="Name" placeholder="Url Name" value="{{ $user->name }}" />
                            <x-cms.base.input id="surname" name="surname" label="Surname" placeholder="surname" value="{{ $user->surname }}" />
                            <x-cms.base.input id="email" name="email" label="Email" placeholder="email" value="{{ $user->email }}" />
                            <x-cms.base.input id="phone" name="phone" label="Phone" placeholder="phone" value="{{ $user->phone }}" />
                            <x-cms.base.input id="city" name="city" label="City" placeholder="city" value="{{ $user->city }}" />
                            <x-cms.base.input id="country" name="country" label="Country" placeholder="country" value="{{ $user->country }}" />
                            <x-cms.base.input type="file" id="image" name="image" label="Image" placeholder="Image" />
                            @if($user->image)
                                <img src="{{ asset('/images/avatar/'.$user->image) }}" class="w-20 h-20 rounded-full">
                            @endif
                            <x-cms.base.button id="btn-user" type="submit" name="" mission="update" content="{{ __('UPDATE') }}"/>
                        </div>
                    </x-cms.base.form>
                </x-slot>
            </x-cms.box>
        </div>

        <div class="w-1/2">
            <x-cms.box>
                <x-slot name="head">
                    <x-cms.box.head>
                        <x-slot name="title">{{ __('Edit User Password') }}</x-slot>
                    </x-cms.box.head>
                </x-slot>
                <x-slot name="body">
                    <x-cms.base.form id="form-password" name="form-password" method="POST" action="/cms/users/{{ $user->id }}/updatepassword">
                        @method('PUT')
                        <div class="grid md:grid-cols-1 gap-4">
                            <x-cms.base.input id="password" name="password" label="Password" placeholder="password" value="" maxlength="8" type="password"/>
                            <x-cms.base.input id="password_confirmation" name="password_confirmation" label="Password Confirmation" placeholder="password_confirmation" value="" maxlength="8" type="password"/>
                            <x-cms.base.button id="btn-password" type="submit" name="" mission="update" content="{{ __('UPDATE') }}"/>
                        </div>
                    </x-cms.base.form>
                </x-slot>
            </x-cms.box>
        </div>
    </div>
@endsection
