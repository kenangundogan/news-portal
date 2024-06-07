import Swiper from 'swiper';
import { FreeMode, Pagination, Navigation, Thumbs, Autoplay, Zoom, Mousewheel, Scrollbar, Parallax, EffectFade } from 'swiper/modules';

const customSwiperInit = () => {
    const swipers = document.querySelectorAll('.slider-custom');
    swipers.forEach((element, key) => {
        const options = JSON.parse(element.getAttribute('data-swiper'));
        options.modules = [FreeMode, Pagination, Navigation, Thumbs, Autoplay, Zoom, Mousewheel, Scrollbar, Parallax, EffectFade];
        key = new Swiper(element, options);
        var paginationSelector = element.querySelectorAll(".swiper-pagination .swiper-pagination-bullet");
        paginationSelector.forEach((p, pKey) => {
            p.classList.add('!bg-transparent', 'w-auto', 'h-auto');
            p.innerHTML = '<div class="w-5 h-5 bg-black/20 rounded-full cursor-pointer"></div>';
        });
    });
}

customSwiperInit();
