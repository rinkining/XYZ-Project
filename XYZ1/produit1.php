<?php
session_start();

if (!isset($_SESSION['panier'])) {
    $_SESSION['panier'] = [];
}

if (isset($_POST['ajouter'])) {

    $produit = [
        "nom" => "Sony WH-1000XM6",
        "prix" => 350,
        "quantite" => 1
    ];

    $_SESSION['panier'][] = $produit;

    header("Location: shoppingcart.php");
    exit();
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Produit 1</title>
    <link rel="stylesheet" href="stylish.css">
</head>

<body>

<nav class="navbar">
    <div class="logo">
        <img src="Logo.png" alt="XYZ Music Logo">
    </div>

    <div class="menu">
        <h2><a href="index.php">Accueil</a></h2>
        <h2><a href="boutique.php">Boutique</a></h2>
        <h2><a href="propos.php">À propos</a></h2>
        <h2><a href="contact.php">Contact</a></h2>
    </div>

    <div class="menu_droite">
        <?php if (isset($_SESSION["id"])) : ?>
            <h2 style="color: darkblue;">Bonjour <?= htmlspecialchars($_SESSION["nom"]); ?></h2>
            <h2><a href="logout.php">Déconnexion</a></h2>
            <h2><a href="shoppingcart.php">Panier</a></h2>
        <?php else : ?>
            <h2><a href="register.php">S'inscrire</a></h2>
            <h2><a href="login.php">Se connecter</a></h2>
            <h2><a href="shoppingcart.php">Panier</a></h2>
        <?php endif; ?>
    </div>
</nav>

<main>

    <div class="container">

        <h1>Sony WH-1000XM6</h1>

        <img src="SONYWH-1000XM6.jpg" width="300">

        <p>Casque audio haut de gamme avec réduction de bruit.</p>

        <h2>Prix : 350 €</h2>

        
        <form method="POST">
            <button type="submit" name="ajouter">
                Ajouter au panier
            </button>
        </form>

    </div>

</main>

</body>
</html>