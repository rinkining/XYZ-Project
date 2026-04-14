<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Casques | XYZ Music</title>
    <link rel="stylesheet" href="stylish.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">

    <div class="logo">
        <img src="Logo.png" alt="XYZ Music Logo" height="60">
    </div>

    <div class="menu">
        <a href="index.php">Accueil</a>
        <a href="boutique.php">Boutique</a>
        <a href="casques.html">Casques</a>
        <a href="ecouteurs.html">Écouteurs</a>
        <a href="contact.php">Contact</a>
    </div>

    <div class="menu_droite">
        <a href="login.php">Connexion</a>
        <a href="panier.php">Panier</a>
    </div>

</nav>

<!-- CONTENU -->
<main>

<div class="container">

    <h1>🎧 Catégorie : Casques</h1>

    <div class="products">

        <!-- PRODUIT 1 -->
        <div class="product-card">
            <img src="SONYWH-1000XM6.jpg" alt="Sony WH-1000XM6" width="200">
            <h3>Sony WH-1000XM6</h3>
            <p>Casque haut de gamme avec réduction de bruit active.</p>
            <h4>99.99 €</h4>

            <button onclick="window.location.href='add_sony.php'">
                Ajouter au panier
            </button>
        </div>

        <!-- PRODUIT 2 -->
        <div class="product-card">
            <img src="casquesimple.png" alt="Bose 700" width="200">
            <h3>Bose Noise Cancelling 700</h3>
            <p>Confort premium et son équilibré.</p>
            <h4>299 €</h4>

            <button onclick="window.location.href='add_bose.php'">
                Ajouter au panier
            </button>
        </div>

    </div>

</div>

</main>

<!-- FOOTER -->
<footer>

    <p>
        © 2026 XYZ Music<br>
        Tous droits réservés
    </p>

</footer>

</body>
</html>