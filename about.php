<?php include('includes/header.php'); ?>

<style>
    /* Permet au footer de rester en bas même avec peu de contenu */
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
    display: block;   /* ✅ prend toute la largeur */
    text-align: center; /* ✅ centre le texte */
    padding-bottom: 10px;
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



</style>

<main>
    <section class="container mt-5 mb-5 pt-5">
        <h2 class="section-title mb-4">À propos de nous</h2>
        <div class="row">
            <div class="col-md-12">
                <p>
                    <strong>LCK DRC SARL</strong> est une entreprise privée enregistrée en 
                    République Démocratique du Congo, spécialisée dans le secteur minier.<br> 
                    Notre société propose une large gamme de services dans le domaine
                    de l’exploitation minière, de la construction et de l’ingénierie, adaptés aux besoins de nos clients.
                </p>
                <p>
                    Nous nous efforçons d’offrir des solutions efficaces, innovantes et durables 
                    afin de contribuer au développement économique et social du pays.
                </p>

                <h5>💼 Notre expertise couvre :</h5>
                <ul class="list-unstyled">
                    <li>⛏️ Exploitation et gestion minière</li>
                    <li>🏗️ Travaux de construction et d’ingénierie</li>
                    <li>⚙️ Fourniture d’équipements et de matériaux</li>
                    <li>🚛 Services techniques et logistiques</li>
                </ul>

                <p>
                    Notre entreprise place :
                    <ul class="list-unstyled">
                        <li><strong>🔒 Sécurité</strong></li>
                        <li><strong>🌍 Protection de l’environnement</strong></li>
                        <li><strong>✅ Qualité</strong></li>
                    </ul>
                    au centre de toutes ses opérations.
                </p>

                <!-- 🔹 Bloc Informations légales -->
                <div class="bg-light p-4 rounded shadow-sm mt-5">
                    <h5>📌 Informations légales</h5>
                    <p>📜 <strong>RCCM :</strong> CD/LSH/RCCM/21-B-01044</p>
                    <p>💰 <strong>Numéro d’impôt :</strong> 6572 / 2022</p>
                    <p>🆔 <strong>ID National :</strong> 05-F4300-N87431H</p>
                    <p>🏛️ <strong>ARSP (Autorité de Régulation de la Sous-Traitance) :</strong> 4323766716</p>
                </div>
            </div>
        </div>
    </section>
</main>

<?php include('includes/footer.php'); ?>
