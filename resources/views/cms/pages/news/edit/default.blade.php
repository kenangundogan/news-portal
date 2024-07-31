@extends('cms.master.default')

@section('content')
    <x-cms.box>
        <x-slot name="head">
            <x-cms.box.head>
                <x-slot name="title">{{ __('Update News') }}</x-slot>
                <x-slot name="action">
                    <x-cms.base.link href="{{ route('news.index') }}" content="{{ __('List') }}" mission="list" class="h-12 !p-3"/>
                </x-slot>
            </x-cms.box.head>
        </x-slot>
        <x-slot name="body">
            <x-cms.base.form id="form" name="form" action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT')
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <x-cms.base.input type="text" id="title" name="title" value="{{ old('title', $news->title) }}" label="Title" />
                    <x-cms.base.input type="text" id="description" name="description" value="{{ old('description', $news->description) }}" label="Description" />
                    <x-cms.base.select id="image_id" name="image_id" label="Images" :options="$images" selectedId="{{ old('image_id', $news->image_id) }}" />
                    <x-cms.base.select id="category_id" name="category_id" label="Category" :options="$categories" selectedId="{{ old('category_id', $news->category_id) }}" />
                </div>

                <div class="mb-4">
                    <h2 class="mb-4 font-bold">{{ __('Contents') }}</h2>
                    <div id="news-contents-container" class="relative">
                        @foreach ($news->contents as $index => $content)
                            <div class="news-content-item grid gap-4 p-8 mb-4 bg-yellow-50">
                                <x-cms.base.select name="contents[{{ $index }}][type_id]" id="contents[{{ $index }}][type_id]" label="Content Type" :options="$contentTypes" selectedId="{{ old('contents.' . $index . '.type_id', $content->news_content_type_id) }}" />
                                <x-cms.base.textarea name="contents[{{ $index }}][content]" id="contents[{{ $index }}][content]" label="Content" value="{{ old('contents.' . $index . '.content', $content->content) }}" />
                                <x-cms.base.button type="button" mission="remove" id="remove-content-{{ $index }}" name="remove-content" title="Remove Content" content="Remove Content" class="remove-content md:w-44" />
                            </div>
                        @endforeach
                    </div>

                    <div class="flex gap-4 mb-4">
                        <select id="content-type-select" class="w-full bg-white border p-4 outline-none border-gray-300 focus:border-black focus:ring-0">
                            <option value="" disabled selected>Select content type</option>
                            @foreach($contentTypes as $contentType)
                                <option value="{{ $contentType->id }}" data-type="{{ $contentType->type }}">{{ $contentType->name }}</option>
                            @endforeach
                        </select>
                        <x-cms.base.button type="button" mission="add" id="add-content" name="add-content" title="Add Content" content="Add" class="md:w-44"/>
                    </div>
                </div>

                <div class="mb-4">
                    <x-cms.base.button type="submit" mission="update" id="update-news" name="update-news" title="Update News" content="Update" />
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let contentIndex = {{ count($news->contents) }};

            function createContentInput(type, index) {
                let inputHtml = '';
                switch(type) {
                    case 'text':
                        inputHtml = `<x-cms.base.input type="text" id="contents[${index}][content]" name="contents[${index}][content]" label="Content" class="form-input"/>`;
                        break;
                    case 'textarea':
                        inputHtml = `<x-cms.base.textarea id="contents[${index}][content]" name="contents[${index}][content]" label="Content" class="form-input"/>`;
                        break;
                    case 'file':
                        inputHtml = `<x-cms.base.input type="file" id="contents[${index}][content]" name="contents[${index}][content]" label="Content" class="form-input"/>`;
                        break;
                    default:
                        inputHtml = `<x-cms.base.input type="text" id="contents[${index}][content]" name="contents[${index}][content]" label="Content" class="form-input"/>`;
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
