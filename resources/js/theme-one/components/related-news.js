var relatedNewsSticky = document.querySelector('[data-name="related-news"]');

if (relatedNewsSticky) {
    let isScrolledPast = false;
    const threshold = 800;

    function handleScroll() {
        const scrolledPastThreshold = window.scrollY > threshold;

        if (scrolledPastThreshold && !isScrolledPast) {
            isScrolledPast = true;
        } else if (isScrolledPast && scrolledPastThreshold) {
            relatedNewsSticky.classList.add('fixed');
            relatedNewsSticky.classList.remove('relative');
        } else if (!scrolledPastThreshold) {
            isScrolledPast = false;
            relatedNewsSticky.classList.add('relative');
            relatedNewsSticky.classList.remove('fixed');
        }
    }

    window.addEventListener('scroll', handleScroll);
}

