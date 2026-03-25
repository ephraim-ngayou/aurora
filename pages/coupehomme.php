<?php
include '../includes/header.php'
?>

    <div class="option">
            <li><a href="/pages/horaire.html?service=Coupe Homme" class="service">
                    <h3>Coupe Homme</h3>
                    <p>30min, 30 euros</p>
                </a></li>
            <li><a href="/pages/horaire.html?service=Coupe couronne Homme" class="service">
                    <h3>Coupe couronne Homme</h3>
                    <p>15 min, 25 euros</p>
                </a></li>
            <li><a href="/pages/horaire.html?service=Sh couronne Homme" class="service">
                    <h3>Sh Coupe Homme</h3>
                    <p>30min, 35 euros</p>
                </a></li>
            <li><a href="/pages/horaire.html?service=Coupe garçon" class="service">
                    <h3>Coupe garçon</h3>
                    <p>15min, 25 euros</p>
                </a></li>
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