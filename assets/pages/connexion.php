<?php

session_start();

require '../includes/header.php';

try {
    $pdo = new PDO(
        "mysql:host=localhost;dbname=aurora;charset=utf8",
        "root",
        "",
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
    );
} catch (PDOException $e) {
    die("Erreur de connexion BDD");
}

$email = "";
$errors = [
    "email" => "",
    "password" => ""
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $email = trim($_POST["email"] ?? "");
    $password = trim($_POST["password"] ?? "");

    // 🔹 validation email
    if (empty($email)) {
        $errors["email"] = "Email requis";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Email invalide";
    }

    // 🔹 validation password
    if (empty($password)) {
        $errors["password"] = "Mot de passe requis";
    }

    // 🔹 debug brut (à enlever après)
    echo "<pre>";
    echo "EMAIL POST : ";
    var_dump($email);
    echo "PASSWORD POST : ";
    var_dump($password);
    echo "</pre>";

    if (!array_filter($errors)) {

        try {
            $stmt = $pdo->prepare("SELECT Id_users, email, password FROM users WHERE email = :email");
            $stmt->execute([
                ":email" => $email
            ]);

            $user = $stmt->fetch();

            // 🔹 debug user récupéré
            echo "<pre>";
            echo "USER EN BDD : ";
            var_dump($user);
            echo "</pre>";

            if ($user) {

                // 🔹 test du hash
                echo "<pre>";
                echo "RESULTAT password_verify : ";
                var_dump(password_verify('nintendo', $user["password"]));
                echo "</pre>";

                // 🔹 test du format du hash
                echo "<pre>";
                echo "HASH EN BASE : ";
                var_dump($user["password"]);
                echo "</pre>";
                var_dump(password_verify('nintendo', $user["password"]));
                if (password_verify('nintendo', $user["password"])) {

                    session_regenerate_id(true);

                    $_SESSION["id"] = $user["Id_users"];

                    header("Location: /index.php");
                    exit();
                } else {
                    $errors["password"] = "Email ou mot de passe incorrect";
                }

            } else {
                $errors["email"] = "Aucun compte trouvé";
            }

        } catch (PDOException $e) {
            die("Erreur lors de la requête");
        }
    }
}

?>

<div class="connexion">
  <form action="#" method="post" class="login-form">
    <label for="email">Email</label>
    <input type="email" id="email" name="email" value="<?= htmlspecialchars($email) ?>" placeholder="Votre email" required>
    <span class="error"><?= $errors["email"] ?></span>

    <label for="password">Mot de passe</label>
    <input type="password" id="password" name="password" placeholder="Votre mot de passe" required>
    <span class="error"><?= $errors["password"] ?></span>

    <button type="submit">Connexion</button>



    <p class="signup-text">
      Vous n'avez pas de compte ?
      <a href="./inscription.php">Créez‑en un</a>
    </p>
</div>

<footer>
  <p>Politique de confidentialité - Conditions générales d’utilisation</p>
  <p>&copy;2026 Aurora Hair Salon. Tous droits réservés.</p>
</footer>
<script>
  const toggle = document.getElementById("menu-toggle");
  const navLinks = document.getElementById("nav-links");

  toggle.addEventListener("click", () => {
    navLinks.classList.toggle("active");
  });
</script>


</body>

</html>