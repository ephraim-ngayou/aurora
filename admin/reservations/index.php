<?php
include '../includes/header.php'
?>
            <div class="main-header">
                <h2>Liste des réservations</h2>
                <a href="./add.php" class="btn-add">+ Ajouter une réservation</a>
            </div>

            <div class="table-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Services</th>
                            <th>Créneaux</th>
                            <th>Status</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="ID">1</td>
                            <td data-label="Nom">Jean Dupont</td>
                            <td data-label="Services">Coupe classique</td>
                            <td data-label="Créneaux">9h00 25/03</td>
                            <td data-label="Status">Confirmé</td>

                            <td data-label="Actions">
                                <div class="actions">
                                    <a href="./update.php" class="btn btn-edit">Modifier</a>
                                    <a href="./delete.php" class="btn btn-delete">Supprimer</a>
                                </div>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
<?php
include '../includes/footer.php'
?>