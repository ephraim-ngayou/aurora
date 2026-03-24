<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Contact - CoachFit</title>
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


  <div>
    <section>
      <h2>contact</h2>
      <form id="contact">
        <textarea name="message" rows="3" placeholder="Votre message..." required></textarea>
        <button type="submit">Envoyer</button>
      </form>
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