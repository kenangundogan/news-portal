@php
    $id = $id ?? '';
    $class = $class ?? '';
    $href = $href ?? '';
    $content = $content ?? '';
    $mission = $mission ?? '';
    $title = $title ?? '';

    $default = "bg-white hover:bg-gray-100 text-black-500 border";
    $gray = "bg-gray-400 hover:bg-gray-500 text-white border border-transparent";
    $green = "bg-green-400 hover:bg-green-500 text-white border border-transparent";
    $yellow = "bg-yellow-400 hover:bg-yellow-500 text-white border border-transparent";
    $orange = "bg-orange-400 hover:bg-orange-500 text-white border border-transparent";
    $red = "bg-red-400 hover:bg-red-500 text-white border border-transparent";
    $blue = "bg-blue-400 hover:bg-blue-500 text-white border border-transparent";

    $default = $default;
    $create = $green;
    $update = $orange;
    $edit = $yellow;
    $delete = $red;
    $show = $blue;
    $list = $blue;
    $add = $green;
    $success = $green;
    $error = $red;
    $warning = $yellow;
    $scanning = $yellow;
    $export = $green;

    $mission = match ($mission) {
        'create' => $create,
        'update' => $update,
        'edit' => $edit,
        'delete' => $delete,
        'show' => $show,
        'list' => $list,
        'add' => $add,
        'success' => $success,
        'error' => $error,
        'warning' => $warning,
        'scanning' => $scanning,
        'export' => $export,
        default => $default,
    };
@endphp

<a href="{{ $href }}" id="{{ $id }}" title="{{ $title }}" class="w-auto p-4 inline-block rounded-sm text-center {{ $mission }} {{ $class }}">
    {{ $content }}
</a>
