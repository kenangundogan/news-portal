const searchModalOpenEvent = document.querySelector('[data-name="search-open"]');
const searchModalCloseEvent = document.querySelector('[data-name="search-close"]');
const searchModal = document.querySelector('[data-name="search-modal"]');

function openSearchModal() {
    searchModalOpenEvent.classList.add('!hidden');
    searchModalCloseEvent.classList.remove('!hidden');
    searchModal.classList.remove('!hidden');
    searchModal.querySelector('#search-input').focus();
}

function closeSearchModal() {
    searchModalOpenEvent.classList.remove('!hidden');
    searchModalCloseEvent.classList.add('!hidden');
    searchModal.classList.add('!hidden');
}

searchModalOpenEvent.addEventListener('click', openSearchModal);
searchModalCloseEvent.addEventListener('click', closeSearchModal);

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closeSearchModal();
    }
});
