@php
    $class = $class ?? '';
    $class = 'bg-white p-6 overflow-hidden' . $class;
@endphp

<div data-type="wrapper" class="{{ $class }}">
    {{ $slot }}
</div>
