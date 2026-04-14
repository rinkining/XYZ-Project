<?php session_start(); ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>À propos | XYZ Music</title>
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
        <h2><a href="faq.php">FAQ</a></h2>
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

        <section>
            <h2>Notre histoire</h2>
            <p>
                XYZ Music est née d'une blague lancée lors d'une soirée un peu trop arrosée. 
                Alors que nous discutions avec mon associé, nous avons réalisé que le monde 
                de la vente de casques audio et d'écouteurs était rempli de personnes peu 
                passionnées et avides d'argent. Ce moment de lucidité inattendue a donné 
                naissance à XYZ Music.
            </p>
        </section>

        <section>
            <h2>Notre mission</h2>
            <p>
                Proposer une alternative authentique dans l'univers de l'audio : une boutique 
                basée sur la passion, l'honnêteté et le conseil de qualité, bien avant le profit.
            </p>
        </section>

        <section>
            <h2>Nos valeurs</h2>
            <ul>
                <li> Passion pour l'audio et la musique</li>
                <li> Honnêteté et transparence</li>
                <li> Produits de qualité</li>
                <li> Service client à l'écoute</li>
                <li> Prix justes</li>
            </ul>
        </section>

        <section>
            <h2>Notre équipe</h2>

            <div class="team">
                <div class="member">
                    <img src="david.png" alt="David-LIN">
                    <h3>David-LIN</h3>
                    <p>Co-fondateur, responsable des ventes et développeur principal</p>
                </div>

                <div class="member">
                    <img src="joris.png" alt="Joris-FARRUGIA">
                    <h3>Joris-FARRUGIA</h3>
                    <p>Co-fondateur, responsable technique et réseau</p>
                </div>
            </div>
        </section>

        <section>
            <h2>Pourquoi nous choisir ?</h2>
            <p>
                Nous privilégions la passion à la vente. Chaque produit est sélectionné 
                avec exigence pour offrir la meilleure expérience audio possible.
            </p>
        </section>

    </div>
</main>


<footer>
    <div>
        <p>
            David-LIN & Joris-FARRUGIA<br>
            © 2026 XYZ Music – Tous droits réservés<br>
            Contact : contact@xyzmusic.com<br>
            +33 9 19 29 89
        </p>
    </div>

    <div class="footer-social">
        <a href="#"><img src="facebook-icon-free-png.png" alt="Facebook" width="50"></a>
        <a href="#"><img src="Instagram-Icon.png" alt="Instagram" width="50"></a>
        <a href="#"><img src="youtube-color-icon.png" alt="YouTube" width="50"></a>
    </div>
</footer>

<script>
    localStorage.setItem("derniere_page", window.location.href);
</script>

</body>
</html>