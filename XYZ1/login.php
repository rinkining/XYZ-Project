<?php
session_start();

$host   = 'localhost';
$username = 'root';
$password = 'admin';
$dbname = 'XYZMusic';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["username"] ?? '');
    $pass  = $_POST["password"] ?? '';

    $sql = "SELECT id_utilisateur, nom, mot_de_passe
            FROM Utilisateur
            WHERE email = ?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {

        if (password_verify($pass, $user["mot_de_passe"])) {

            $_SESSION["id"]  = $user["id_utilisateur"];
            $_SESSION["nom"] = $user["nom"];

            mysqli_stmt_close($stmt);
            mysqli_close($conn);

            header("Location: boutique.php");
            exit();

        } else {
            $error = "Mot de passe incorrect";
        }

    } else {
        $error = "Utilisateur introuvable";
    }

    mysqli_stmt_close($stmt);
}

mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | XYZ Music</title>
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

    <!-- Navbar session-aware : même logique que les autres pages -->
    <div class="menu_droite">
        <?php if (isset($_SESSION["id"])) : ?>
            <h2 style="color: darkblue;">Bonjour <?= htmlspecialchars($_SESSION["nom"]); ?></h2>
            <h2><a href="logout.php">Déconnexion</a></h2>
            <h2><a href="shoppingcart.php">Panier</a></h2>
        <?php else : ?>
            <h2><a href="register.php">S'inscrire</a></h2>
            <h2><a href="login.php">Se connecter</a></h2>
            <h2><a href="shoppingcart.html">Panier</a></h2>
        <?php endif; ?>
    </div>
</nav>

<main>
    <div class="container">
        <form action="login.php" method="post">
            <h1>Bienvenue sur la page de connexion</h1>

            <?php if (!empty($error)) : ?>
                <p style="color:red; text-align:center;">
                    <?= htmlspecialchars($error) ?>
                </p>
            <?php endif; ?>

            <label><b>Email</b></label>
            <input type="email" placeholder="Entrer votre email" name="username" required>

            <label><b>Mot de passe</b></label>
            <input type="password" placeholder="Entrer le mot de passe" name="password" required>

            <input type="submit" id="submit" value="LOGIN">

            <p>Vous n'avez pas de compte ?</p>
            <a href="register.php">Inscrivez-vous</a>
        </form>
    </div>
</main>

<footer>
    <div>
        <p>
            David-LIN Joris-FARRUGIA<br>
            © 2026 AudioZone – Tous droits réservés<br>
            Contact : contact@xyzmusic.com<br>
            | +33 9 19 29 39
        </p>
    </div>

    <div class="footer-social">
        <a href="#"><img src="facebook-icon-free-png.png" width="50"></a>
        <a href="#"><img src="Instagram-Icon.png" width="50"></a>
        <a href="#"><img src="youtube-color-icon.png" width="50"></a>
    </div>
</footer>

<script>
    // ── Dernière page visitée ──────────────────────────────────────────
    localStorage.setItem("derniere_page", window.location.href);
</script>

</body>
</html>