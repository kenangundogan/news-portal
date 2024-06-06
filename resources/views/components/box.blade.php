@php
    $href = $href ?? '#';
    $class = $class ?? '';
    $class = 'p-4 ' . $class;
    $order = $order ?? '';
@endphp

<div data-type="box" data-order="{{ $order }}" class="{{ $class }}">
    <a href="{{ $href }}" target="_blank">
        {{ $slot }}
    </a>
</div>
