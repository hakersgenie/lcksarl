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
        "title" => "GÉNIE CIVIL",
        "subtitle" => "QUE FAISONS-NOUS ?",
        "desc"  => "Nos ingénieurs et nos équipes ont de nombreuses décennies d’expérience en génie civil et peuvent fournir une gamme de services incluant l’arpentage, la rénovation et la maintenance.",
        "sous-services" => [
            "domestique" => [
                "title" => "CONSTRUCTION DOMESTIQUE",
                "items" => [
                    "Maisons résidentielles",
                    "Hôtels",
                    "Installations commerciales",
                    "Structures préfabriquées et matériaux traditionnels",
                    "Bétons, en profondeur et en hauteur",
                ]
            ],
            "industrielle" => [
                "title" => "CONSTRUCTION INDUSTRIELLE",
                "items" => [
                    "Entrepôts",
                    "Magasins",
                    "Écoles et universités",
                    "Hôpitaux",
                    "Salles de conférence",
                ]
            ],
            "mines" => [
                "title" => "MINES",
                "items" => [
                    "Murs de barrages souterrains",
                    "Sols des stations de pompage",
                    "Puisards",
                    "Bassins de pompage",
                    "Canalisations",
                ]
            ]
        ]
    ],
    "ppe" => [
        "title" => "ÉQUIPEMENTS DE PROTECTION INDIVIDUELLE (EPI)",
        "subtitle" => "QUE FAISONS-NOUS ?",
        "desc" => "Nos ingénieurs fournissent des équipements de protection individuelle répondant aux besoins du secteur minier ainsi qu’à d’autres travaux techniques et d’ingénierie. Leurs qualités et spécifications correspondent aux besoins réels de nos clients et aux conditions rigoureuses exigées.",
        "sous-services" => [
            "yeux" => [
                "items" => "Protection des yeux",
            ],
            "respiratoire" => [
                "items" => "Protection respiratoire",
            ],
            "audition" => [
                "items" => "Protection auditive",
            ],
            "mains" => [
                "items" => "Protection des mains",
            ],
            "pieds" => [
                "items" => "Protection des pieds",
            ],
            "tete" => [
                "items" => "Protection de la tête",
            ],
            "corps" => [
                "items" => "Protection du corps",
            ],
        ]
    ],
    "nettoyage" => [
        "title" => "NETTOYAGE INDUSTRIEL ET DOMESTIQUE",
        "subtitle" => "QUE FAISONS-NOUS ?",
        "desc" => "Les services de nettoyage que nous organisons dans les installations industrielles et domestiques, ainsi que nos équipes de travail, sont reconnus pour leur haute qualité dans les entreprises, bureaux et maisons que nous servons. Nos services incluent, sans s’y limiter :",
        "sous-services" => [
            "domestique" => [
                "title" => "SERVICES DE NETTOYAGE DOMESTIQUE",
                "items" => [
                    "Nettoyage d’appartements",
                    "Nettoyage en profondeur",
                    "Services améliorés de désinfection et de stérilisation",
                    "Nettoyage des tapis et meubles rembourrés",
                    "Services de nettoyage de vitres",
                    "Nettoyage à haute pression",
                    "Etc.",
                ]
            ],
            "industriel" => [
                "title" => "SERVICES DE NETTOYAGE INDUSTRIEL",
                "items" => [
                    "Désinfection et entretien des fosses minières",
                    "Services de nettoyage de bureaux",
                    "Services de nettoyage médical",
                    "Services de nettoyage de chantiers de construction",
                ]
            ]
        ]
    ],
    "climatisation" => [
    "title" => "SERVICE DE CLIMATISATION",
    "subtitle" => "QUE FAISONS-NOUS ?",
    "desc" => "Nous apprécions notre équipe d’experts en installation et réparation de systèmes de climatisation. Soyez assurés que, quel que soit votre besoin, la quantité ou l’urgence, nous offrons un service excellent dépassant les attentes.",
    "sous-services" => [
        "fourniture" => [
            "items" => "Fourniture de climatiseur",
        ],
        "installation" => [
            "items" => "Installation",
        ],
        "inspection" => [
            "items" => "Inspection, nettoyage",
        ],
        "reparation" => [
            "items" => "Réparation de l’unité intérieure",
        ],
        "remplacement" => [
            "items" => "Remplacement des composants usés ou endommagés",
        ],
        "upgrade" => [
            "items" => "Mise à niveau du système",
        ],
    ]
],
"maintenance" => [
    "title" => "NETTOYAGE ET MAINTENANCE DES ÉQUIPEMENTS INDUSTRIELS",
    "subtitle" => "QUE FAISONS-NOUS ?",
    "desc" => "Nos travaux de nettoyage et de maintenance sur les machines et équipements industriels prolongent leur durée de vie. Ils les rendent propres et sûrs. Nous ne le répéterons jamais assez : nous rendons les lieux de travail accueillants comme des bureaux climatisés. Les machines industrielles sont des outils essentiels. De plus, nous installons, contrôlons, nettoyons et entretenons en permanence dans le strict respect des normes d’ingénierie.",
    "sous-services" => [
        "preventive" => [
            "items" => "Maintenance préventive",
        ],
        "predictive" => [
            "items" => "Maintenance prédictive",
        ],
        "corrective" => [
            "items" => "Maintenance corrective",
        ],
        "installation" => [
            "items" => "Installation, contrôle et nettoyage des équipements industriels",
        ],
    ]
],

