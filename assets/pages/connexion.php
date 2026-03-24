<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title> T.T.G Network - Formulaire</title>
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
  <div class="connexion">
    <form action="#" method="post" class="login-form">
      <label for="email">Email</label>
      <input type="email" id="email" placeholder="Votre email" required>

      <label for="password">Mot de passe</label>
      <input type="password" id="password" placeholder="Votre mot de passe" required>

      <button type="submit">Connexion</button>



      <p class="signup-text">
        Vous n'avez pas de compte ?
        <a href="/assets/pages/inscription.php">Créez‑en un</a>
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