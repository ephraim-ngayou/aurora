<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aurora - Accueil</title>
  <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

  <header class="header">
    <img src="/assets/img/logo.png" alt="Aurora Logo" class="logo-right">
  </header>

  <main>

    <nav class="navbar-expand">
      <div class="overlay" id="overlay"></div>
      <div class="menu-toggle" id="menu-toggle">☰</div>
      <div class="close-toggle" id="close-toggle">✖</div>


      <ul id="nav-links">
        <li><a href="index.html">Accueil</a></li>
        <li><a href="/pages/services.php">Nos services</a></li>
        <li><a href="/pages/contact.php">Prendre rendez-vous</a></li>
        <li><a href="/pages/connexion.php">Se connecter</a></li>
        <li><a href="/pages/contact.php">Nous Contacter</a></li>



      </ul>
    </nav>

    <div>
      <section class="section1">
      </section>
      <section class="section2">
      </section>
    </div>
  </main>

  <footer>
    <p>Politique de confidentialité - Conditions générales d’utilisation</p>
    <p>&copy;2026 Aurora Hair Salon. Tous droits réservés.</p>
  </footer>

 <script>
  const toggle = document.getElementById("menu-toggle");
  const closeToggle = document.getElementById("close-toggle");
  const navLinks = document.getElementById("nav-links");
  const overlay = document.getElementById("overlay");

  toggle.addEventListener("click", () => {
    navLinks.classList.add("active");
    overlay.classList.add("active");

    toggle.style.display = "none";       // cacher ☰
    closeToggle.style.display = "block"; // afficher X
  });

  closeToggle.addEventListener("click", () => {
    navLinks.classList.remove("active");
    overlay.classList.remove("active");

    closeToggle.style.display = "none";  // cacher X
    toggle.style.display = "block";      // afficher ☰
  });

  overlay.addEventListener("click", () => {
    navLinks.classList.remove("active");
    overlay.classList.remove("active");

    closeToggle.style.display = "none";
    toggle.style.display = "block";
  });
</script>

</body>

</html>