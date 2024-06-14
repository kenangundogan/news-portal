@php
    $id = $id ?? '';
    $name = $name ?? '';
    $text = $text ?? '';
    $class = $class ?? '';
    $label = $label ?? '';
    $for = $for ?? '';
@endphp

<label for="{{ $for }}" class="text-xs indent-4 bg-white mb-1 block {{ $class }}">{{ $label }}</label>
