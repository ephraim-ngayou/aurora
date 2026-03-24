<?php
include '../includes/header.php'
?>

    <div class="option" class="menu-toggle" id="menu-toggle">
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Attache</h3>
                <p>45min, 40 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Chignon</h3>
                <p>45 min, 30 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Brush mi long</h3>
                <p>30min, 35 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Brush long</h3>
                <p>30min, 35 euros</p>
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