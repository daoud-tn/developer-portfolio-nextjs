<?php include __DIR__ . '/../layouts/header.php'; ?>
<a class="btn btn-primary mb-3" href="/?action=new-client">Ajouter client</a>
<table class="table table-striped">
  <tr><th>Nom</th><th>Email</th><th>Téléphone</th></tr>
  <?php foreach ($clients as $c): ?>
    <tr>
      <td><?= htmlspecialchars($c->name) ?></td>
      <td><?= htmlspecialchars($c->email) ?></td>
      <td><?= htmlspecialchars($c->phone) ?></td>
    </tr>
  <?php endforeach; ?>
</table>
<?php include __DIR__ . '/../layouts/footer.php'; ?>
