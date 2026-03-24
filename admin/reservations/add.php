

<?php
include '../includes/header.php'
?>

<div class="main-header">
    <h2>Ajouter une réservation</h2>
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
            <label for="service">Service</label>
            <select id="service" name="service" required>
                <option value="">Choisir une prestation</option>
                <option value="coupe-classique">Coupe classique</option>
                <option value="coupe-femme">Coupe femme</option>
                <option value="brushing">Brushing</option>
                <option value="coloration">Coloration</option>
            </select>
        </div>

        <div>
            <label for="date">Créneau</label>
            <input type="datetime-local" id="date" name="date" required>
        </div>

        <div>
            <label for="status">Statut</label>
            <select id="status" name="status" required>
                <option value="confirme">Confirmé</option>
                <option value="attente">En attente</option>
                <option value="annule">Annulé</option>
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