<x-cms.box class="w-full md:w-6/12">
    <x-slot name="head">
        <x-cms.box.head>
            <x-slot name="title">{{ __('News - Top 5') }}</x-slot>
        </x-cms.box.head>
    </x-slot>
    <x-slot name="body">
        <div class="mb-4 bg-yellow-50 p-4 flex justify-between items-center">
            <span>{{ __('Total News') }}</span>
            <span class="font-bold">{{ $news->count() }}</span>
        </div>
        <ul class="*:border-b *:pb-4 *:mb-4 *:last:border-none">
            @foreach ($news as $item)
                @if ($loop->iteration > 5)
                    @break
                @endif
                <li>
                    <a href="{{ route('news.edit', $item->id) }}" class="flex gap-4 text-sm">
                        <div class="font-bold">{{ $item->id }}</div>
                        <div class="flex gap-4">
                            <img src="{{ asset('images/1x1/'.$item->image->image1x1) }}" alt="{{ $item->title }}" class="w-20 h-20"/>
                            <div>
                                <div class="font-bold">{{ $item->title }}</div>
                                <div>{{ $item->description }}</div>
                            </div>
                        </div>
                    </a>
                </li>
            @endforeach
        </ul>
        <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('View All') }}"/>
    </x-slot>
</x-cms.box>
