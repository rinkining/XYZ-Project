<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Accueil | XYZ Music</title>
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
        <h2><a href="faq.php">FAQ</a></h2>
    </div>

    <div class="menu_droite">
        <?php if (isset($_SESSION["id"])) : ?>
    <h2>
        Bonjour <?= htmlspecialchars($_SESSION["nom"]) ?>
    </h2>
    <h2><a href="logout.php">Déconnexion</a></h2>
    <h2><a href="shoppingcart.php">Panier</a></h2>
<?php else: ?>
    <h2><a href="register.php">S'inscrire</a></h2>
    <h2><a href="login.php">Se connecter</a></h2>
    <h2><a href="shoppingcart.php">Panier</a></h2>
<?php endif; ?>
    </div>
</nav>

<main>
    <div class="container">

        <h3>Bienvenue chez <b>XYZ Music</b></h3>

        <p>
            Ici retrouvez chaque semaine le meilleur de la musique à un prix abordable.<br>
            Que vous soyez passionné de musique, de jeux vidéo ou simplement à la recherche d’un bon casque,
            vous êtes au bon endroit.
        </p>

        <p>
            Nous proposons une large sélection de casques et écouteurs alliant performance,
            confort et design.
        </p>

        <button onclick="window.location.href='boutique.php'">
            Découvrir la boutique
        </button>

        
        <div id="message-retour" style="display:none; margin-top:20px;">
            <a id="lien-retour">⬅ Retour à la page précédente</a>
        </div>

        <h4>Nos produits incontournables de la semaine :</h4>

        <div class="produits">

            <div class="produit">
                <h5>Casque Sony WH-1000XM6</h5>
                <p>Prix : 350€</p>
                <a href="produit1.php">
                    <img src="SONYWH-1000XM6.jpg" alt="Sony WH-1000XM6" width="300">
                </a>
            </div>

            <div class="produit">
                <h5>Écouteurs Sennheiser IE 200</h5>
                <p>Prix : 140€</p>
                <a href="produit2.php">
                    <img src="SennheiserIE200.png" alt="Sennheiser IE 200" width="300">
                </a>
            </div>

        </div>

    </div>
</main>


<footer>
    <div>
        <p>
            David-LIN Joris-FARRUGIA<br>
            © 2026 XYZ Music – Tous droits réservés<br>
            Contact : contact@xyzmusic.com<br>
            +33 9 19 29 B9
        </p>
    </div>

    <div class="footer-social">
        <a href="#"><img src="facebook-icon-free-png.png" alt="Facebook" width="50"></a>
        <a href="#"><img src="Instagram-Icon.png" alt="Instagram" width="50"></a>
        <a href="#"><img src="youtube-color-icon.png" alt="YouTube" width="50"></a>
    </div>
</footer>


<script>
    const dernierePage = localStorage.getItem("derniere_page");

    if (dernierePage && !dernierePage.includes("index.php")) {
        document.getElementById("message-retour").style.display = "block";
        document.getElementById("lien-retour").href = dernierePage;
    }

    localStorage.setItem("derniere_page", window.location.href);
</script>

</body>
</html>