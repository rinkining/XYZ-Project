   <?php
session_start();

$host = "localhost";
$user = "root";
$pass = "admin";
$db   = "XYZMusic";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Erreur connexion : " . mysqli_connect_error());
}

$error = "";
$success = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $nom       = trim($_POST["nom"] ?? '');
    $email     = trim($_POST["email"] ?? '');
    $password  = $_POST["password"] ?? '';
    $adresse   = trim($_POST["adresse"] ?? '');
    $telephone = trim($_POST["telephone"] ?? '');

    if (empty($nom) || empty($email) || empty($password) || empty($adresse) || empty($telephone)) {
        $error = "Tous les champs sont obligatoires";
    } else {

        // Vérifier si email existe déjà
        $check = "SELECT id_utilisateur FROM Utilisateur WHERE email=?";
        $stmtCheck = mysqli_prepare($conn, $check);
        mysqli_stmt_bind_param($stmtCheck, "s", $email);
        mysqli_stmt_execute($stmtCheck);
        mysqli_stmt_store_result($stmtCheck);

        if (mysqli_stmt_num_rows($stmtCheck) > 0) {
            $error = "Cet email existe déjà";
        } else {

            // Hash sécurisé
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $sql = "INSERT INTO Utilisateur (nom, email, mot_de_passe, adresse, telephone) 
                    VALUES (?, ?, ?, ?, ?)";

            $stmtInsert = mysqli_prepare($conn, $sql);
            mysqli_stmt_bind_param($stmtInsert, "sssss", $nom, $email, $hash, $adresse, $telephone);

            if (mysqli_stmt_execute($stmtInsert)) {
                $success = "Inscription réussie ! <a href='login.php'>Connectez-vous ici</a>";
            } else {
                $error = "Erreur inscription : " . mysqli_error($conn);
            }
        }
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
        <main>
      <div class="container">
    <form action="register.php" method="post">
        <h1>Créer un compte</h1>

        <!-- Message erreur / succès -->
        <?php if (!empty($error)) : ?>
            <p style="color:red; text-align:center;">
                <?= $error ?>
            </p>
        <?php endif; ?>

        <?php if (!empty($success)) : ?>
            <p style="color:green; text-align:center;">
                <?= $success ?>
            </p>
        <?php endif; ?>

        <label><b>Nom</b></label>
        <input type="text" placeholder="Entrer votre nom" name="nom" required>

        <label><b>Email</b></label>
        <input type="email" placeholder="Entrer votre email" name="email" required>

        <label><b>Mot de passe</b></label>
        <input type="password" placeholder="Entrer le mot de passe" name="password" required>

        <label><b>Adresse</b></label>
        <input type="text" placeholder="Votre adresse" name="adresse" required>

        <label><b>Téléphone</b></label>
        <input type="text" placeholder="Votre numéro" name="telephone" required>

        <input type="submit" id="submit" value="Créer le compte">

        <p>Vous avez déjà un compte ?</p>
        <a href="login.php">Connectez-vous</a>
    </form>
</div>
    </main>