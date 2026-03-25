<?php
<<<<<<< HEAD:inscription.php
include '../includes/header.php'
?>

<div class="inscription">
    <form action="#" method="post" class="sigin-form">
        <label for="name">Nom</label>
        <input type="name" id="name" placeholder="Votre Nom" required>

        <label for="firstname">Prenom</label>
        <input type="firstname" id="firstname" placeholder="Votre Prenom" required>

        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Votre email" required>

        <label for="phone">Numéro de téléphone</label>
        <input type="tel" id="tel" placeholder="Votre numéro de téléphone" required>

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
=======
session_start();

include '../includes/header.php';

// connexion BDD
$pdo = new PDO("mysql:host=localhost;dbname=aurora", "root", "", [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
]);

$errors = [];

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $name = trim($_POST["name"] ?? "");
    $firstname = trim($_POST["firstname"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $phone = trim($_POST["phone"] ?? "");
    $password = $_POST["password"] ?? "";

    // 🔹 VALIDATIONS

    if (strlen($name) < 2 || strlen($name) > 30) {
        $errors[] = "Nom invalide";
    }

    if (strlen($firstname) < 2 || strlen($firstname) > 30) {
        $errors[] = "Prénom invalide";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Email invalide";
    }

    if (!preg_match("/^[0-9]{10}$/", $phone)) {
        $errors[] = "Numéro invalide";
    }

    if (strlen($password) < 6) {
        $errors[] = "Mot de passe trop court";
    }

    // 🔹 VÉRIFIER EMAIL EXISTANT
    if (empty($errors)) {
        $stmt = $pdo->prepare("SELECT Id_users FROM users WHERE email = ?");
        $stmt->execute([$email]);

        if ($stmt->fetch()) {
            $errors[] = "Email déjà utilisé";
        }
    }

    // 🔹 INSERT
    if (empty($errors)) {

        $hashedPassword = password_hash($password, PASSWORD_DEFAULT);

        $stmt = $pdo->prepare("
            INSERT INTO users (email, firstname, lastname, password, phone)
            VALUES (?, ?, ?, ?, ?)
        ");

        $stmt->execute([$email, $firstname, $name, $hashedPassword, $phone]);
        $_SESSION["id"] = $pdo->lastInsertId();

        // 🔥 REDIRECTION
        header("Location: /assets/pages/connexion.php");
        exit();
    }
}
?>

<?php if (!empty($errors)): ?>
    <div style="color:red;">
        <?php foreach ($errors as $error): ?>
            <p><?= htmlspecialchars($error) ?></p>
        <?php endforeach; ?>
    </div>
<?php endif; ?>

<div class="inscription">
    <form method="post" class="sigin-form">

        <label>Nom</label>
        <input type="text" name="name" placeholder="Votre nom" value="<?= htmlspecialchars($name ?? '') ?>" required minlength="2" maxlength="30">

        <label>Prénom</label>
        <input type="text" name="firstname" placeholder="Votre prénom" value="<?= htmlspecialchars($firstname ?? '') ?>" required minlength="2" maxlength="30">

        <label>Email</label>
        <input type="email" name="email" placeholder="Votre email" value="<?= htmlspecialchars($email ?? '') ?>" required>

        <label>Téléphone</label>
        <input type="tel" name="phone" placeholder="Votre numéro de téléphone" value="<?= htmlspecialchars($phone ?? '') ?>" required pattern="[0-9]{10}">

        <label>Mot de passe</label>
        <input type="password" name="password" placeholder="Votre mot de passe" required minlength="6">

        <button type="submit">S'inscrire</button>
    </form>
</div>
>>>>>>> PHP:assets/pages/inscription.php
