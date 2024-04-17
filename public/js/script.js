document.addEventListener("DOMContentLoaded", function() {
    (function() {
        const headerContainer = $("#header-container");
        const desktopHeaderUrl = '/headerdesktop';
        const phoneHeaderUrl = '/headerphone';

        // Charger le header approprié en fonction de la taille de l'écran
        if (window.matchMedia("(min-width: 1010px)").matches) {
            headerContainer.load(desktopHeaderUrl);
        } else {
            headerContainer.load(phoneHeaderUrl);
        }
    })();
});