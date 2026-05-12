<?php
require_once 'includes/header.php';
$total = 0;

?>

<div class="container my-4">
    <h1 class="mb-4">Mon Panier</h1>
    
    <?php if (empty($_SESSION['panier'])): ?>
        <div class="alert alert-info">
            Votre panier est vide. <a href="index.php" class="alert-link">Retourner à la boutique</a>
        </div>
    <?php else: ?>
        <div class="table-responsive">
            <table class="table align-middle">
                <thead>
                    <tr>
                        <th>Produit</th>
                        <th>Prix unitaire</th>
                        <th>Quantité</th>
                        <th>Sous-total</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($_SESSION['panier'] as $item): 
                        $sous_total = $item['price'] * $item['quantite'];
                        $total += $sous_total;
                    ?>
                        <tr>
                            <td>
                                <img src="<?= htmlspecialchars($item['thumbnail']) ?>" alt="thumbnail" style="width: 50px; height: 50px; object-fit: cover;" class="me-2">
                                <?= htmlspecialchars($item['title']) ?>
                            </td>
                            <td><?= number_format($item['price'], 2) ?> €</td>
                            <td><?= $item['quantite'] ?></td>
                            <td><?= number_format($sous_total, 2) ?> €</td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
                <tfoot>
                    <tr>
                        <th colspan="3" class="text-end">Total :</th>
                        <th class="fs-5"><?= number_format($total, 2) ?> €</th>
                    </tr>
                </tfoot>
            </table>
        </div>

        <div class="d-flex justify-content-between mt-4">
            <a href="index.php" class="btn btn-secondary">Continuer les achats</a>
            <form method="POST" action="actions/vider_panier.php">
                <button type="submit" class="btn btn-danger">Vider le panier</button>
            </form>
        </div>
    <?php endif; ?>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>