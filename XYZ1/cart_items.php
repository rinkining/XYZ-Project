<?php
// Exemple de produit (à remplacer par ta BDD plus tard)
$product = [
    "id" => 1,
    "name" => "Casque Audio Premium",
    "price" => 99.99,
    "image" => "casque.jpg",
    "quantity" => 1
];
?>

<div class="cart-item">

    <!-- Image produit -->
    <div class="cart-item-image">
        <img src="<?= htmlspecialchars($product["image"]); ?>" alt="<?= htmlspecialchars($product["name"]); ?>">
    </div>

    <!-- Infos produit -->
    <div class="cart-item-info">
        <h3><?= htmlspecialchars($product["name"]); ?></h3>
        <p><?= number_format($product["price"], 2); ?> €</p>
    </div>

    <!-- Quantité -->
    <div class="cart-item-quantity">
        <form method="post" action="update_cart.php">
            <input type="hidden" name="id" value="<?= $product["id"]; ?>">
            <input type="number" name="quantity" value="<?= $product["quantity"]; ?>" min="1">
            <button type="submit">✔</button>
        </form>
    </div>

    <!-- Supprimer -->
    <div class="cart-item-remove">
        <form method="post" action="remove_from_cart.php">
            <input type="hidden" name="id" value="<?= $product["id"]; ?>">
            <button type="submit">❌</button>
        </form>
    </div>

</div>