"electrical_solar" => [
    "title" => "INSTALLATION ÉLECTRIQUE & SOLAIRE",
    "subtitle" => "QUE FAISONS-NOUS ?",
    "desc" => "Si vous avez des infrastructures en construction ou déjà construites — quelle que soit leur taille, qu’elles soient destinées à un usage résidentiel ou industriel — nécessitant une installation électrique ou le remplacement de panneaux solaires, nous sommes l’entreprise qu’il vous faut.",
    "sous-services" => [
        "low_medium" => [
            "items" => "Équipements basse et moyenne tension et pièces de rechange, appareillages, disjoncteurs, contacteurs, parafoudres, tableaux de distribution, systèmes de distribution",
        ],
        "protection" => [
            "items" => "Dispositifs de protection, dispositifs de commutation, appareils de mesure et de contrôle de puissance, systèmes de distribution, dispositifs de commutation, appareils de mesure et de contrôle de puissance",
        ],
        "transformers" => [
            "items" => "Fourniture et installation de transformateurs électriques de haute à basse tension",
        ],
    ]
],

 // Générateurs
"generators" => [
    "title" => "FOURNITURE ET MAINTENANCE DES GÉNÉRATEURS",
    "subtitle" => "QUE FAISONS-NOUS ?",
    "desc" => "Nous fournissons des générateurs qui répondent aux besoins opérationnels des petites et grandes entreprises. Notre équipe de service après-vente vous apporte un service de maintenance ainsi que des pièces de rechange lorsque cela est nécessaire.",
    "sous-services" => [
        "convoyors" => [ "items" => "Convoyeurs" ],
        "concentrators" => [ "items" => "Concentrateurs" ],
        "agitators" => [ "items" => "Agitateurs" ],
        "thickeners" => [ "items" => "Épaississeurs" ],
        "control_gears" => [ "items" => "Organes de commande" ],
        "switchgears" => [ "items" => "Appareillages électriques" ],
        "measuring" => [ "items" => "Instruments de mesure" ],
        "belt_filters" => [ "items" => "Filtres à bande horizontale" ],
        "drum_filters" => [ "items" => "Filtres à tambour" ],
        "tank_pumps" => [ "items" => "Pompes de réservoir" ],
        "peristaltic" => [ "items" => "Pompes péristaltiques" ],
        "protective" => [ "items" => "Dispositifs de protection" ],
        "wiring" => [ "items" => "Systèmes de câblage" ],
        "valves" => [ "items" => "Différentes vannes, y compris automatisées" ],
        "gear_boxes" => [ "items" => "Boîtes de vitesses" ],
        "couplings" => [ "items" => "Accouplements rigides et hydrauliques" ],
        "flow_meters" => [ "items" => "Débitmètres électromagnétiques" ],
    ]
    ],

    "security_cameras" => [
    "title" => "CAMÉRAS DE SURVEILLANCE",
    "subtitle" => "QUE FAISONS-NOUS ?",
    "desc" => "Nos caméras de surveillance ont une longue durée de vie, une précision fiable pour la capture et l’affichage des images, ainsi qu’une grande résistance mécanique et aux intempéries. 
                Leurs schémas d’assemblage et de fonctionnement sont conçus de manière stratégique. 
                Elles nécessitent une formation qualifiée, complète et suivie pour leurs utilisateurs.",
    "sous-services" => [
        "installation" => [ "items" => "Installation et configuration" ],
        "maintenance"  => [ "items" => "Maintenance préventive et corrective" ],
        "monitoring"   => [ "items" => "Surveillance en temps réel" ],
        "training"     => [ "items" => "Formation des utilisateurs" ],
    ]
],


];


