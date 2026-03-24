<?php
include '../includes/header.php'
?>
<div class="main-header">
    <h2>Modifier un utilisateur</h2>
    <a href="./index.php" class="btn-add">← Retour</a>
</div>

<div class="panel">

    <form class="fake-form" method="post">

        <div>
            <label for="firstname">Prénom</label>
            <input
                type="text"
                id="firstname"
                name="firstname"
                value="Jean"
                required>
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input
                type="text"
                id="lastname"
                name="lastname"
                value="Dupont"
                required>
        </div>

        <div>
            <label for="phone">Numéro de téléphone</label>
            <input
                type="tel"
                id="phone"
                name="phone"
                value="06 12 34 56 78"
                required>
        </div>

        <div>
            <label for="email">Adresse email</label>
            <input
                type="email"
                id="email"
                name="email"
                value="jean.dupont@mail.com"
                required>
        </div>

        <div class="actions">
            <button type="submit" class="btn btn-edit">
                Enregistrer les modifications
            </button>

            <a href="./index.php" class="btn btn-delete">
                Annuler
            </a>
        </div>

    </form>

</div>
<?php
include '../includes/footer.php';
?>