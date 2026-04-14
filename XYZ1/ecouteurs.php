<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Écouteurs | XYZ Music</title>
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

    <h1>🎧 Catégorie : Écouteurs</h1>

    <div class="products">

        <!-- PRODUIT 1 -->
        <div class="product-card">
            <img src="SennheiserIE200.png" alt="Sennheiser IE 200">
            <h3>Sennheiser IE 200</h3>
            <p>Écouteurs filaires haute précision pour audiophiles.</p>
            <h4>140 €</h4>

            <button onclick="window.location.href='add_sennheiser.php'">
                Ajouter au panier
            </button>
        </div>

        <!-- PRODUIT 2 -->
        <div class="product-card">
            <img src="airpods_pro_2.jpg" alt="AirPods Pro 2">
            <h3>AirPods Pro 2</h3>
            <p>Réduction de bruit active et son spatial Apple.</p>
            <h4>279 €</h4>

            <button onclick="window.location.href='add_airpods_pro.php'">
                Ajouter au panier
            </button>
        </div>

        <!-- PRODUIT 3 -->
        <div class="product-card">
            <img src="sony_wf1000xm5.jpg" alt="Sony WF-1000XM5">
            <h3>Sony WF-1000XM5</h3>
            <p>Écouteurs sans fil premium avec ANC avancé.</p>
            <h4>320 €</h4>

            <button onclick="window.location.href='add_sony_ecouteurs.php'">
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