@php
    $class = $class ?? '';
    $style = $style ?? '';
@endphp
<div class="swiper-slide {{$class ?? ''}}" style="{{ $style ?? '' }}">
    {{ $slot }}
</div>
