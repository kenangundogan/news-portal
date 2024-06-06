@php
    $src = $src ?? '';
    $alt = $alt ?? '';
    $class = $class ?? '';
    $class = 'w-full transition duration-500 ease-in-out hover:scale-125 hover:rotate-6' . $class;
    $classwrapper = $classwrapper ?? '';
    $order = $order ?? '';
@endphp

<div class="relative overflow-hidden bg-gray-50 {{ $classwrapper }}">
    <img src="{{ $src }}" alt="{{ $alt }}" class="{{ $class }}">
    <div class="font-bold text-7xl w-full h-full flex justify-center items-center text-center opacity-10">{{ $order }}</div>
</div>
