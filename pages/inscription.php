<?php
include '../includes/header.php'
?>

<div class="inscription">
    <form action="#" method="post" class="sigin-form">
        <label for="name">Nom</label>
        <input type="name" id="name" placeholder="Votre Nom" required>

        <form action="#" method="post" class="sigin-form">
            <label for="firstname">Prenom</label>
            <input type="firstname" id="firstname" placeholder="Votre Prenom" required>

            <form action="#" method="post" class="sigin-form">
                <label for="phone">Numéro de téléphone</label>
                <input type="tel" id="phone" placeholder="Votre Numméro de téléhone" required>

                <form action="#" method="post" class="sigin-form">
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Votre email" required>

                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" placeholder="Votre mot de passe" required>

                    <button type="submit">Connexion</button>
                    </section>
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

</body>

</html>