<?php
$availableLangs = [
    'fr' => ['name' => 'Français', 'flag' => '🇫🇷'],
    'en' => ['name' => 'English', 'flag' => '🇬🇧']
];
$lang = 'fr'; // langue par défaut

if (isset($_GET['lang']) && array_key_exists($_GET['lang'], $availableLangs)) {
    $lang = $_GET['lang'];
    setcookie('lang', $lang, time()+3600*24*30, "/");
} elseif (isset($_COOKIE['lang']) && array_key_exists($_COOKIE['lang'], $availableLangs)) {
    $lang = $_COOKIE['lang'];
}

// Charge le fichier de traduction
$translations = include "lang/$lang.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>LCK SARL - Construction Services</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <!-- Font Awesome CDN à insérer dans <head> -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

  <!-- Bootstrap Icons -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <div class="container">
      <a class="navbar-brand fw-bold" href="index.php">LCK SARL</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto">
        <li class="nav-item"><a class="nav-link" href="index.php"><?= $translations['nav_home'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="services.php"><?= $translations['nav_services'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="projects.php"><?= $translations['nav_projects'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="contact.php"><?= $translations['nav_contact'] ?></a></li>
        <li class="nav-item"><a class="nav-link" href="about.php"><?= $translations['nav_about'] ?></a></li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">Langue</a>
          <ul class="dropdown-menu dropdown-menu-end">
            <?php foreach ($availableLangs as $code => $info): ?>
              <li>
                <a class="dropdown-item" href="?lang=<?= $code ?>">
                  <?= $info['flag'] . ' ' . $info['name']; ?>
                </a>
              </li>
            <?php endforeach; ?>
          </ul>
        </li>
      </ul>

      </div>
    </div>
  </nav>
  <div style="margin-top: 80px;"></div>
