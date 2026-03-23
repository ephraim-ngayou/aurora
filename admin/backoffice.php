<?php
$entities = [
  'clients' => [
    'label' => 'Clients',
    'columns' => ['ID', 'Nom', 'Téléphone', 'Email'],
    'fields' => ['id', 'nom', 'telephone', 'email'],
    'items' => [
      ['id' => 1, 'nom' => 'Emma Martin', 'telephone' => '06 12 34 56 78', 'email' => 'emma.martin@mail.com'],
      ['id' => 2, 'nom' => 'Lucas Bernard', 'telephone' => '06 98 76 54 32', 'email' => 'lucas.bernard@mail.com'],
      ['id' => 3, 'nom' => 'Chloé Petit', 'telephone' => '07 55 44 33 22', 'email' => 'chloe.petit@mail.com'],
    ]
  ],
  'rendezvous' => [
    'label' => 'Rendez-vous',
    'columns' => ['ID', 'Client', 'Date', 'Heure'],
    'fields' => ['id', 'client', 'date', 'heure'],
    'items' => [
      ['id' => 1, 'client' => 'Emma Martin', 'date' => '2026-03-24', 'heure' => '10:00'],
      ['id' => 2, 'client' => 'Lucas Bernard', 'date' => '2026-03-24', 'heure' => '11:30'],
      ['id' => 3, 'client' => 'Chloé Petit', 'date' => '2026-03-25', 'heure' => '14:00'],
    ]
  ],
  'prestations' => [
    'label' => 'Prestations',
    'columns' => ['ID', 'Nom', 'Durée', 'Prix'],
    'fields' => ['id', 'nom', 'duree', 'prix'],
    'items' => [
      ['id' => 1, 'nom' => 'Coupe femme', 'duree' => '45 min', 'prix' => '35 €'],
      ['id' => 2, 'nom' => 'Coupe homme', 'duree' => '30 min', 'prix' => '20 €'],
      ['id' => 3, 'nom' => 'Brushing', 'duree' => '25 min', 'prix' => '18 €'],
    ]
  ],
  'coiffeurs' => [
    'label' => 'Coiffeurs',
    'columns' => ['ID', 'Nom', 'Spécialité', 'Téléphone'],
    'fields' => ['id', 'nom', 'specialite', 'telephone'],
    'items' => [
      ['id' => 1, 'nom' => 'Sophie Leroy', 'specialite' => 'Coloration', 'telephone' => '06 11 22 33 44'],
      ['id' => 2, 'nom' => 'Nicolas Girard', 'specialite' => 'Coupe homme', 'telephone' => '06 55 66 77 88'],
      ['id' => 3, 'nom' => 'Julie Moreau', 'specialite' => 'Brushing', 'telephone' => '07 44 55 66 77'],
    ]
  ],
  'messagerie' => [
    'label' => 'Messagerie',
    'columns' => ['ID', 'Nom', 'Email', 'Sujet', 'Aperçu'],
    'fields' => ['id', 'nom', 'email', 'sujet', 'apercu'],
    'items' => [
      [
        'id' => 1,
        'nom' => 'Sarah Dupuis',
        'email' => 'sarah.dupuis@mail.com',
        'sujet' => 'Prise de rendez-vous',
        'apercu' => 'Bonjour, je voudrais prendre rendez-vous...',
        'message' => 'Bonjour, je voudrais prendre rendez-vous pour une coupe et un brushing samedi matin.'
      ],
      [
        'id' => 2,
        'nom' => 'Nina Robert',
        'email' => 'nina.robert@mail.com',
        'sujet' => 'Tarifs coloration',
        'apercu' => 'Bonjour, pouvez-vous me dire vos tarifs...',
        'message' => 'Bonjour, pouvez-vous me dire vos tarifs pour une coloration complète sur cheveux longs ?'
      ],
      [
        'id' => 3,
        'nom' => 'Laura Petit',
        'email' => 'laura.petit@mail.com',
        'sujet' => 'Demande d’information',
        'apercu' => 'Bonsoir, est-ce que vous prenez sans rendez-vous...',
        'message' => 'Bonsoir, est-ce que vous prenez sans rendez-vous pour une coupe femme ?'
      ],
    ]
  ]
];

$entityKey = $_GET['entity'] ?? 'clients';
if (!isset($entities[$entityKey])) {
  $entityKey = 'clients';
}

$action = $_GET['action'] ?? '';
$id = isset($_GET['id']) ? (int) $_GET['id'] : null;

$currentEntity = $entities[$entityKey];
$currentItem = null;

