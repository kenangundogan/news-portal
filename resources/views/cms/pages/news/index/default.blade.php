@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('News List') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('news.create') }}" content="{{ __('Create') }}"  mission="create" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.table>
                <x-cms.table.thead>
                    <x-cms.table.row>
                        @if (count($news) > 0)
                            @foreach (array_keys($news->first()->toArray()) as $key)
                                @unless(in_array($key, array_merge(['category'])))
                                    <x-cms.table.cell>{{ str_replace('_', ' ', ucwords($key)) }}</x-cms.table.cell>
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">{{ __('Actions') }}</x-cms.table.cell>
                        @endif
                    </x-cms.table.row>
                </x-cms.table.thead>
                <x-cms.table.tbody>
                    @foreach ($news as $new)
                        <x-cms.table.row>
                            @foreach ($new->toArray() as $key => $value)
                                @unless(in_array($key, array_merge(['category'])))
                                    @if ($key == 'image_id')
                                        <x-cms.table.cell>
                                            <div>{{ $value }}</div>
                                            <div class="flex flex-col gap-1">
                                                <img src="{{ asset('images/1x1/' . $new->image->image1x1) }}" alt="{{ $new->name }}" class="w-14 aspect-1x1"/>
                                                <img src="{{ asset('images/16x9/' . $new->image->image16x9) }}" alt="{{ $new->name }}" class="w-14 aspect-16x9"/>
                                                <img src="{{ asset('images/1x2/' . $new->image->image1x2) }}" alt="{{ $new->name }}" class="w-14 aspect-1x2"/>
                                            </div>
                                        </x-cms.table.cell>
                                    @elseif ($key == 'category_id')
                                        <x-cms.table.cell>
                                            <div>{{ $value }}</div>
                                            <div>{{ $new->category->name }}</div>
                                        </x-cms.table.cell>
                                    @else
                                    <x-cms.table.cell>
                                        <div class="max-w-52">{{ $value }}</div>
                                    </x-cms.table.cell>
                                    @endif
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">
                                <div class="flex space-x-4 break-normal">
                                    <x-cms.base.link href="{{ route('news.edit', $new->id) }}" content="{{ __('Edit') }}" mission="edit"/>
                                    <x-cms.base.form action="{{ route('news.destroy', $new->id) }}" method="POST">
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
