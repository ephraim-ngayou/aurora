<?php
include '../includes/header.php'
?>
    <div class="option" class="menu-toggle" id="menu-toggle">
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Brush couleur court</h3>
                <p>75min, 50 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Brush couleur long</h3>
                <p>90 min, 70 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Couleur coupe court</h3>
                <p>105min, 75 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Couleur coupe longue</h3>
                <p>105min, 75 euros</p>
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