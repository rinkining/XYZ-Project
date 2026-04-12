<?php
session_start();

$host = 'localhost';
$username = 'root'; 
$password = 'admin';     
$dbname = 'XYZMusic';

$conn = mysqli_connect($host, $username, $password, $dbname);

if (!$conn) {
    die("Erreur de connexion : " . mysqli_connect_error());
}

$error = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = $_POST["username"];
    $pass  = $_POST["password"];


    $sql = "SELECT id_utilisateur, nom, mot_de_passe 
            FROM Utilisateur 
            WHERE email=?";

    $stmt = mysqli_prepare($conn, $sql);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);

    $result = mysqli_stmt_get_result($stmt);

    if ($user = mysqli_fetch_assoc($result)) {

        
        if (password_verify($pass, $user["mot_de_passe"])) {

            $_SESSION["id"]  = $user["id_utilisateur"];
            $_SESSION["nom"] = $user["nom"];

            header("Location: boutique.php");
            exit();

        } else {
            $error = "Mot de passe incorrect";
            
        }

    } else {
        $error = "Utilisateur introuvable";
        
    }
}
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
    <nav class="navbar">        <!--Début de la navbar-->

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
        <h2><a href="register.php">S'inscrire</a></h2>
        <h2><a href="login.php">Se connecter</a></h2>
        <h2><a href="basket.html">Panier</a></h2>
    </div>
    </nav>                      <!--Fin de la navbar-->
    <main>
            <div class="container">
                <form action="login.php" method="post">
                    <h1>Bienvenue sur la page de connexion</h1>
                    <?php if (!empty($error)) : ?>
                        <p style="color:red; text-align:center;">
                            <?= $error ?>
                        </p>
                        <?php endif; ?>

                    <label><b>Nom d'utilisateur</b></label>
                    <input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required>
                
                    <label><b>Mot de passe</b></label>
                    <input type="password" placeholder="Entrer le mot de passe" name="password" required>
                
                    <input type="submit" id="submit" value="LOGIN">

                    <p>Vous n'avez pas de compte ?</p>
                    <a href="register.php">Inscrivez-vous</a>
                </form>
        </div>
    </main>
    </body>