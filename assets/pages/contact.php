<?php
include '../includes/header.php'
?>


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