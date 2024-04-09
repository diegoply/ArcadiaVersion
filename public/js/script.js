document.addEventListener("DOMContentLoaded", function() {
    (function() {
        const headerContainer = $("#header-container");
        const desktopHeaderUrl = 'partials\_headerdesktop.html.twig';
        const phoneHeaderUrl = 'partials\_headerphone.html.twig';

        // Charger le header approprié en fonction de la taille de l'écran
        if (window.matchMedia('(min-width: 814px)').matches) {
            headerContainer.load(desktopHeaderUrl);
        } else {
            headerContainer.load(phoneHeaderUrl);
        }
    })();
});