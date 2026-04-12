<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>Contact | XYZ Music</title>
<link href="stylish.css" rel="stylesheet">
</head>

<body>

<nav class="navbar">
    <!-- Logo -->
    <div class="logo">
        <img src="Logo.png" alt="XYZ Music Logo">
    </div>

    <!-- Menu -->
    <div class="menu">
        <h2><a href="index.php">Accueil</a></h2>
        <h2><a href="boutique.php">Boutique</a></h2>
        <h2><a href="propos.php">À propos</a></h2>
        <h2><a href="contact.php">Contact</a></h2>
    </div>

    <!-- Menu droite avec PHP -->
    <div class="menu_droite">
        <?php if (isset($_SESSION["id"])) : ?>
            <h2 style="color: darkblue;">
                Bonjour <?= htmlspecialchars($_SESSION["nom"]); ?>
            </h2>
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
        <h3>QUI SOMMES-NOUS ?</h3>
        <p>
            Nous sommes XYZ Music, une entreprise spécialisée dans le domaine de l'audio.
            Nous souhaitons mettre nos connaissances à votre disposition et vous proposer
            des produits de haute qualité.
        </p>

        <section class="categories">
            <h2>Nos catégories</h2>
            <div class="categorie-container">
                <div class="categorie">
                    <img src="CasqueAccueil.png">
                    <h3>Casques</h3>
                    <a href="casques.html">Voir les casques</a>
                </div>

                <div class="categorie">
                    <img src="EcouteurAccueil.png">
                    <h3>Écouteurs</h3>
                    <a href="ecouteurs.html">Voir les écouteurs</a>
                </div>
            </div>
        </section>
    </div>
</main>

<footer>
    <div>
        <p>
            David-LIN Joris-FARRUGIA<br>
            © 2026 AudioZone – Tous droits réservés<br>
            Contact : contact@xyzmusic.com<br>
            | +33 9 19 29 B9
        </p>
    </div>

    <div class="footer-social">
        <a href="#"><img src="facebook-icon-free-png.png" width="50"></a>
        <a href="#"><img src="Instagram-Icon.png" width="50"></a>
        <a href="#"><img src="youtube-color-icon.png" width="50"></a>
    </div>
</footer>

</body>
</html>