<header class="sticky z-50 top-0 w-full h-20 bg-white border-b flex items-center justify-between px-4 md:px-12">
    <a href="/cms" class="flex items-center gap-2">
        <img src="{{ asset('images/logo/black/logo.svg') }}" alt="logo" class="h-6"> | <div class="text-3xl">CMS</div>
    </a>
    <div class="group relative">
        <div class="text-sm cursor-pointer flex gap-2 items-center">
            <img src="{{ asset('images/avatar/' . Auth::user()->image) }}" alt="avatar" class="h-10 w-10 rounded-full">
            <div class="flex flex-col">
                <span>Welcome,</span>
                <span class="font-bold max-w-24">{{ Auth::user()->name }}</span>
            </div>
        </div>
        <ul class="flex-col gap-4 absolute right-0 bg-white w-full p-6 shadow-xl hidden group-hover:flex min-w-32">
            <li class="border-b pb-2">
                <a href="/" class="hover:text-gray-300">{{ __('Page') }}</a>
            </li>
            <li>
                <x-cms.base.form id="logout" name="logout" action="{{ route('logout') }}" method="POST">
                    <a href="{{ route('logout') }}" class="hover:text-gray-300" onclick="event.preventDefault(); this.closest('form').submit();">{{ __('Log Out') }}</a>
                </x-cms.base.form>
            </li>
        </ul>
    </div>
</header>
