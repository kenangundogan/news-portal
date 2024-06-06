document.addEventListener('DOMContentLoaded', (event) => {
    window.onscroll = function () { scrollFunction() };
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (backToTopBtn) {
        backToTopBtn.onclick = function () { topFunction() };
    }
});

function scrollFunction() {
    const backToTopBtn = document.getElementById("backToTopBtn");
    if (!backToTopBtn) {
        return;
    }
    if (document.body.scrollTop > 100 || document.documentElement.scrollTop > 500) {
        backToTopBtn.classList.remove("hidden");
    } else {
        backToTopBtn.classList.add("hidden");
    }
}

function topFunction() {
    window.scrollTo({
        top: 0,
        behavior: "smooth"
    });
}
