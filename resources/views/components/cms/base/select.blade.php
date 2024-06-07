@php
    $id = $id ?? '';
    $name = $name ?? '';
    $value = $value ?? '';
    $label = $label ?? '';
    $placeholder = $placeholder ?? '';
    $message = $message ?? '';
    $options = $options ?? '';
    $selectedId = $selectedId ?? '';
@endphp

<div class="w-full">
    <x-cms.base.label :for="$name" :label="$label" />
    <select name="{{ $name }}" id="{{ $id }}" class="w-full bg-white border p-4 outline-none border-gray-300 focus:border-black focus:ring-0">
        @if($placeholder)
            <option value="0">{{ $placeholder }}</option>
        @endif
        @foreach ($options as $option)
            <option value="{{ $option->id }}" {{ $selectedId == $option->id ? 'selected' : '' }}>{{ $option->name }}</option>
        @endforeach
    </select>
    @error($name)
        <div class="text-xs indent-4 bg-white text-red-500 mt-1">{{ $message }}</div>
    @enderror
</div>
