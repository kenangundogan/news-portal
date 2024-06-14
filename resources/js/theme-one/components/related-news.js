var relatedNewsSticky = document.querySelector('[data-name="related-news"]');
var footer = document.querySelector('footer');

if (relatedNewsSticky && footer) {
    let isScrolledPast = false;
    const threshold = 800;

    function handleScroll() {
        const scrolledPastThreshold = window.scrollY > threshold;
        const footerOffsetTop = footer.offsetTop;
        const windowHeight = window.innerHeight;
        const scrolledPastFooter = window.scrollY + windowHeight > footerOffsetTop;

        if (scrolledPastThreshold && !isScrolledPast) {
            isScrolledPast = true;
        }

        if (isScrolledPast && scrolledPastThreshold && !scrolledPastFooter) {
            relatedNewsSticky.classList.add('fixed');
            relatedNewsSticky.classList.remove('relative');
        } else {
            isScrolledPast = false;
            relatedNewsSticky.classList.add('relative');
            relatedNewsSticky.classList.remove('fixed');
        }

        if (scrolledPastFooter) {
            relatedNewsSticky.classList.add('relative');
            relatedNewsSticky.classList.remove('fixed');
        }
    }

    window.addEventListener('scroll', handleScroll);
}
