<?php
include '../includes/header.php'
?>
<div class="main-header">
    <h2>Ajouter un utilisateur</h2>
    <a href="./index.php" class="btn-add">← Retour</a>
</div>

<div class="panel">

    <form class="fake-form" method="post">

        <div>
            <label for="firstname">Prénom</label>
            <input type="text" id="firstname" name="firstname" placeholder="Prénom" required>
        </div>

        <div>
            <label for="lastname">Nom</label>
            <input type="text" id="lastname" name="lastname" placeholder="Nom" required>
        </div>

        <div>
            <label for="phone">Numéro de téléphone</label>
            <input type="tel" id="phone" name="phone" placeholder="06 00 00 00 00" required>
        </div>

        <div>
            <label for="email">Adresse email</label>
            <input type="email" id="email" name="email" placeholder="email@mail.com" required>
        </div>

        <div>
            <label for="role">Rôle</label>
            <select id="role" name="role" required>
                <option value="">Choisir un rôle</option>
                <option value="admin">Admin</option>
                <option value="utilisateur">Utilisateur</option>
            </select>
        </div>

        <div class="actions">
            <button type="submit" class="btn btn-edit">Ajouter</button>
            <a href="./index.php" class="btn btn-delete">Annuler</a>
        </div>

    </form>

</div>

<?php
include '../includes/footer.php';
?>
