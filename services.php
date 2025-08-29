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

    .section-title {
        position: relative;
        display: inline-block;
        padding-bottom: 10px;
        margin: 0 auto;
        text-align: center;
    }
    .section-title::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 80px;
        height: 4px;
        background-color: #f39c12;
        border-radius: 2px;
    }

    .card {
        transition: transform 0.3s ease;
        cursor: pointer;
        perspective: 1000px;
    }

    /* Animation ouverture dossier */
    .card.opening {
        transform: rotateY(90deg) scale(1.1);
        transition: transform 0.6s ease-in-out;
    }

    .card h5 {
        font-weight: bold;
    }
</style>

<?php
$services = [
    "genie-civil" => "🏗️ Génie Civil",
    "ppe" => "🦺 Équipements de Protection Individuelle (EPI)",
    "nettoyage" => "🧹 Nettoyage Industriel & Domestique",
    "climatisation" => "❄️ Service de Climatisation",
    "maintenance-industrielle" => "⚙️ Nettoyage & Maintenance des Équipements Industriels",
    "electricite-solaire" => "💡 Installation Électrique & Solaire",
    "generateur" => "🔌 Fourniture & Maintenance de Générateurs",
    "securite-camera" => "📹 Caméras de Sécurité"
];
?>

<main>
    <section class="container mt-5 mb-5 pt-5">
        <h2 class="section-title mb-4">Nos Services</h2>
        <div class="row g-4">
            <?php foreach ($services as $id => $title): ?>
                <div class="col-md-3">
                    <div class="card shadow-sm h-100 text-center p-3"
                         onclick="openService(this, 'service.php?id=<?= $id ?>')">
                        <h5><?= $title ?></h5>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </section>
</main>

<script>
    function openService(card, url) {
        card.classList.add("opening");
        setTimeout(() => {
            window.location.href = url;
        }, 600); // correspond à la durée de l'animation
    }
</script>

<?php include('includes/footer.php'); ?>
