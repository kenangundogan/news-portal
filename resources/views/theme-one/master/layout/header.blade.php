<header class="sticky z-50 top-0 w-full h-20 bg-white border-b flex items-center justify-between px-6 md:px-12">
    <a href="/">
        <img src="{{ asset('images/logo/black/logo.svg') }}" alt="logo" class="h-6">
    </a>
    <div>
        <ul class="flex gap-6 items-center">
            <li class="cursor-pointer">
                <i data-name="profile-open" class="fa-solid fa-user" onclick="location.href='/cms'"></i>
            </li>
            <li class="cursor-pointer">
                <i data-name="search-open" class="fa-solid fa-magnifying-glass"></i>
                <i data-name="search-close" class="fa-solid fa-xmark text-xl !hidden"></i>
            </li>
            <li class="cursor-pointer">
                <i data-name="mega-menu-open" class="fa-solid fa-bars text-xl"></i>
                <i data-name="mega-menu-close" class="fa-solid fa-xmark text-xl !hidden"></i>
            </li>
        </ul>
    </div>
</header>
