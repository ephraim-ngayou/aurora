<?php
include '../includes/header.php'
?>
            <div class="main-header">
                <h2>Liste des utilisateurs</h2>
                <a href="./add.php" class="btn-add">+ Ajouter un utilisateur</a>
            </div>

            <div class="table-card">
                <table>
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Nom</th>
                            <th>Email</th>
                            <th>Rôle</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td data-label="ID">1</td>
                            <td data-label="Nom">Jean Dupont</td>
                            <td data-label="Email">jean.dupont@mail.com</td>
                            <td data-label="Rôle">Admin</td>
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