<footer class="relative px-10 py-20 border-t">
    <div class="flex gap-10 flex-col md:flex-row justify-between mb-8 pb-8 border-b">
        <div class="md:w-1/3 mb-4">
            <img src="{{ asset('images/logo/black/logo.svg') }}" alt="logo" class="h-8 mb-4">
            <div class="text-xs max-w-64">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </div>
        </div>
        <div class="md:w-2/3 max-w-2xl">
            <div class="font-bold mb-4">Categories</div>
            <ul class="grid md:grid-cols-3 gap-x-10">
                @foreach ($categories as $category)
                    <li class="mb-2">
                        <a href="/news/category/{{ $category->slug }}" class="text-sm hover:text-red-500">
                            {{ $category->name }}
                        </a>
                    </li>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="w-full flex justify-between items-center">
        <span class="text-xs">© 2024 News Portal. All rights reserved.</span>
        <img src="{{ asset('images/logo/black/logo.svg') }}" alt="logo" class="h-4">
    </div>
</footer>
