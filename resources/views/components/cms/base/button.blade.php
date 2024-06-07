@php
    $id = $id ?? '';
    $type = $type ?? '';
    $name = $name ?? '';
    $title = $title ?? '';
    $class = $class ?? '';
    $content = $content ?? '';
    $dataFormId = $dataFormId ?? '';
    $dataFormType = $dataFormType ?? '';
    $dataFormTitle = $dataFormTitle ?? '';
    $dataFormDescription = $dataFormDescription ?? '';
    $dataFormMethod = $dataFormMethod ?? '';
    $dataFormAction = $dataFormAction ?? '';
    $onClick = $onclick ?? '';
    $mission = $mission ?? '';

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

<div class="w-full">
    {{-- <div class="h-5"></div> --}}
    <button type="{{ $type }}"
        class="w-full p-4 rounded-sm {{ $mission }} {{ $class }}"
        id="{{ $id }}"
        name="{{ $name }}"
        title="{{ $title }}"
        data-form-id="{{ $dataFormId }}"
        data-form-type="{{ $dataFormType }}"
        data-form-title="{{ $dataFormTitle }}"
        data-form-description="{{ $dataFormDescription }}"
        data-form-method="{{ $dataFormMethod }}"
        data-form-action="{{ $dataFormAction }}"
        onclick="{{ $onClick }}
        ">
        {!! $content !!}
</button>
</div>
