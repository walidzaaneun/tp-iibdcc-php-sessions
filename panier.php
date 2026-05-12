<?php
// TODO 1: Inclure le header
// TODO 2: Initialiser une variable $total à 0

?>

<div class="container my-4">
    <h1 class="mb-4">Mon Panier</h1>
    
    <!-- TODO 3: Vérifier si le panier est vide avec empty() -->
    <!-- Si vide : afficher une alerte Bootstrap info avec un lien vers index.php -->
    <!-- Si non vide : afficher le tableau du panier -->
    
    <!-- Structure du tableau Bootstrap responsive :
    <div class="table-responsive">
        <table class="table">
            <thead>
                <tr>
                    <th>Produit</th>
                    <th>Prix unitaire</th>
                    <th>Quantité</th>
                    <th>Sous-total</th>
                </tr>
            </thead>
            <tbody>
                TODO 4: Boucler sur $_SESSION['panier']
                Pour chaque article :
                - Calculer le sous-total (prix × quantité)
                - Ajouter le sous-total au total général
                - Afficher une ligne avec :
                  * Image miniature (50x50px) + nom du produit
                  * Prix unitaire
                  * Quantité
                  * Sous-total formaté avec number_format($sous_total, 2)
            </tbody>
            <tfoot>
                <tr>
                    <th colspan="3" class="text-end">Total :</th>
                    <th>TODO: Afficher le total formaté</th>
                </tr>
            </tfoot>
        </table>
    </div>
    -->
    
    <!-- TODO 5: Ajouter les boutons d'action -->
    <!-- Structure suggérée :
    <div class="d-flex justify-content-between mt-4">
        - Bouton "Continuer les achats" (lien vers index.php)
        - Formulaire pour vider le panier (POST vers actions/vider_panier.php)
          avec un bouton "Vider le panier" (classe btn-danger)
    </div>
    -->
</div>

<!-- TODO 6: Inclure Bootstrap JS -->
</body>
</html>