<?php
include '../includes/header.php'
?>

    <div class="option">
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Coupe fille -20 ans</h3>
                <p>30min, 30 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Coupe mi long</h3>
                <p>45 min, 35 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Brush coupe court</h3>
                <p>30min, 35 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Coupe longue</h3>
                <p>30min, 35 euros</p>
            </a></li>
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