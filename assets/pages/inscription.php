<?php
// inscription.php
session_start();
require_once 'config.php';

$erreurs = [];
$nom = $email = "";

if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $nom = trim($_POST["nom"]);
    $email = trim($_POST["email"]);
    $password = $_POST["password"];

    // Validation
    if (empty($nom) || strlen($nom) < 2) {
        $erreurs[] = "Le nom doit contenir au moins 2 caractères";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $erreurs[] = "Email invalide";
    }

    if (strlen($password) < 8) {
        $erreurs[] = "Le mot de passe doit contenir au moins 8 caractères";
    }


    if (empty($erreurs)) {
        $dsn = 'mysql:dbname=aurora;host=127.0.0.1';
        $user = 'root';
        $password = '';

        $pdo = new PDO($dsn, $user, $password);

        $sql = "SELECT id FROM utilisateurs WHERE email = :email";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([':email' => $email]);

        if ($stmt->fetch()) {
            $erreurs[] = "Cet email est déjà utilisé";
        }
    }

    // Si pas d'erreurs, créer l'utilisateur
    if (empty($erreurs)) {
        // TOUJOURS hasher le mot de passe !
        $passwordHash = password_hash($password, PASSWORD_DEFAULT);

        $sql = "INSERT INTO utilisateurs (nom, email, mot_de_passe) VALUES (:nom, :email, :password)";
        $stmt = $pdo->prepare($sql);
        $stmt->execute([
            ':nom' => $nom,
            ':email' => $email,
            ':password' => $passwordHash
        ]);

        $_SESSION['message'] = "Inscription réussie ! Vous pouvez vous connecter.";
        header("Location: connexion.php");
        exit;
    }
}
?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Aurora - Inscription</title>
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <nav class="navbar-expand">
        <div class="menu-toggle" id="menu-toggle">☰</div>

        <ul id="nav-links">
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/assets/pages/services.php">Nos services</a></li>
            <li><a href="/assets/pages/contact.php">Prendre rendez-vous</a></li>
            <li><a href="/assets/pages/connexion.php">Se connecter</a></li>
            <li><a href="/assets/pages/contact.php">Nous Contacter</a></li>


        </ul>
    </nav>
    <div class="inscription">
        <form action="#" method="post" class="sigin-form">
            <label for="name">Nom</label>
            <input type="name" id="name" placeholder="Votre Nom" required>

            <form action="#" method="post" class="sigin-form">
                <label for="firstname">Prenom</label>
                <input type="firstname" id="firstname" placeholder="Votre Prenom" required>

                <form action="#" method="post" class="sigin-form">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Votre email" required>

                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" placeholder="Votre mot de passe" required>

                    <button type="submit">Connexion</button>
                    </section>
    </div>
    <script>
        const toggle = document.getElementById("menu-toggle");
        const navLinks = document.getElementById("nav-links");

        toggle.addEventListener("click", () => {
            navLinks.classList.toggle("active");
        });
    </script>


    <footer>
        <p>Politique de confidentialité - Conditions générales d’utilisation</p>
        <p>&copy;2026 Aurora Hair Salon. Tous droits réservés.</p>
    </footer>

</body>

</html>