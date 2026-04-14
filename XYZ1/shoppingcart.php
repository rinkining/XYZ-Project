<?php
session_start();
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Panier | XYZ Music</title>
    <link rel="stylesheet" href="stylish.css">
</head>

<body>

<!-- NAVBAR -->
<nav class="navbar">

    <div class="logo">
        <img src="Logo.png" alt="Logo">
    </div>

    <div class="menu">
        <h2><a href="index.php">Accueil</a></h2>
        <h2><a href="boutique.php">Boutique</a></h2>
        <h2><a href="propos.php">À propos</a></h2>
        <h2><a href="contact.php">Contact</a></h2>
        <h2><a href="faq.php">FAQ</a></h2>
    </div>

    <div class="menu_droite">
        <?php if (isset($_SESSION["id"])) : ?>
            Bonjour <?= htmlspecialchars($_SESSION["nom"]) ?>
            <a href="logout.php">Déconnexion</a>
        <?php else : ?>
            <a href="login.php">Connexion</a>
        <?php endif; ?>
    </div>

</nav>


<main>
<div class="container">

<h1>Mon panier</h1>

<table border="1" width="100%">
    <thead>
        <tr>
            <th>Produit</th>
            <th>Prix</th>
            <th>Quantité</th>
            <th>Total</th>
        </tr>
    </thead>

    <tbody>
        <?php include "cart_items.php"; ?>
    </tbody>
</table>

<h2>
    Total : <?= $_SESSION['total'] ?? 0 ?> €
</h2>

</div>
</main>
<footer>
      <div>
        <p>David-LIN Joris-FARRUGIA</br>
        © 2026 AudioZone – Tous droits réservés</br>
        Contact : contact@xyzmusic.com </br>
        | +33 9 19 29 B9 </p>
      </div>
        <div class=footer-social>
        <a href="https://www.facebook.com/share/g/1C6cMV9t8z/"><img src="facebook-icon-free-png.png" alt="Facebook" width="50px" height="50px"></a>
        <a href="https://www.instagram.com/qaqtrash/"><img src="Instagram-Icon.png" alt="Instagram" width="50px" height="50px"></a>
        <a href="https://www.youtube.com/@XYZMusicGxng"><img src="youtube-color-icon.png" alt="YouTube" width="50px" height="50px"></a>
        </div>
    </footer>
</body>
</html>