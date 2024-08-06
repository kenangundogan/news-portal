@php
    $id = $id ?? '';
    $name = $name ?? '';
    $value = $value ?? '';
    $label = $label ?? '';
    $placeholder = $placeholder ?? '';
    $message = $message ?? '';
    $options = $options ?? [];
    $selectedId = $selectedId ?? '';
@endphp

<div class="w-full">
    <x-cms.base.label :for="$name" :label="$label" />
    <div class="relative w-full">
        <div class="select-box w-full h-16 p-5 bg-white border border-gray-300 cursor-pointer" id="selectBox{{ $id }}">
            {{ $placeholder ?: 'Select an option' }}
        </div>
        <div class="options-container absolute top-full left-0 w-full border border-gray-300 border-t-0 bg-white z-10 hidden" id="optionsContainer{{ $id }}">
            <input type="text" class="w-full p-3 border-b border-gray-300 outline-none" id="searchBox{{ $id }}" placeholder="Search...">
            <div class="overflow-y-auto max-h-36">
                @foreach ($options as $option)
                    <div class="option p-3 cursor-pointer hover:bg-gray-100" data-value="{{ $option->id }}">{{ $option->name ?? $option->type }}</div>
                @endforeach
            </div>
        </div>
    </div>
    <input type="hidden" name="{{ $name }}" id="{{ $id }}" value="{{ $selectedId }}">
    @error($name)
        <div class="text-xs indent-4 bg-white text-red-500 mt-1">{{ $message }}</div>
    @enderror
</div>

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const selectBox = document.getElementById('selectBox{{ $id }}');
        const optionsContainer = document.getElementById('optionsContainer{{ $id }}');
        const searchBox = document.getElementById('searchBox{{ $id }}');
        const options = optionsContainer.querySelectorAll('.option');
        const hiddenInput = document.getElementById('{{ $id }}');

        const selectedId = '{{ $selectedId }}';
        if (selectedId) {
            const selectedOption = Array.from(options).find(option => option.getAttribute('data-value') === selectedId);
            if (selectedOption) {
                selectBox.textContent = selectedOption.textContent;
            }
        }

        selectBox.addEventListener('click', function () {
            optionsContainer.classList.toggle('hidden');
            searchBox.focus();
        });

        options.forEach(option => {
            option.addEventListener('click', function () {
                selectBox.textContent = this.textContent;
                hiddenInput.value = this.getAttribute('data-value');
                optionsContainer.classList.add('hidden');
            });
        });

        searchBox.addEventListener('keyup', function () {
            const filter = searchBox.value.toLowerCase();
            options.forEach(option => {
                if (option.textContent.toLowerCase().includes(filter)) {
                    option.classList.remove('hidden');
                } else {
                    option.classList.add('hidden');
                }
            });
        });

        document.addEventListener('click', function (e) {
            if (!selectBox.contains(e.target) && !optionsContainer.contains(e.target)) {
                optionsContainer.classList.add('hidden');
            }
        });
    });
</script>
