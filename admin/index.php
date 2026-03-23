<?php
// $entityKey = $_GET['entity'] ?? 'clients';
// if (!isset($entities[$entityKey])) {
//   $entityKey = 'clients';
// }

// $action = $_GET['action'] ?? '';
// $id = isset($_GET['id']) ? (int) $_GET['id'] : null;

// $currentEntity = $entities[$entityKey];
// $currentItem = null;

// foreach ($currentEntity['items'] as $item) {
//   if ((int)$item['id'] === $id) {
//     $currentItem = $item;
//     break;
//   }
// }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Back Office - Salon de coiffure</title>
  <link rel="stylesheet" href="../assets/css/backoffice.css">
</head>

<body>
  <div class="layout">
    <aside class="sidebar">
      <h1>Back Office</h1>
      <ul class="menu">
        <li><a href="./clients/index.php" class="active" >Utilisateurs</a></li>
        <li><a href="#">Produits</a></li>
        <li><a href="#">Commandes</a></li>
        <li><a href="#">Catégories</a></li>
      </ul>
    </aside>

    <main class="main">
    </main>
  </div>
</body>

</html>

</html>