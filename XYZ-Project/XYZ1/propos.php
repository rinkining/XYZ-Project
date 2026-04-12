<?php
session_start(); // Démarre la session pour garder l'utilisateur connecté
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<title>À propos - XYZ Music</title>
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
        <h2><a href="panier.php">Panier</a></h2>
    <?php else : ?>
        <h2><a href="register.php">S'inscrire</a></h2>
        <h2><a href="login.php">Se connecter</a></h2>
        <h2><a href="panier.php">Panier</a></h2>
    <?php endif; ?>
  </div>

</nav>

<main>
  <div class="container">

    <h1>À propos de XYZ Music</h1>

    <p>
      Chez <strong>XYZ Music</strong>, nous sommes passionnés par le son.  
      Nous sélectionnons les meilleurs casques et écouteurs pour que chaque note de votre musique soit parfaite.
    </p>

    <h2>Notre mission</h2>
    <p>
      Offrir à tous les amateurs de musique un choix de produits de qualité, avec un service rapide et fiable.
    </p>

    <h2>Nos valeurs</h2>
    <ul>
      <li>Qualité sonore exceptionnelle</li>
      <li>Service client réactif et professionnel</li>
      <li>Livraison rapide et sécurisée</li>
      <li>Produits fiables et testés</li>
    </ul>

  </div>
</main>

<footer>
  <p>&copy; 2026 XYZ Music. Tous droits réservés.</p>
</footer>

</body>
</html>