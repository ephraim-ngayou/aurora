<?php
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
        <input type="text" name="name" value="<?= htmlspecialchars($name ?? '') ?>" required minlength="2" maxlength="30">

        <label>Prénom</label>
        <input type="text" name="firstname" value="<?= htmlspecialchars($firstname ?? '') ?>" required minlength="2" maxlength="30">

        <label>Email</label>
        <input type="email" name="email" value="<?= htmlspecialchars($email ?? '') ?>" required>

        <label>Téléphone</label>
        <input type="tel" name="phone" value="<?= htmlspecialchars($phone ?? '') ?>" required pattern="[0-9]{10}">

        <label>Mot de passe</label>
        <input type="password" name="password" required minlength="6">

        <button type="submit">S'inscrire</button>
    </form>
</div>