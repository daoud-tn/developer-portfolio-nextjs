<?php include __DIR__ . '/../layouts/header.php'; ?>
<form method="post" action="/?action=save-client">
  <div class="mb-3">
    <label class="form-label">Nom</label>
    <input type="text" name="name" class="form-control" required>
  </div>
  <div class="mb-3">
    <label>Email</label>
    <input type="email" name="email" class="form-control">
  </div>
  <div class="mb-3">
    <label>Téléphone</label>
    <input type="text" name="phone" class="form-control">
  </div>
  <div class="mb-3">
    <label>Adresse</label>
    <input type="text" name="address" class="form-control">
  </div>
  <button type="submit" class="btn btn-success">Enregistrer</button>
</form>
<?php include __DIR__ . '/../layouts/footer.php'; ?>
