<?php
session_start();

if (isset($_POST['product_id'])) {
    $product_id = $_POST['product_id'];
    $cart = &$_SESSION['cart'];

    // Parcourez le panier pour trouver le produit à décrémenter
    foreach ($cart as $key => $item) {
        if ($item['product_id'] === $product_id) {
            // Décrémente la quantité
            $cart[$key]['quantity'] = max(0, $item['quantity'] - 1);
            break;
        }
    }
}

// Redirige l'utilisateur vers la page de la commande
header("Location: commande_co.php");
exit();

?>
