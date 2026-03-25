<?php
include '../includes/header.php'
?>

<main>


  <nav class="navbar-expand">
    <div class="overlay" id="overlay"></div>
    <div class="menu-toggle" id="menu-toggle">☰</div>
    <div class="close-toggle" id="close-toggle">✖</div>

    <ul id="nav-links">
      <li><a href="/index.php">Accueil</a></li>
      <li><a href="pages/services.php">Nos services</a></li>
      <li><a href="/pages/contact.php">Prendre rendez-vous</a></li>
      <li><a href="/pages/connexion.php">Se connecter</a></li>
      <li><a href="/pages/contact.php">Nous Contacter</a></li>


    </ul>
  </nav>

  <div>
    <a href="/pages/femme.php">
      <section class="section9">
        <h2>FEMME</h2>
      </section>
    </a>
    <a href="/pages/homme.php">
      <section class="section10">
        <h2>HOMME</h2>
      </section>
    </a>
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

    toggle.style.display = "none"; // cacher ☰
    closeToggle.style.display = "block"; // afficher X
  });

  closeToggle.addEventListener("click", () => {
    navLinks.classList.remove("active");
    overlay.classList.remove("active");

    closeToggle.style.display = "none"; // cacher X
    toggle.style.display = "block"; // afficher ☰
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