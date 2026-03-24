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
                    <label for="email">Email</label>
                    <input type="email" id="email" placeholder="Votre email" required>

                    <label for="password">Mot de passe</label>
                    <input type="password" id="password" placeholder="Votre mot de passe" required>

                    <button type="submit">Connexion</button>
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