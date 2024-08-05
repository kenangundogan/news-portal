@extends('cms.master.default')

@section('content')
    <x-cms.box dataname="userList">
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('User List') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="/cms/users/create" mission="create" content="{{ __('CREATE') }}" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>

        <x-slot name="body">
            <x-cms.table>
                <x-cms.table.thead>
                    <x-cms.table.row>
                        @if (count($users) > 0)
                            @foreach (array_keys($users->first()->toArray()) as $key)
                                @unless(in_array($key, array_merge(['email_verified_at'])))
                                    <x-cms.table.cell>{{ str_replace('_', ' ', ucwords($key)) }}</x-cms.table.cell>
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">{{ __('Actions') }}</x-cms.table.cell>
                        @endif
                    </x-cms.table.row>
                </x-cms.table.thead>
                <x-cms.table.tbody>
                    @foreach ($users as $user)
                        <x-cms.table.row>
                            @foreach ($user->toArray() as $key => $value)
                                @unless(in_array($key, array_merge(['email_verified_at'])))
                                    @if ($key == 'image')
                                        <x-cms.table.cell>
                                            <img src="{{ asset('images/avatar/' . $value ?? '') }}" alt="" class="w-14 h-14"/>
                                        </x-cms.table.cell>
                                    @else
                                        <x-cms.table.cell>{{ $value ?? '' }}</x-cms.table.cell>
                                    @endif
                                @endunless
                            @endforeach
                            <x-cms.table.cell class="md:sticky right-0 bg-gray-50">
                                <div class="flex space-x-4 break-normal">
                                    <x-cms.base.link href="/cms/users/{{ $user->id }}/edit" content="Edit"  mission="edit" />
                                    <x-cms.base.form action="{{ route('users.destroy', $user->id) }}" method="POST">
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
