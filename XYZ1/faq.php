    <?php
session_start(); 
?>
    <!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Contact | XYZ Music </title>
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
            <h3>Bienvenue dans la page FAQ, Ici vous retrouverez toutes les questions frequement posées ainsi que leur réponse</h3>
            <h4>Combien de temps faut-il au maximum pour que mon produit soit livré chez moi ?</h4>
            <p>Généralement il faudra au maximum 15 jours pour que votre produit soit livré, si au bout de 15 jours vous ne recevez toujours pas votre produit
                c'est probablement parce que l'on l'a perdu et il n'y aura pas de remboursement partiel ni total, donc espèrez pas le revoir et n'hésitez pas à en commander un deuxième et avec un peu de chance,
                celui-ci ne sera pas perdu </p>
            <h4>Il y a-t-il une garantie pour les produits</h4>
            <p>Il y a bel et bien une garantie sur chaque produits de 1 semaines, 1 jours, et 12min à partir du début de l'envoie du produit,
                cependant pour obtenir une garantie plus longue il faudra que vous payez la modique somme de 159€ TTC afin de bénéficier d'une garantie aléatoirement
                choisie entre 1 heure et 11 années supplémentaires</p>
                <p>PS: Cette extension n'est pas remboursable et nous ne sommes pas responsable de la durée supplémentaires, pour toute information supplémentaire,
                    veuillez vous référez à la page dédiés aux conditions générales d'utilisation <a href="cgu.php"> ICI </a></p>
            <h4>Comment fonctionne la garantie des produits</h4>
            <p>La garantie du produit n'est applicable que si le produit subi un dysfonctionnement directement ou indirectement lié à l'utilisation du produit
                Veuillez vous référez aux conditions générales d'utilisation <a href="cgu.php"> ICI </a></p>
            <h4>Comment fonctionne le système de retour des produits</h4>
            <p>Si vous avec reçu un produit non cohérent avec votre achat, ou que vous souhaitez appliqué la garantie, il est important de détruire votre produit
                ainsi que de vous filmer en train de le faire 
        </div>
    </main>
    </nav>                      <!--Fin de la navbar-->
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