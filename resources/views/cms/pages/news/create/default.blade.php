@extends('cms.master.default')

@section('content')
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
            <x-cms.base.form id="form" name="form" :action="route('news.store')" method="POST">
                @csrf
                <div class="grid md:grid-cols-2 gap-4 mb-4">
                    <x-cms.base.input type="text" id="title" name="title" value="{{ old('title') }}" label="Title" />
                    <x-cms.base.input type="text" id="description" name="description" value="{{ old('description') }}" label="Description" />
                    <x-cms.base.select id="image_id" name="image_id" label="Images" :options="$images" selectedId="{{ old('image_id') }}" />
                    <x-cms.base.select id="category_id" name="category_id" label="Category" :options="$categories" selectedId="{{ old('category_id') }}" />
                </div>

                <div class="mb-4">
                    <h2 class="mb-4 font-bold">{{ __('Contents') }}</h2>
                    <div id="news-contents-container" class="relative">
                        <div class="news-content-item grid gap-4 p-8 mb-4 bg-yellow-50">
                            <x-cms.base.select name="contents[0][type_id]" id="contents[0][type_id]" label="Content Type" :options="$contentTypes"/>
                            <x-cms.base.textarea name="contents[0][content]" id="contents[0][content]" label="Content" />
                            <x-cms.base.button type="button" mission="remove" id="remove-content" name="remove-content" title="Remove Content" content="Remove Content" class="remove-content md:w-44" />
                        </div>
                        <x-cms.base.button type="button" mission="add" id="add-content" name="add-content" title="Add Content" content="Add Content" class="add-content md:w-44 absolute right-8 bottom-8" />
                    </div>
                </div>

                <div class="mb-4">
                    <x-cms.base.button type="submit" mission="create" id="create-news" name="create-news" title="Create News" content="Create" />
                </div>
            </x-cms.base.form>
        </x-slot>
    </x-cms.box>

    <script>
        document.addEventListener('DOMContentLoaded', function () {
            let contentIndex = 1;
            document.getElementById('add-content').addEventListener('click', function () {
                let container = document.getElementById('news-contents-container');
                let newItem = document.createElement('div');
                newItem.classList.add('news-content-item', 'grid', 'gap-4', 'mb-4', 'p-8', 'bg-yellow-50');
                newItem.innerHTML = `
                    <x-cms.base.select name="contents[${contentIndex}][type_id]" id="contents[${contentIndex}][type_id]" label="Content Type" :options="$contentTypes" selectedId="" />
                    <x-cms.base.textarea name="contents[${contentIndex}][content]" id="contents[${contentIndex}][content]" label="Content" />
                    <x-cms.base.button type="button" mission="remove" id="remove-content" name="remove-content" title="Remove Content" content="Remove Content" class="remove-content md:w-44" />
                `;
                container.appendChild(newItem);
                contentIndex++;
            });

            document.addEventListener('click', function (e) {
                if (e.target.classList.contains('remove-content')) {
                    e.target.parentElement.parentElement.remove();
                }
            });
        });
    </script>
@endsection
