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

    /* Ligne décorative sous le titre */
    .section-title {
        position: relative;
        display: block;
        text-align: center;
        padding-bottom: 10px;
        font-weight: bold;
        text-transform: uppercase;
    }
    .section-title::after {
        content: "";
        position: absolute;
        left: 50%;
        transform: translateX(-50%);
        bottom: 0;
        width: 80%;
        height: 1px;
        background-color: #85300bff;
        border-radius: 2px;
    }

    .highlight-box {
        background: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 2px 6px rgba(0,0,0,0.1);
        margin-top: 20px;
    }

    .sub-section-title {
        font-weight: bold;
        margin-top: 30px;
        margin-bottom: 15px;
        font-size: 1.2rem;
        color: #333;
    }

    .icon-list li {
        margin-bottom: 8px;
    }
</style>

<main>
    <section class="container mt-5 mb-5 pt-5">
        <h2 class="section-title mb-4">À propos de nous</h2>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <strong>LCK SARL</strong> est une société détenue à 100 % en RDC. Elle a été constituée le 
                    <strong>7 septembre 2021</strong> et est opérationnelle depuis plus de 2 ans.
                </p>
                <p>
                    Les rôles de gestion et les équipes opérationnelles disposent d’une longue expérience 
                    et de compétences éprouvées.
                </p>
                <p>
                    Conformément à la loi de la République Démocratique du Congo, l’entreprise fournit divers services 
                    et travaux dans les domaines industriel, de l’ingénierie, de l’assainissement des équipements miniers, 
                    de la construction, de la fourniture, des bureaux et habitations, de l’installation, de la réparation et de la maintenance 
                    des actifs mentionnés ci-dessus, ainsi que des caméras de sécurité et des équipements.
                </p>
                <blockquote class="highlight-box">
                    <em>« L’entreprise est dotée d’une équipe très expérimentée et hautement qualifiée, 
                    comprenant le personnel de gestion ainsi que les équipes opérationnelles. »</em>
                </blockquote>

                <!-- Mission -->
                <h3 class="sub-section-title">🚀 Mission</h3>
                <p>
                    Vous fournir des approvisionnements et des travaux réalisés par notre personnel hautement qualifié 
                    dans les domaines les plus critiques : entreprises, industries, habitations, bureaux, particuliers, 
                    pour leur durée de vie, leur sécurité et leur protection.  
                    Les résultats de nos travaux dépassent les attentes.
                </p>

                <!-- Vision -->
                <h3 class="sub-section-title">🌍 Vision</h3>
                <p>
                    Nous visons, grâce à nos compétences en ingénierie, nos pratiques stratégiques et nos valeurs, 
                    à devenir le leader dans l’approvisionnement et la fourniture d’articles, de services, d’assistance technique, 
                    d’ingénierie et de construction pour les entreprises, industries, bureaux, habitations et particuliers 
                    dans le besoin en RDC.
                </p>

                <!-- Fondamentaux -->
                <h3 class="sub-section-title">📑 Fondamentaux</h3>
                <ul class="icon-list">
                    <li>✔️ Toujours revoir nos pratiques et méthodologies pour une amélioration continue.</li>
                    <li>✔️ Innover, créer, développer et ajuster les stratégies selon les besoins réels des clients.</li>
                    <li>✔️ Améliorer la qualité de nos services et produits.</li>
                    <li>✔️ Rester à jour en matière de santé, sécurité et environnement pour notre personnel et nos clients.</li>
                    <li>✔️ Maintenir nos lieux d’opération propres, sûrs et accueillants.</li>
                </ul>

                <!-- Objectifs -->
                <h3 class="sub-section-title">🎯 Objectifs</h3>
                <ul class="icon-list">
                    <li><strong>Dynamisme :</strong> S’adapter aux changements qui impactent les domaines professionnels et techniques, 
                        avec des formations et pratiques conformes aux standards mondiaux.</li>
                    <li><strong>Leadership :</strong> Maintenir une position de leader grâce à des pratiques modernes de gestion 
                        et à la supervision de nos ingénieurs et cadres qualifiés.</li>
                    <li><strong>Équipe compétente :</strong> Attirer, recruter et retenir des travailleurs hautement qualifiés 
                        pour garantir l’excellence et optimiser la performance financière.</li>
                </ul>

                <!-- Informations légales -->
                <div class="highlight-box mt-5">
                    <h5>📌 Informations légales</h5>
                    <p>📜 <strong>RCCM :</strong> CD/LSH/RCCM/21-B-01044</p>
                    <p>💰 <strong>Numéro d’impôt :</strong> 6572 / 2022</p>
                    <p>🆔 <strong>ID National :</strong> 05-F4300-N87431H</p>
                    <p>🏛️ <strong>ARSP :</strong> 4323766716</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
