<?php
session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $price = $_POST['price'];
    $thumbnail = $_POST['thumbnail'];
    
    $produit_existe = false;
    if (isset($_SESSION['panier'])) {
        foreach ($_SESSION['panier'] as &$item) {
            if ($item['id'] == $id) {
                $item['quantite']++;
                $produit_existe = true;
                break;
            }
        }
    }

    if (!$produit_existe) {
        $_SESSION['panier'][] = [
            'id' => $id,
            'title' => $title,
            'price' => $price,
            'thumbnail' => $thumbnail,
            'quantite' => 1
        ];
    }
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
exit();
?>