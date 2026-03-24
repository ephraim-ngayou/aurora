<?php

session_start();

include '../includes/header.php';


// connexion BDD
$pdo = new PDO("mysql:host=localhost;dbname=aurora", "root", "", [
  PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$email = "";
$errors = [
  "email" => "",
  "password" => ""
];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  $email = trim($_POST["email"] ?? "");
  $password = $_POST["password"] ?? "";

  // 🔹 validation basique
  if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
    $errors["email"] = "Email invalide";
  }

  if (empty($password)) {
    $errors["password"] = "Mot de passe requis";
  }

  // 🔹 vérification en BDD
  if (empty($errors["email"]) && empty($errors["password"])) {

    $stmt = $pdo->prepare("SELECT * FROM users WHERE email = ?");
    $stmt->execute([$email]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user) {

      if (password_verify($password, $user["password"])) {

        $_SESSION["id"] = $user["Id_users"];
        header("Location: /index.php");
        exit();
      } else {
        $errors["password"] = "Mot de passe incorrect";
      }
    } else {
      $errors["email"] = "Aucun compte trouvé";
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