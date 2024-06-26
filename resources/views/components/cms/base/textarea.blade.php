@php
    $id = $id ?? '';
    $name = $name ?? '';
    $value = $value ?? '';
    $label = $label ?? '';
    $placeholder = $placeholder ?? '';
    $message = $message ?? '';
    $class = $class ?? '';
    $classWrapper = $classWrapper ?? '';
@endphp

<div class="w-full {{ $classWrapper }}">
    <x-cms.base.label :for="$name" :label="$label" />
    <textarea name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" class="w-full bg-white border p-4 outline-none border-gray-300 focus:border-black focus:ring-0 {{ $class }}">{{ $value }}</textarea>
    @error($name)
        <div class="text-xs indent-4 bg-white text-red-500 mt-1">{{ $message }}</div>
    @enderror
</div>