foreach ($currentEntity['items'] as $item) {
  if ((int)$item['id'] === $id) {
    $currentItem = $item;
    break;
  }
}
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
      <h1>Salon Admin</h1>
      <ul class="menu">
        <?php foreach ($entities as $key => $entity): ?>
          <li>
            <a href="?entity=<?= htmlspecialchars($key) ?>" class="<?= $entityKey === $key ? 'active' : '' ?>">
              <?= htmlspecialchars($entity['label']) ?>
            </a>
          </li>
        <?php endforeach; ?>
      </ul>
    </aside>

    <main class="main">
      <div class="main-header">
        <h2>Liste des <?= htmlspecialchars(strtolower($currentEntity['label'])) ?></h2>
        <a class="btn-add" href="?entity=<?= htmlspecialchars($entityKey) ?>&action=add">+ Ajouter</a>
      </div>

      <div class="content">
        <div class="table-card">
          <table>
            <thead>
              <tr>
                <?php foreach ($currentEntity['columns'] as $column): ?>
                  <th><?= htmlspecialchars($column) ?></th>
                <?php endforeach; ?>
                <th>Actions</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($currentEntity['items'] as $item): ?>
                <tr>
                  <?php foreach ($currentEntity['fields'] as $index => $field): ?>
                    <td data-label="<?= htmlspecialchars($currentEntity['columns'][$index]) ?>">
                      <?= htmlspecialchars((string)$item[$field]) ?>
                    </td>
                  <?php endforeach; ?>
                  <td data-label="Actions">
                    <div class="actions">
                      <a class="btn btn-view" href="?entity=<?= htmlspecialchars($entityKey) ?>&action=view&id=<?= (int)$item['id'] ?>">Consulter</a>

                      <?php if ($entityKey === 'messagerie'): ?>
                        <a class="btn btn-edit" href="?entity=messagerie&action=reply&id=<?= (int)$item['id'] ?>">Répondre</a>
                      <?php else: ?>
                        <a class="btn btn-edit" href="?entity=<?= htmlspecialchars($entityKey) ?>&action=edit&id=<?= (int)$item['id'] ?>">Modifier</a>
                      <?php endif; ?>

                      <a class="btn btn-delete" href="?entity=<?= htmlspecialchars($entityKey) ?>&action=delete&id=<?= (int)$item['id'] ?>" onclick="return confirm('Supprimer cet élément ?')">Supprimer</a>
                    </div>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
        </div>

        <div class="panel">
          <?php if ($action === 'view' && $currentItem): ?>
            <h3>Consultation</h3>

            <div class="detail-list">
              <?php foreach ($currentEntity['fields'] as $index => $field): ?>
                <div class="detail-item">
                  <strong><?= htmlspecialchars($currentEntity['columns'][$index]) ?></strong>
                  <?= htmlspecialchars((string)$currentItem[$field]) ?>
                </div>
              <?php endforeach; ?>

              <?php if ($entityKey === 'messagerie' && isset($currentItem['message'])): ?>
                <div class="detail-item">
                  <strong>Message</strong>
                  <?= nl2br(htmlspecialchars($currentItem['message'])) ?>
                </div>
              <?php endif; ?>
            </div>

          <?php elseif ($action === 'reply' && $currentItem && $entityKey === 'messagerie'): ?>
            <h3>Répondre au message</h3>

            <div class="detail-list">
              <div class="detail-item">
                <strong>Nom</strong>
                <?= htmlspecialchars($currentItem['nom']) ?>
              </div>

              <div class="detail-item">
                <strong>Email</strong>
                <?= htmlspecialchars($currentItem['email']) ?>
              </div>

              <div class="detail-item">
                <strong>Sujet</strong>
                <?= htmlspecialchars($currentItem['sujet']) ?>
              </div>

              <div class="detail-item">
                <strong>Message reçu</strong>
                <?= nl2br(htmlspecialchars($currentItem['message'])) ?>
              </div>
            </div>

            <br>

            <form class="fake-form">
              <textarea placeholder="Votre réponse..."></textarea>
              <button type="submit" class="btn btn-edit">Envoyer la réponse</button>
            </form>

          <?php elseif ($action === 'edit' && $currentItem): ?>
            <h3>Modification</h3>

            <form class="fake-form">
              <?php foreach ($currentEntity['fields'] as $field): ?>
                <?php if ($field !== 'id'): ?>
                  <input
                    type="text"
                    value="<?= htmlspecialchars((string)$currentItem[$field]) ?>"
                    placeholder="<?= htmlspecialchars(ucfirst($field)) ?>">
                <?php endif; ?>
              <?php endforeach; ?>

              <?php if ($entityKey === 'messagerie' && isset($currentItem['message'])): ?>
                <textarea placeholder="Message"><?= htmlspecialchars($currentItem['message']) ?></textarea>
              <?php endif; ?>

              <button type="submit" class="btn btn-edit">Enregistrer</button>
            </form>

          <?php elseif ($action === 'add'): ?>
            <h3>Ajout</h3>

            <form class="fake-form">
              <?php foreach ($currentEntity['fields'] as $field): ?>
                <?php if ($field !== 'id'): ?>
                  <input type="text" placeholder="<?= htmlspecialchars(ucfirst($field)) ?>">
                <?php endif; ?>
              <?php endforeach; ?>

              <?php if ($entityKey === 'messagerie'): ?>
                <textarea placeholder="Message"></textarea>
              <?php endif; ?>

              <button type="submit" class="btn btn-edit">Ajouter</button>
            </form>

          <?php elseif ($action === 'delete' && $currentItem): ?>
            <h3>Suppression</h3>

            <div class="info-box">
              élément sélectionné :
              <br><br>
              <strong>ID : <?= (int)$currentItem['id'] ?></strong><br>

              <?php
              if (isset($currentItem['nom'])) {
                echo htmlspecialchars($currentItem['nom']);
              } elseif (isset($currentItem['client'])) {
                echo htmlspecialchars($currentItem['client']);
              }
              ?>

              <br><br>
              ici tu brancheras la vraie suppression en base de données.
            </div>

          <?php else: ?>
            <h3>Panneau d’action</h3>
            <p>
              sélectionne une action dans le tableau.
              <br><br>
              dans la messagerie, tu peux maintenant répondre au message au lieu de “modifier” un mail client comme un malade.
            </p>
          <?php endif; ?>
        </div>
      </div>
    </main>
  </div>
</body>

</html>