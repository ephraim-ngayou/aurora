<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aurora - Accueil</title>
    <link rel="stylesheet" href="/assets/css/style.css">

</head>

<body>

    <header>
    </header>

    <nav class="navbar-expand">
        <div class="menu-toggle" id="menu-toggle">☰</div>

        <ul id="nav-links">
            <li><a href="/index.php">Accueil</a></li>
            <li><a href="/assets/pages/services.php">Nos services</a></li>
            <li><a href="/assets/pages/contact.php">Prendre rendez-vous</a></li>
            <li><a href="/assets/pages/connexion.php">Se connecter</a></li>
            <li><a href="/assets/pages/contact.php">Nous Contacter</a></li>



        </ul>
    </nav>

    <div class="option" class="menu-toggle" id="menu-toggle">
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Balayage brush mi court</h3>
                <p>105min, 75 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Balayage brush court</h3>
                <p>15 min, 25 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Balayage brush mi long</h3>
                <p>120min, 80 euros</p>
            </a></li>
        <li><a href="/assets/pages/connexion.php" class="service">
                <h3>Balayage brush long</h3>
                <p>120min, 80 euros</p>
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