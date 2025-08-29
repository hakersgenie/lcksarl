<?php include('includes/header.php'); ?>

<style>
    body {
        display: flex;
        flex-direction: column;
        min-height: 100vh;
    }
    main {
        flex: 1;
    }

.service-title {
    text-align: center; /* ✅ Centre le texte */
    font-weight: bold;
    margin: 0 auto 20px auto; /* ✅ Centre le bloc */
    display: block; /* ✅ s'étend sur toute la largeur */
    position: relative;
    width: fit-content; /* ✅ la largeur s’adapte au texte */
}
.service-title::after {
    content: "";
    position: absolute;
    left: 50%;
    transform: translateX(-50%);
    bottom: -5px;
    width: 90%;  /* ✅ prend toute la largeur du texte */
    height: 2px;
    background-color: #f39c12;
    border-radius: 2px;
}

</style>

<?php
// récupérer l'id passé dans l'URL
$id = $_GET['id'] ?? '';

// dictionnaire de services
$services = [
    "genie-civil" => [
        "title" => "Génie Civil",
        "sous-services" => [
            "Construction de bâtiments",
            "Routes et ouvrages publics",
            "Études et supervision des travaux",
            "Gestion de projets d’infrastructures"
        ],
        "desc" => "Notre service de Génie Civil couvre la conception, la construction et la maintenance d’infrastructures modernes et durables..."
    ],
    "ppe" => [
        "title" => "Équipements de Protection Individuelle (EPI)",
        "sous-services" => [
            "Casques de sécurité",
            "Gants de protection",
            "Lunettes de sécurité",
            "Vêtements de travail"
        ],
        "desc" => "Nous fournissons une gamme complète d’EPI certifiés pour garantir la sécurité des travailleurs..."
    ],
    "nettoyage" => [
        "title" => "🧹 Nettoyage Industriel et Domestique",
        "desc" => "Services de nettoyage professionnel adaptés aux environnements industriels et résidentiels..."
    ],
    // 👉 ajoute ici les autres services
];

// si l'id existe on affiche, sinon message d’erreur
$service = $services[$id] ?? null;
?>


<main>
    <section class="container mt-5 mb-5 pt-5">
        
        <h2 class="service-title text-center">
          <?= $service['title'] ?>
        </h2>
        <div class="row">
            <div class="col-md-12">
                <p>
                   <?= $service['desc'] ?>
                </p>
                <p>
                   <?=  $service['sous-services'] ?>
                </p>
                <p>
                    Grâce à notre expertise, nous garantissons des solutions 
                    innovantes et respectueuses des normes de sécurité et environnementales.
                </p>

                <a href="services.php" class="btn btn-secondary mt-4">⬅️ Retour aux services</a>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
