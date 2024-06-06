<div class="magicGrid relative z-30 w-full flex flex-wrap">
    @for ($i = 0; $i < 100; $i++)
        @php
            $randomImage = [
                '101.jpg',
                '201.jpg',
                '102.jpg',
                '202.jpg',
                '103.jpg',
                '203.jpg',
                '104.jpg',
                '204.jpg',
                '105.jpg',
                '205.jpg',
                '106.jpg',
                '206.jpg',
            ];
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
            $randomImage = $randomImage[array_rand($randomImage)];

            $description = fake()->text(14);
            $title = fake()->text(60);
            $content = fake()->text(160);
            $date = fake()->date();
        @endphp
        <x-box class="md:w-6/12 lg:w-4/12 xl:w-3/12 2xl:w-2/12" order="{{ $i }}" href="/show">
            <x-box.body class="{{ $randomFolder['bgcolor'] }}">
                <x-box.image classwrapper="{{ $randomFolder['class'] }} mb-4" order="{{ $i }}">
                    <x-slot
                        name="src">{{ Vite::asset('resources/images/' . $randomFolder['folder'] . '/' . $randomImage) }}</x-slot>
                    <x-slot name="alt">{{ $description }}</x-slot>
                </x-box.image>
                <div>
                    <div class="text-[12px] text-[#E32C32] mb-2">{{ $description }}</div>
                    <div class="text-xl font-bold mb-2">{{ $title }}</div>
                    <div class="text-sm text-gray-500 mb-2">{{ $content }}</div>
                    <div class="text-[10px] text-gray-300">{{ $date }}</div>
                </div>
            </x-box.body>
        </x-box>
    @endfor
</div>
