<div data-name="share">
    <div class="max-w-3xl m-auto px-4 py-10">
        <div class="text-center mb-4">
            <div class="text-xl font-bold">Share this article</div>
            <div class="text-[14px] text-[#666]">Share this article with your friends and family</div>
        </div>
        <div class="flex justify-center gap-4">
            <a title="facebook" href="https://www.facebook.com/sharer/sharer.php?u={{ url()->current() }}" class="w-10 h-10 flex items-center justify-center border text-black hover:bg-[#3B5998] hover:text-white hover:border-white rounded-full">
                <i class="fab fa-facebook-f"></i>
            </a>
            <a title="twitter" href="https://twitter.com/intent/tweet?text={{ str_replace(' ', '%20', $news->title) }};url={{ url()->current() }};original_referer=URL;via=NEWS" class="w-10 h-10 flex items-center justify-center border text-black hover:bg-[#55ACEE] hover:text-white rounded-full">
                <i class="fab fa-twitter"></i>
            </a>
            <a title="whatsapp" href="https://wa.me/?text={{ str_replace(' ', '%20', $news->title) . '%0A' . url()->current() }}" class="w-10 h-10 flex items-center justify-center border text-black hover:bg-[#25D366] hover:text-white rounded-full">
                <i class="fab fa-whatsapp"></i>
            </a>
            <a title="linkedin" href="https://www.linkedin.com/sharing/share-offsite/?url={{ url()->current() }}" class="w-10 h-10 flex items-center justify-center border text-black hover:bg-[#0077B5] hover:text-white rounded-full">
                <i class="fab fa-linkedin-in"></i>
            </a>
        </div>
    </div>
</div>
