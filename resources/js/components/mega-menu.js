const megaMenuOpenEvent = document.querySelector('[data-name="mega-menu-open"]');
const megaMenuCloseEvent = document.querySelector('[data-name="mega-menu-close"]');
const megaMenu = document.querySelector('[data-name="mega-menu-modal"]');

function openmegaMenu() {
    megaMenuOpenEvent.classList.add('!hidden');
    megaMenuCloseEvent.classList.remove('!hidden');
    megaMenu.classList.remove('!hidden');
}

function closemegaMenu() {
    megaMenuOpenEvent.classList.remove('!hidden');
    megaMenuCloseEvent.classList.add('!hidden');
    megaMenu.classList.add('!hidden');
}

megaMenuOpenEvent.addEventListener('click', openmegaMenu);
megaMenuCloseEvent.addEventListener('click', closemegaMenu);

document.addEventListener('keydown', function(event) {
    if (event.key === 'Escape') {
        closemegaMenu();
    }
});
