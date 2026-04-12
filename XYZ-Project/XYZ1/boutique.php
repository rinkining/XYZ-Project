<?php
session_start();
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>XYZ Music Boutique</title>
<link href="stylish.css" rel="stylesheet">
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
        <h2 style="color: darkblue;">Bonjour <?= htmlspecialchars($_SESSION["nom"]); ?> </h2>
        <h2><a href="logout.php">Déconnexion</a></h2>
        <h2><a href="panier.php">Panier</a></h2>
    <?php else : ?>
        <h2><a href="register.php">S'inscrire</a></h2>
        <h2><a href="login.php">Se connecter</a></h2>
        <h2><a href="shoppingcart.html">Panier</a></h2>
    <?php endif; ?>
</div>

</nav>

<main>
    <div class="container">

        <h1>Notre Boutique</h1>
        <p class="decouvrez">Découvrez nos produits audio de haute qualité.</p>

        <div class="categories-btn">
            <a href="casques.html" class="btn-cat">Voir les casques 🎧</a>
            <a href="ecouteurs.html" class="btn-cat">Voir les écouteurs 🎵</a>
        </div>

        <div class="produits-grid">

            <div class="produit">
                <img src="images/casque1.png">
                <h3>Casque Pro X</h3>
                <p>199€</p>
                <a href="casques.html" class="btn">Voir les casques</a>
            </div>

            <div class="produit">
                <img src="images/casque2.png">
                <h3>Casque Bass+</h3>
                <p>159€</p>
                <a href="casques.html" class="btn">Voir les casques</a>
            </div>

            <div class="produit">
                <img src="images/ecouteur1.png">
                <h3>Écouteurs AirSound</h3>
                <p>129€</p>
                <a href="ecouteurs.html" class="btn">Voir les écouteurs</a>
            </div>

            <div class="produit">
                <img src="images/ecouteur2.png">
                <h3>MiniPods</h3>
                <p>99€</p>
                <a href="ecouteurs.html" class="btn">Voir les écouteurs</a>
            </div>

        </div>

    </div>
</main>

</body>
</html>
