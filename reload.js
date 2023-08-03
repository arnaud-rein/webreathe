function rechargerPageAutomatiquementAvecDelai() {
    // Ajouter un délai de 5 secondes avant de recharger la page (5000 millisecondes)
    setTimeout(function() {
        // Utiliser AJAX pour recharger la page
        $.ajax({
            url: window.location.href, // URL de la page actuelle
            cache: false, // Pour éviter le cache du navigateur
            success: function() {
                // Recharger la page après le délai spécifié
                window.location.reload();
            },
            error: function() {
                console.log("Erreur lors de la requête AJAX.");
            }
        });
    }, 5000); // Temps en millisecondes (ici, 5 secondes)
}

// Appeler la fonction pour recharger automatiquement avec délai lors du chargement de la page
$(document).ready(function() {
    rechargerPageAutomatiquementAvecDelai();
});