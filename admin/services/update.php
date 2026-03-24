<?php
include '../includes/header.php'
?>
<div class="main-header">
    <h2>Modifier un service</h2>
    <a href="./index.php" class="btn-add">← Retour</a>
</div>

<div class="panel">

    <form class="fake-form" method="post">

        <div>
            <label for="genre">Genre</label>
            <select id="genre" name="genre" required>
                <option value="homme" selected>Homme</option>
                <option value="femme">Femme</option>
                <option value="enfant">Enfant</option>
            </select>
        </div>

        <div>
            <label for="name">Nom du service</label>
            <select id="service" name="service" required>
                <option value="">Choisir une prestation</option>
                <option value="coupe-classique">Coupe classique</option>
                <option value="coupe-femme">Coupe femme</option>
                <option value="brushing">Brushing</option>
                <option value="coloration">Coloration</option>
            </select>
        </div>

        <div>
            <label for="duration">Durée</label>
            <input
                type="time"
                id="duration"
                name="duration"
                value="00:30"
                required>
        </div>

        <div>
            <label for="price">Prix</label>
            <input
                type="text"
                id="price"
                name="price"
                value="20€"
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