// si l'id existe on affiche, sinon message d’erreur
$service = $services[$id] ?? null;
?>


<main>
<section class="container mt-2 mb-5 pt-5">
    <h2 class="service-title text-center">
        <?= $service['title'] ?>
    </h2>

    <div class="row">
        <div class="col-md-12">
            <p class="fw-bold">
                <?= $service['subtitle'] ?>
            </p>
            <p>
                <?= $service['desc'] ?>
            </p>

            <!-- Grille des sous-services -->
            <div class="row text-center mt-4">
                <?php foreach ($service['sous-services'] as $key => $sous): ?>
                    <div class="col-md-4 mb-4">
                        <div class="p-3 border rounded shadow-sm h-100 text-start">
                            
                            <?php if ($id === "genie-civil"): ?>
                                <!-- Icônes pour génie civil -->
                                <h5>
                                    <?php if ($key === "domestique"): ?>
                                        <i class="bi bi-house-door-fill text-warning"></i>
                                    <?php elseif ($key === "industrielle"): ?>
                                        <i class="bi bi-building text-primary"></i>
                                    <?php elseif ($key === "mines"): ?>
                                        <i class="bi bi-tools text-danger"></i>
                                    <?php endif; ?>
                                    <?= $sous['title'] ?>
                                </h5>
                                <ul class="mt-2">
                                    <?php foreach ($sous['items'] as $item): ?>
                                        <li><?= $item ?></li>
                                    <?php endforeach; ?>
                                </ul>

                            <?php elseif ($id === "ppe"): ?>
                                <!-- Icônes pour EPI -->
                                <h5 class="text-center">
                                    <?php if ($key === "yeux"): ?>
                                        🥽
                                    <?php elseif ($key === "respiratoire"): ?>
                                        😷
                                    <?php elseif ($key === "audition"): ?>
                                        🎧
                                    <?php elseif ($key === "mains"): ?>
                                        🦾
                                    <?php elseif ($key === "pieds"): ?>
                                        🥾
                                    <?php elseif ($key === "tete"): ?>
                                        ⛑
                                    <?php elseif ($key === "corps"): ?>
                                        🦺
                                    <?php endif; ?>
                                    <?= $sous['items'] ?>
                                </h5>

                            <?php elseif ($id === "nettoyage"): ?>
                                <!-- Icônes pour NETTOYAGE -->
                                <h5>
                                    <?php if ($key === "domestique"): ?>
                                        <i class="bi bi-house-door-fill text-success"></i>
                                    <?php elseif ($key === "industriel"): ?>
                                        <i class="bi bi-building-gear text-primary"></i>
                                    <?php endif; ?>
                                    <?= $sous['title'] ?>
                                </h5>
                                <ul class="mt-2">
                                    <?php foreach ($sous['items'] as $item): ?>
                                        <li><?= $item ?></li>
                                    <?php endforeach; ?>
                                </ul>

                            <?php elseif ($id === "climatisation"): ?>
                                <!-- Icônes pour CLIMATISATION -->
                                <h5>
                                    <?php if ($key === "fourniture"): ?>
                                        ❄️
                                    <?php elseif ($key === "installation"): ?>
                                        🔧
                                    <?php elseif ($key === "inspection"): ?>
                                        🔍
                                    <?php elseif ($key === "reparation"): ?>
                                        🛠
                                    <?php elseif ($key === "remplacement"): ?>
                                        ♻️
                                    <?php elseif ($key === "upgrade"): ?>
                                        ⚡
                                    <?php endif; ?>
                                    <?= $sous['items'] ?>
                                </h5>

                            <?php elseif ($id === "maintenance"): ?>
                                <h5>
                                    <?php if ($key === "preventive"): ?>
                                        🛡
                                    <?php elseif ($key === "predictive"): ?>
                                        📊
                                    <?php elseif ($key === "corrective"): ?>
                                        🛠
                                    <?php elseif ($key === "installation"): ?>
                                        ⚙️
                                    <?php endif; ?>
                                    <?= $sous['items'] ?>
                                </h5>

                            <?php elseif ($id === "electrical_solar"): ?>
                                <h5>
                                    <?php if ($key === "low_medium"): ?>
                                        🔌
                                    <?php elseif ($key === "protection"): ?>
                                        🛡
                                    <?php elseif ($key === "transformers"): ?>
                                        ⚡
                                    <?php endif; ?>
                                    <?= $sous['items'] ?>
                                </h5>

                            <?php elseif ($id === "generators"): ?>
                            <!-- Icônes + liste pour GENERATEURS -->
                                <?php if ($key === "convoyors"): ?>
                                    🔩 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "concentrators"): ?>
                                    ⚙️ <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "agitators"): ?>
                                    🔄 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "thickeners"): ?>
                                    🏗 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "control_gears"): ?>
                                    🎛 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "switchgears"): ?>
                                    ⚡ <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "measuring"): ?>
                                    📏 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "belt_filters"): ?>
                                    🧵 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "drum_filters"): ?>
                                    🥁 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "tank_pumps"): ?>
                                    💧 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "peristaltic"): ?>
                                    🔁 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "protective"): ?>
                                    🛡 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "wiring"): ?>
                                    🔌 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "valves"): ?>
                                    🚪 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "gear_boxes"): ?>
                                    ⚙️ <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "couplings"): ?>
                                    🔗 <strong><?= $sous['items'] ?></strong>
                                <?php elseif ($key === "flow_meters"): ?>
                                    📊 <strong><?= $sous['items'] ?></strong>
                                <?php endif; ?> 
                                
                            <?php elseif ($id === "security_cameras"): ?>
                                <!-- Icônes + liste pour CAMÉRAS DE SURVEILLANCE -->
                               
                                <?php if ($key === "installation"): ?>
                                    ⚡ <?= $sous['items'] ?>
                                <?php elseif ($key === "maintenance"): ?>
                                    🛠 <?= $sous['items'] ?>
                                <?php elseif ($key === "monitoring"): ?>
                                    👁️ <?= $sous['items'] ?>
                                <?php elseif ($key === "training"): ?>
                                    🎓 <?= $sous['items'] ?>
                                <?php endif; ?>
                                        
                            <?php endif; ?>

                        </div>
                    </div>
                <?php endforeach; ?>
            </div>

            <p class="mt-4">
                <strong>Grâce à notre expertise, nous garantissons des solutions 
                  innovantes et respectueuses des normes de sécurité et environnementales.
                </strong>
            </p>

            <a href="services.php" class="btn btn-secondary mt-4">⬅️ Retour aux services</a>
        </div>
    </div>
</section>
</main>



<?php include('includes/footer.php'); ?>
