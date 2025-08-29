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
  <div class="container my-2 services">
    <h2 class="text-center mb-4">Nos Services</h2>
    <div class="row">
      <div class="col-md-4">
      <div class="card shadow-sm">
        <img src="assets/img/construction.png" class="card-img-top" alt="Construction">
        <div class="card-body text-center">
          <h5 class="card-title">Construction</h5>
          <p class="card-text">Maisons, immeubles, entrepôts et bâtiments modernes.</p>
        </div>
      </div>
    </div>

      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="assets/img/electricite.png" class="card-img-top" alt="Construction">
          <div class="card-body text-center">
            <h5 class="card-title">Électricité</h5>
            <p class="card-text">Installations électriques pour vos bâtiments résidentiels et industriels.</p>
          </div>
        </div>
      </div>
      <div class="col-md-4">
        <div class="card shadow-sm">
          <img src="assets/img/maintenance.png" class="card-img-top" alt="Construction">
          <div class="card-body text-center">
            <h5 class="card-title">Maintenance</h5>
            <p class="card-text">Rénovation, plomberie et systèmes de climatisation.</p>
          </div>
        </div>
      </div>
    </div>
  </div>

  <div class="container my-5 clients">
  <h2 class="text-center mb-4">Nos Clients</h2>
  <div class="row text-center">
    
    <div class="col-md-3 col-6 mb-4">
      <div class="card shadow-sm p-3">
        <h6 class="card-title">MCK Sarl</h6>
        <img src="assets/img/mck.png" class="img-fluid" alt="Client 1">
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card shadow-sm p-3">
        <h6 class="card-title">AFRIDEX</h6>
        <img src="assets/img/afidex.png" class="img-fluid" alt="Client 2">
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card shadow-sm p-3">
        <h6 class="card-title">ISP-Lubumbashi</h6>
        <img src="assets/img/isp.jpg" class="img-fluid" alt="Client 3">
      </div>
    </div>

    <div class="col-md-3 col-6 mb-4">
      <div class="card shadow-sm p-3">
        <h6 class="card-title">Aéroport Luano</h6>
        <img src="assets/img/luano.png" class="img-fluid" alt="Client 4">
      </div>
    </div>

  </div>
</div>
  
</section>

<?php include 'includes/footer.php'; ?>
