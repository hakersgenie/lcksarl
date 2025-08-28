<?php include 'includes/header.php';

// Charge le fichier de traduction
$translations = include "lang/$lang.php"
?>

<main>
<!-- Hero Section -->
<header class="text-white text-center py-5">
  <div class="container">
    <h1 class="fw-bold"><?= $translations['header_title'] ?></h1>
    <p class="lead"><?= $translations['header_subtitle'] ?></p>
    <a href="contact.php" class="btn btn-primary btn-lg">
      <?= $translations['header_cta'] ?>
    </a>
  </div>
</header>

</main>

<!-- Services rapides -->
<section class="py-5">
  <div class="container">
    <h2 class="text-center mb-4">Nos Services</h2>
    <div class="row">
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Construction</h5>
            <p class="card-text">Maisons, immeubles, entrepôts et bâtiments modernes.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Électricité</h5>
            <p class="card-text">Installations électriques pour vos bâtiments résidentiels et industriels.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <div class="card-body text-center">
            <h5 class="card-title">Maintenance</h5>
            <p class="card-text">Rénovation, plomberie et systèmes de climatisation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<?php include 'includes/footer.php'; ?>
