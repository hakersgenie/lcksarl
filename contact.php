<?php include 'includes/header.php'; ?>

<div class="container py-5">
  <h2 class="text-center mb-4">Contactez-nous</h2>
  <form action="send_mail.php" method="POST" class="col-md-4 mx-auto">
    <div class="mb-3">
      <label class="form-label">Nom</label>
      <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Email</label>
      <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
      <label class="form-label">Message</label>
      <textarea name="message" class="form-control" rows="5" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary w-100">Envoyer</button>
  </form>
</div>

<?php include 'includes/footer.php'; ?>
