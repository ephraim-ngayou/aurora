<?php
include '../includes/header.php'
?>

    <div>
        <a href="/assets/pages/coupehomme.php">
            <section class="section2">
            </section>
        </a>
        <a href="/assets/pages/colorationhomme.php">
            <section class="section2">
            </section>
        </a>
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