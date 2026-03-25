<?php
include '../includes/header.php'
?>

<div>
    <a href="/pages/coupefemme.html">
        <section class="section5">
            <h2 style="color:#F9F9EA;">COUPE</h2>
        </section>
    </a>
    <a href="/pages/colorationfemme.html">
        <section class="section6">
            <h2 style="color:#F9F9EA;">COLORATION</h2>
        </section>
    </a>
    <a href="/pages/balayages.html">
        <section class="section7">
            <h2 style="color:#F9F9EA;">BALAYAGE</h2>
        </section>
    </a>
    <a href="/pages/coiffure.html">
        <section class="section8">
            <h2 style="color:#F9F9EA;">COIFFURE</h2>
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

</html>