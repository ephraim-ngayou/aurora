<?php
include '../includes/header.php'
?>
            <div class="main-header">
                <h2>Liste des services</h2>
                <a href="./add.php" class="btn-add">+ Ajouter un service</a>
            </div>

            <div class="table-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>genre</th>
                            <th>noms</th>
                            <th>durer</th>
                            <th>prix</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="ID">1</td>
                            <td data-label="Nom">Homme</td>
                            <td data-label="Services">Coupe classique</td>
                            <td data-label="Rôle">30:00</td>
                            <td data-label="Prix">20€</td>
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