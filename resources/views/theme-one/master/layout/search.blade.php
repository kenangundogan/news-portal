<div data-name="search-modal" class="fixed z-40 top-20 left-0 w-full h-[calc(100vh-80px)] bg-white/95 p-8 flex justify-center items-center !hidden">
    <div class="max-w-xl p-8">
        <div class="font-bold text-3xl text-center mb-4">
            WE CAN HELP YOU WITH JUST A FEW WORDS!
        </div>
        <div>
            <x-cms.base.form method="GET" action="{{ route('search') }}">
                <x-cms.base.input type="text" id="search-input" name="search" placeholder="Write a few words!" class="w-full p-4 border text-sm outline-none" />
                <x-cms.base.button type="submit" content="SEARCH" class="w-full border border-black p-4 font-bold cursor-pointer bg-white hover:bg-yellow-300" />
            </x-cms.base.form>
        </div>
    </div>
</div>
