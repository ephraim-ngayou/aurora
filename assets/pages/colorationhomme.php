<?php
include '../includes/header.php'
?>

    <div class="option" class="menu-toggle" id="menu-toggle">
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Sh Coupe court homme</h3>
                <p>75min, 50 euros</p>
            </a></li>
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