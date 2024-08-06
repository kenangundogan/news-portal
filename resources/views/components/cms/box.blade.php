<div tabindex="{{$order ?? ''}}" data-type="box" data-name="{{ $dataname ?? '' }}" class="p-4 focus:outline-yellow-500 {{ $class ?? '' }}">
    <div data-type="wrapper" class="relative max-h-full bg-white">
        {{ $head ?? '' }}
        <div data-type="body" class="p-8">
            <div data-type="wrapper">
                {{ $body ?? '' }}
            </div>
        </div>
        {{ $foot ?? '' }}
    </div>
</div>
