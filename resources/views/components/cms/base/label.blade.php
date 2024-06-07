@php
    $id = $id ?? '';
    $name = $name ?? '';
    $text = $text ?? '';
    $class = $class ?? '';
    $label = $label ?? '';
@endphp

<label for="{{ $name }}" class="text-xs indent-4 bg-white mb-1 block {{ $class }}">{{ $label }}</label>
