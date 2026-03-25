<?php
include '../includes/header.php'
?>

  <div class="connexion">
      <form action="#" method="post" class="login-form">
        <label for="email">Email</label>
        <input type="email" id="email" placeholder="Votre email" required>

        <label for="password">Mot de passe</label>
        <input type="password" id="password" placeholder="Votre mot de passe" required>

        <button type="submit">Connexion</button>



        <p class="signup-text">
          Vous n'avez pas de compte ?
          <a href="/pages/inscription.html">Créez‑en un</a>
        </p>
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