<x-cms.box class="w-full md:w-6/12">
    <x-slot name="head">
        <x-cms.box.head>
            <x-slot name="title">{{ __('Categories - Top 5') }}</x-slot>
        </x-cms.box.head>
    </x-slot>
    <x-slot name="body">
        <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
            <span>{{ __('Total Categories') }}</span>
            <span class="font-bold">{{ $news->count() }}</span>
        </div>
        <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
            @foreach ($categories as $item)
                @if ($loop->iteration > 5)
                    @break
                @endif
                <li>
                    <a href="{{ route('categories.edit', $item->id) }}" class="flex gap-4 text-sm">
                        <div class="font-bold">{{ $item->id }}</div>
                        <div>{{ $item->name }}</div>
                    </a>
                </li>
            @endforeach
        </ul>
        <x-cms.base.link href="{{ route('categories.index') }}" content="{{ __('View All') }}"/>
    </x-slot>
</x-cms.box>
