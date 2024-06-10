<div class="magicGrid relative z-30 w-full flex flex-wrap">
    @foreach ($news as $item)
        @php
            $randomFolderOptions = [
                [
                    'ratio' => '1x1',
                    'class' => 'aspect-1/1',
                    'folder' => '1x1',
                    'bgcolor' => 'bg-white',
                ],
                [
                    'ratio' => '1x2',
                    'class' => 'aspect-1/2',
                    'folder' => '1x2',
                    'bgcolor' => 'bg-white',
                ],
                [
                    'ratio' => '16x9',
                    'class' => 'aspect-16/9',
                    'folder' => '16x9',
                    'bgcolor' => 'bg-white',
                ],
            ];
            $randomFolder = $randomFolderOptions[array_rand($randomFolderOptions)];
            $slug = Str::slug($item->title);
        @endphp
        <x-box class="md:w-6/12 lg:w-4/12 xl:w-3/12 2xl:w-2/12" order="" href="/news/{{ $item->id }}-{{ $slug }}">
            <x-box.body class="{{ $randomFolder['bgcolor'] }}">
                <x-box.image classwrapper="{{ $randomFolder['class'] }} mb-4" order="">
                    <x-slot name="src">{{ Vite::asset('resources/images/' . $randomFolder['folder'] . '/' . $item->image->name . '.jpg') }}</x-slot>
                    <x-slot name="alt">{{ $item->title }}</x-slot>
                </x-box.image>
                <div>
                    <div class="text-[12px] text-[#E32C32] mb-2">{{ $item->category->name }}</div>
                    <div class="text-xl font-bold mb-2">{{ $item->title }}</div>
                    <div class="text-sm text-gray-500 mb-2">{{ $item->description }}</div>
                    <div class="text-[10px] text-gray-300">{{ $item->updated_at->format('d/m/Y') }}</div>
                </div>
            </x-box.body>
        </x-box>
    @endforeach
</div>
