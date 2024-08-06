@php
    $id = $id ?? '';
    $type = $type ?? '';
    $name = $name ?? '';
    $value = $value ?? '';
    $label = $label ?? '';
    $placeholder = $placeholder ?? '';
    $message = $message ?? '';
    $maxlength = $maxlength ?? '300';
@endphp

<div class="w-full">
    <x-cms.base.label :for="$name" :label="$label" />
    <input type="{{ $type ?? 'text' }}" name="{{ $name }}" id="{{ $id }}" placeholder="{{ $placeholder }}" value="{{ $value }}" maxlength="{{ $maxlength }}"
        class="w-full bg-white border h-16 p-4 outline-none border-gray-300 focus:border-black focus:ring-0">
    @error($name)
        <div class="text-xs indent-4 bg-white text-red-500 mt-1">{{ $message }}</div>
    @enderror
</div>
