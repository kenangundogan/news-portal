@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Image List') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('images.create') }}" content="{{ __('Create') }}"  mission="create" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.table>
                <x-cms.table.thead>
                    <x-cms.table.row>
                        @if (count($images) > 0)
                            @foreach (array_keys($images->first()->toArray()) as $key)
                                @unless(in_array($key, array_merge([])))
                                    <x-cms.table.cell>{{ str_replace('_', ' ', ucwords($key)) }}</x-cms.table.cell>
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">{{ __('Actions') }}</x-cms.table.cell>
                        @endif
                    </x-cms.table.row>
                </x-cms.table.thead>
                <x-cms.table.tbody>
                    @foreach ($images as $image)
                        <x-cms.table.row>
                            @foreach ($image->toArray() as $key => $value)
                                @unless(in_array($key, array_merge([])))
                                @if ($key == 'image')
                                    <x-cms.table.cell>
                                        <img src="{{ asset('images/1x1/' . $value) }}" alt="{{ $image->name }}" class="w-14 h-14"/>
                                    </x-cms.table.cell>
                                @else
                                    <x-cms.table.cell>{{ $value }}</x-cms.table.cell>
                                @endif
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">
                                <div class="flex space-x-4 break-normal">
                                    <x-cms.base.link href="{{ route('images.edit', $image->id) }}" content="{{ __('Edit') }}" mission="edit"/>
                                    <x-cms.base.form action="{{ route('images.destroy', $image->id) }}" method="POST">
                                        @method('DELETE')
                                        <x-cms.base.button mission="delete" content="{{ __('Delete') }}"/>
                                    </x-cms.base.form>
                                </div>
                            </x-cms.table.cell>
                        </x-cms.table.row>
                    @endforeach
                </x-cms.table.tbody>
            </x-cms.table>
        </x-slot>
    </x-cms.box>
@endsection
