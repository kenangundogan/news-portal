@extends('cms.master.default')

@section('content')
    <x-cms.base.form id="form" name="form" :action="route('news.store')" method="POST" enctype="multipart/form-data">
        <x-cms.box>
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('Create News') }}</x-slot>
                    <x-slot name="action">
                        <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('List') }}" mission="list" class="h-12 !p-3"/>
                    </x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <x-cms.base.input type="text" id="title" name="title" value="{{ old('title') }}" label="Title" />
                    <x-cms.base.input type="text" id="description" name="description" value="{{ old('description') }}" label="Description" />
                    <x-cms.base.select-custom-images id="image_id" name="image_id" label="Images" :options="$images" selectedId="{{ old('image_id') }}" />
                    <x-cms.base.select-custom id="category_id" name="category_id" label="Category" :options="$categories" selectedId="{{ old('category_id') }}" />
                </div>
            </x-slot>
        </x-cms.box>

        <x-cms.box>
            <x-slot name="head">
                <x-cms.box.head>
                    <x-slot name="title">{{ __('Contents') }}</x-slot>
                </x-cms.box.head>
            </x-slot>
            <x-slot name="body">

                <div class="mb-4">
                    <div id="news-contents-container" class="relative"></div>
                    <div class="flex gap-4 mb-4">
                        <select id="content-type-select" class="w-full bg-white border p-4 outline-none border-gray-300 focus:border-black focus:ring-0">
                            <option value="" disabled selected>Select content type</option>
                            @foreach($contentTypes as $contentType)
                                <option value="{{ $contentType->id }}" data-type="{{ $contentType->type }}">{{ $contentType->name }}</option>
                            @endforeach
                        </select>
                        <x-cms.base.button type="button" mission="show" id="add-content" name="add-content" title="Add Content" content="Add" class="md:w-44"/>
                    </div>
                </div>

            </x-slot>
        </x-cms.box>

        <x-cms.box>
            <x-slot name="body">
                <x-cms.base.button type="submit" mission="create" id="create-news" name="create-news" title="Create News" content="Create" />
            </x-slot>
        </x-cms.box>
    </x-cms.base.form>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let contentIndex = 0;

            function createContentInput(type, index) {
                let inputHtml = '';
                switch(type) {
                    case 'text':
                        inputHtml = `<x-cms.base.input type="text" name="contents[${index}][content]"/>`;
                        break;
                    case 'textarea':
                        inputHtml = `<x-cms.base.textarea name="contents[${index}][content]"/>`;
                        break;
                    case 'file':
                        inputHtml = `<x-cms.base.input type="file" name="contents[${index}][file]"/>`;
                        break;
                    default:
                        inputHtml = `<x-cms.base.input type="text" name="contents[${index}][content]"/>`;
                }
                return inputHtml;
            }

            document.getElementById('add-content').addEventListener('click', function () {
                let selectedOption = document.getElementById('content-type-select').options[document.getElementById('content-type-select').selectedIndex];
                if (!selectedOption.value) return;
                let selectedType = selectedOption.getAttribute('data-type');
                let selectedTypeId = selectedOption.value;
                let selectedName = selectedOption.text;

                let container = document.getElementById('news-contents-container');
                let newItem = document.createElement('div');
                newItem.classList.add('news-content-item', 'grid', 'gap-4', 'p-8', 'mb-4', 'bg-yellow-50');
                newItem.innerHTML = `
                    <strong>${selectedName}</strong>
                    <input type="hidden" name="contents[${contentIndex}][type_id]" value="${selectedTypeId}" />
                    ${createContentInput(selectedType, contentIndex)}
                    <x-cms.base.button type="button" mission="remove" id="remove-content-${contentIndex}" name="remove-content" title="Remove Content" content="Remove Content" class="remove-content md:w-44 mt-2" />
                `;
                container.appendChild(newItem);
                contentIndex++;
            });

            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-content')) {
                    e.target.closest('.news-content-item').remove();
                }
            });
        });
    </script>
@endsection
