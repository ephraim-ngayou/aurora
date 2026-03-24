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