@php
    $id = $id ?? '';
    $name = $name ?? '';
    $method = $method ?? '';
    $action = $action ?? '';
    $class = $class ?? '';
@endphp

<form method="{{ $method }}" action="{{ $action }}" id="{{ $id }}" name="{{ $name }}" class="{{ $class }}" novalidate autocomplete="{{ $autocomplete ?? 'on' }}">
    @csrf
    {{ $slot }}
</form>
