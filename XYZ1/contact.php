<?php
session_start(); // Toujours démarrer la session en haut
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact | XYZ Music</title>
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
    <form action="contact_process.php" method="post">
        <h1>Vous voulez nous contacter ?</h1>

        <label><b>Nom et Prénom</b></label>
        <input type="text" placeholder="Nom et prénom" name="name" required>

        <label><b>Numéro de Téléphone</b></label>
        <input type="tel" placeholder="Entrer votre numéro" name="phone" required>

        <label><b>Adresse Email</b></label>
        <input type="email" placeholder="Entrer l'adresse email" name="email" required>

        <label><b>Votre demande</b></label>
        <textarea rows="10" name="message" placeholder="Dites-nous..." required></textarea>

        <label><b>Type de demande :</b></label>
        <select name="type_demande" required>
          <option value="">Choisir votre type de demande</option>
          <option value="professionnel">Professionnel</option>
          <option value="rendezvous">Rendez-vous</option>
          <option value="renseignement">Renseignement</option>
          <option value="support">Support</option>
        </select>

        <input type="submit" id="submit" value="SEND IT">
    </form>
  </div>
</main>

</body>
</html>