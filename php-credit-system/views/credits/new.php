<?php include __DIR__ . '/../layouts/header.php'; ?>
<form method="post" action="/?action=save-credit">
  <div class="mb-3">
    <label>Client</label>
    <select name="client_id" class="form-select">
      <?php foreach ($clients as $c): ?>
        <option value="<?= $c->id ?>"><?= htmlspecialchars($c->name) ?></option>
      <?php endforeach; ?>
    </select>
  </div>
  <div class="mb-3">
    <label>Montant</label>
    <input type="number" step="0.01" name="amount" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Date de début</label>
    <input type="date" name="start_date" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Nombre d'échéances</label>
    <input type="number" name="installments_count" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Taux d'intérêt (%)</label>
    <input type="number" step="0.01" name="interest_rate" class="form-control" value="0">
  </div>
  <button class="btn btn-success" type="submit">Créer</button>
</form>
<?php include __DIR__ . '/../layouts/footer.php'; ?>
