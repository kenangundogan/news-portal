<div class="whitespace-nowrap hidden"></div>

<footer class="relative p-4">
    <div class="wrapper w-full mb-4">
        <div class="primary h-20 mb-1 flex justify-center bg-white">
            <div class="content w-full px-10 flex justify-between items-center">
                <span class="text-xs">© 2021 News Portal. All rights reserved.</span>
                <img src="{{ asset('images/logo/black/logo.svg') }}" class="h-4" title="Analysis">
            </div>
        </div>
        <div class="secondary relative bg-yellow-50">
            <div
                class="absolute inset-x-0 m-auto -top-10 w-16 h-16 bg-yellow-50 rounded-full flex justify-center items-center">
                <div class="w-2/3 h-2/3 rounded-full flex items-center justify-center text-center bg-yellow-200">i</div>
            </div>
            <div class="content w-full px-10 m-auto text-center leading-0 py-10">
                <span class="text-xs text-gray-600">
                    Haber sitesi yönetim sistemi (CMS), site yöneticilerinin ve editörlerinin içerikleri kolayca ekleyip
                    düzenleyebilmelerini sağlar. Kategoriler oluşturabilir, haberleri ekleyip güncelleyebilir ve içerik
                    yönetimini basit ve etkili bir şekilde gerçekleştirebilirsiniz.
                    Kategori Yönetimi: Yeni haber kategorileri oluşturabilir, mevcut kategorileri düzenleyebilir ve
                    silebilirsiniz. Kategori yönetimi sayesinde içeriklerinizi daha düzenli ve erişilebilir bir şekilde
                    sunabilirsiniz.
                    Haber Yönetimi: Haber ekleme, düzenleme ve silme işlemlerini hızlı ve pratik bir şekilde
                    gerçekleştirebilirsiniz. Haberlerin başlıkları, içerikleri ve kategorilerini belirleyebilir,
                    gerektiğinde güncellemeler yapabilirsiniz.
                </span>
            </div>
        </div>
    </div>
    <div class="w-full flex flex-wrap justify-between bg-white">
        <div data-type="userAgent" class="p-3 text-xs text-center"></div>
        <div data-type="phpVersion" class="p-3 text-xs text-center">Laravel
            v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})</div>
    </div>
</footer>
