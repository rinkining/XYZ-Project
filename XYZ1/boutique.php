<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Boutique | XYZ Music</title>
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
            <h2 style="color: darkblue;">Bonjour <?= htmlspecialchars($_SESSION["nom"]); ?></h2>
            <h2><a href="logout.php">Déconnexion</a></h2>
            <h2><a href="shoppingcart.php">Panier (<span id="compteur-panier">0</span>)</a></h2>
        <?php else : ?>
            <h2><a href="register.php">S'inscrire</a></h2>
            <h2><a href="login.php">Se connecter</a></h2>
            <h2><a href="shoppingcart.php">Panier (<span id="compteur-panier">0</span>)</a></h2>
        <?php endif; ?>
    </div>
</nav>

<main>
      <div class="container">
<h3>Bienvenue dans la boutique</h3>
<p>Veuillez choisir votre catégorie d'équipement</p>
<section class="categories">

<h2>Nos catégories</h2>

<div class="categorie-container">

    <div class="categorie">
        <a href="casques.php">
        <img src="casquesimple.png" alt="Casques">
        <h3>Casques</h3>
        </a>
    </div>

    <div class="categorie">
        <a href="ecouteurs.php">
        <img src="eccouteursimple.png" alt="Écouteurs">
        <h3>Écouteurs</h3>
        </a>
    </div>
</div>

</section>
</main>
</div>
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
    <script>
   

    function mettreAJourCompteur() {
        const panier = JSON.parse(localStorage.getItem("panier")) || [];
        const total = panier.reduce((acc, p) => acc + p.quantite, 0);
        const compteur = document.getElementById("compteur-panier");
        if (compteur) compteur.textContent = total;
    }

    // Ajoute un produit au panier
    function ajouterAuPanier(bouton) {
        const produit = bouton.closest(".produit");
        const nom     = produit.dataset.nom;
        const prix    = parseFloat(produit.dataset.prix);

        let panier = JSON.parse(localStorage.getItem("panier")) || [];

        const index = panier.findIndex(p => p.nom === nom);

        if (index !== -1) {
            panier[index].quantite++;
        } else {
            
            panier.push({ nom, prix, quantite: 1 });
        }

        localStorage.setItem("panier", JSON.stringify(panier));
        mettreAJourCompteur();

       
        bouton.textContent = " Ajouté !";
        bouton.disabled = true;
        setTimeout(() => {
            bouton.textContent = "🛒 Ajouter au panier";
            bouton.disabled = false;
        }, 1500);
    }

    localStorage.setItem("derniere_page", window.location.href);


    mettreAJourCompteur();
</script>
</body>
</html>