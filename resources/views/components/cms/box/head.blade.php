<div data-type="head" class="py-4 px-8 border-b {{ $class ?? '' }}">
    <div class="flex justify-between items-center flex-wrap gap-2">
        <div class="max-w-[260px]">
            <h1 class="text-base font-bold">{{ $title ?? '' }}</h1>
        </div>
        <div class="flex">
            <div class="w-full">
                {{ $action ?? '' }}
            </div>
        </div>
    </div>
</div>
