@php
    $href = $href ?? '#';
    $class = $class ?? '';
    $class = 'p-4 group ' . $class;
    $order = $order ?? '';
@endphp

<div data-type="box" data-order="{{ $order }}" class="{{ $class }}">
    <a href="{{ $href }}">
        {{ $slot }}
    </a>
</div>
