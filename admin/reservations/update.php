<?php
include '../includes/header.php'
?>

<div class="main-header">
    <h2>Modifier une réservation</h2>
    <a href="./index.php" class="btn-add">← Retour</a>
</div>

<div class="panel">

    <form class="fake-form" method="post">

        <div>
            <label for="service">Service</label>
            <select id="service" name="service" required>
                <option value="coupe-classique" selected>Coupe classique</option>
                <option value="coupe-femme">Coupe femme</option>
                <option value="brushing">Brushing</option>
                <option value="coloration">Coloration</option>
            </select>
        </div>

        <div>
            <label for="date">Créneau</label>
            <input
                type="datetime-local"
                id="date"
                name="date"
                value="2026-03-25T09:00"
                required>
        </div>

        <div>
            <label for="status">Statut</label>
            <select id="status" name="status" required>
                <option value="confirme" selected>Confirmé</option>
                <option value="attente">En attente</option>
                <option value="annule">Annulé</option>
            </select>
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