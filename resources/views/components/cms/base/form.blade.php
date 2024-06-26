@php
    $id = $id ?? '';
    $name = $name ?? '';
    $method = $method ?? '';
    $action = $action ?? '';
    $class = $class ?? '';
    $enctype = $enctype ?? '';
@endphp

<form method="{{ $method }}" action="{{ $action }}" id="{{ $id }}" name="{{ $name }}" class="{{ $class }}" enctype="{{ $enctype }}">
    @csrf
    {{ $slot }}
</form>
