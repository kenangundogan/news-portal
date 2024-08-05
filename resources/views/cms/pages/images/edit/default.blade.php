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
            <x-cms.base.form id="form" name="form" action="{{ route('images.update', $image->id) }}" method="POST" enctype="multipart/form-data">
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-4">
                    <x-cms.base.input type="text" id="name" name="name" value="{{ $image->name }}" label="Name" />
                    <div class="flex items-end">
                        <x-cms.base.input type="file" id="image1x1" name="image1x1" label="image 1x1" />
                        @if($image->image1x1)
                            <div class="max-w-16 aspect-1x1 flex-none relative overflow-hidden bg-gray-50">
                                <img src="{{ asset('/images/1x1/'.$image->image1x1) }}">
                            </div>
                        @endif
                    </div>
                    <div class="flex items-end">
                        <x-cms.base.input type="file" id="image1x2" name="image1x2" label="image 1x2" />
                        @if($image->image1x2)
                            <div class="max-w-8 aspect-1x1 flex-none relative overflow-hidden bg-gray-50">
                                <img src="{{ asset('/images/1x2/'.$image->image1x2) }}">
                            </div>
                        @endif
                    </div>
                    <div class="flex items-end">
                        <x-cms.base.input type="file" id="image16x9" name="image16x9" label="image 16x9" />
                        @if($image->image16x9)
                            <div class="max-w-28 aspect-1x1 flex-none relative overflow-hidden bg-gray-50">
                                <img src="{{ asset('/images/16x9/'.$image->image16x9) }}">
                            </div>
                        @endif
                    </div>
                    <div>
                        <div class="h-5"></div>
                        <x-cms.base.button type="submit" mission="update" id="update-image" name="update-image" title="Update Image" content="Update" />
                    </div>
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>
@endsection
