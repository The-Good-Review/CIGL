<?php

$dossier = __DIR__ . '/content/emplois/';

$emplois = [];
if (!is_dir($dossier)) {
    return $emplois;
}
$fichiers = glob($dossier . '*.json');
foreach ($fichiers as $fichier) {
    $contenu = file_get_contents($fichier);
    $emploi = json_decode($contenu, true);
    if ($emploi !== null) {
        $emploi['_fichier'] = basename($fichier);
        $emplois[] = $emploi;
    }
}

$dossier = __DIR__ . '/content/documents/';

$documents = [];
if (!is_dir($dossier)) {
    return $documents;
}
$fichiers = glob($dossier . '*.json');
foreach ($fichiers as $fichier) {
    $contenu = file_get_contents($fichier);
    $document = json_decode($contenu, true);
    if ($document !== null) {
        $document['_fichier'] = basename($fichier);
        $documents[] = $document;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ressources - CIGL ESCH ASBL</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="img/logo_fenetre.png">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
    <header class="navbar" id="navbar">
        <a href="index.php"><img id="logo" src="img/siteweb_logo_paysage-2.png" alt="Logo CIGL ESCH"></a>
        <label class="burger" for="burger">
            <input type="checkbox" id="burger">
            <span></span>
            <span></span>
            <span></span>
        </label>
        <nav id="menu" class="liens-vert">
            <button type="button" class="nav-back vert" id="navBack">
                <span aria-hidden="true">‹</span> Retour
            </button>
            <div class="nav-item vert"><a href="index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item vert"><a href="ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item vert"><a href="service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="pagesServices/famille/famille.php">Famille & Enfants</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Enfance et jeunesse" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-creche-belval/"
                                        target="_blank">Creche Belval</a>
                                </li>
                                <li><a href="https://heemelmaus.lu/qui-sommes-nous-accueil-educatif/"
                                        target="_blank">Acceuil
                                        Educatif</a></li>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-maison-relais/"
                                        target="_blank">Maison Relai</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="pagesServices/mobilite/mobilite.php">Mobilité</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="pagesServices/jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Nature, création et citoyenneté"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="pagesServices/jardin/deg.php">Den Escher Geméisguart</a></li>
                                <li><a href="pagesServices/jardin/kal.php">Kalendula</a></li>
                                <li><a href="pagesServices/jardin/lag.php">Léieren am gaart</a></li>
                                <li><a href="https://interreg-gr.eu/project/integravert-fr-2/"
                                        target="_blank">Integravert</a></li>
                                <li><a href="pagesServices/jardin/rec.php">RECUP</a></li>
                                <li><a href="pagesServices/jardin/legumes.php">Vente de Légumes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="pagesServices/maison/maison.php">Maison et Personne</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Service de proximité" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="pagesServices/maison/personne.php">Service à la personne</a></li>
                                <li><a href="pagesServices/maison/den.php">Den Handkesselchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="pagesServices/loisir/loisir.php">Loisir & Tourisme</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Tourisme"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="pagesServices/loisir/stuff.php">Brasserie Camping Stuff</a>
                                </li>
                                <li><a href="pagesServices/loisir/rosati.php">Maison Rosati</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="pagesServices/amenagement/amenagement.php">Aménagement & Travaux</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Aménagement et construction"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="pagesServices/amenagement/entretien.php">Entretien des espaces
                                        verts</a></li>
                                <li><a href="pagesServices/amenagement/construction.php">Construction Durable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item vert"><a href="accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item vert"><a href="actualite.php">ACTUALITES</a></div>
            <div class="nav-item vert"><a href="ressources.php">RESSOURCES</a></div>
            <div class="nav-item vert"><a href="contact.php">CONTACT</a></div>
        </nav>
    </header>

    <div class="imageAcceuil">
        <div>
            <h2>Ressources</h2>
            <h1>Ressources utiles <br> à votre parcours</h1>
            <h3>Retrouvez ici nos offres d'emploi, formulaires, <br> rapports publications et autres documents utiles.
            </h3>
        </div>
        <img src="img/accueil-ressource.jpg" alt="">
    </div>

    <div class="page">
        <p class="eyebrow">Documents</p>
        <div class="documents">
            <div class="services-grid">
                <a class="services-link" href="<?= $documents[0]["lien"] ?>" target="_blank">
                    <div class="services-cards">
                        <img src="img/icons/services/download-bleu.png">
                        <p><?= $documents[0]["nom"] ?></p>
                        <p class="fleche bleu">➞</p>
                    </div>
                </a>
                <a class="services-link" href="<?= $documents[1]["lien"] ?>" target="_blank">
                    <div class="services-cards">
                        <img src="img/icons/services/download-orange.png">
                        <p><?= $documents[1]["nom"] ?></p>
                        <p class="fleche orange">➞</p>
                    </div>
                </a>
                <a class="services-link" href="<?= $documents[2]["lien"] ?>" target="_blank">
                    <div class="services-cards">
                        <img src="img/icons/services/download-vert.png">
                        <p><?= $documents[2]["nom"] ?></p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="<?= $documents[3]["lien"] ?>" target="_blank">
                    <div class="services-cards">
                        <img src="img/icons/services/download-rouge.png">
                        <p><?= $documents[3]["nom"] ?></p>
                        <p class="fleche rouge">➞</p>
                    </div>
                </a>
            </div>
        </div>
        <br><br><br>
        <p class="eyebrow">Postes vacants</p>
        <div class="postes">
            <section class="articles" id="jobList" aria-label="Liste des postes vacants">
                <?php

                $tagColors = array('tag-blue', 'tag-green', 'tag-teal', 'tag-orange');

                function offreEstActive($datePublication)
                {
                    $mois = ['janvier' => '01', 'février' => '02', 'mars' => '03', 'avril' => '04', 'mai' => '05', 'juin' => '06', 'juillet' => '07', 'août' => '08', 'septembre' => '09', 'octobre' => '10', 'novembre' => '11', 'décembre' => '12'];

                    $datePublication = strtolower(trim($datePublication));

                    foreach ($mois as $nom => $numero) {
                        $datePublication = str_replace($nom, $numero, $datePublication);
                    }

                    $date = DateTime::createFromFormat('d m Y', $datePublication);

                    if (!$date) {
                        return false;
                    }

                    $dateExpiration = clone $date;
                    $dateExpiration->modify('+21 days');

                    $aujourdHui = new DateTime('today');

                    return $aujourdHui < $dateExpiration;
                }

                if (sizeof($emplois) == 0) {
                    echo ("<p class='no-results' id='noResults'>Aucune offre d'emploi n'est actuellement en ligne</p>");
                } else {
                    for ($i = 0; $i < sizeof($emplois); $i++) {
                        if (!offreEstActive($emplois[$i]['date'])) {
                            continue;
                        }
                        else {
                            echo ("
                                <a style='text-decoration: none;' class='preslink' href='poste.php?poste=" . $emplois[$i]['pageAssociee'] . "'>
                                    <article class='article-card'>
                                        <div class='article-body'>
                                            <h3>" . $emplois[$i]['poste'] . "</h3>
                                            <p class='article-desc'>" . $emplois[$i]['description'] . " 
                                            </p>
                                            <div class='article-meta'>
                                                <span class='article-date'>
                                                    <svg width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                                        stroke-width='2'>
                                                        <rect x='3' y='4' width='18' height='18' rx='2' />
                                                        <line x1='16' y1='2' x2='16' y2='6' />
                                                        <line x1='8' y1='2' x2='8' y2='6' />
                                                        <line x1='3' y1='10' x2='21' y2='10' />
                                                    </svg>
                                                    " . $emplois[$i]['date'] . "
                                                </span>
                                                <span class='tag " . $tagColors[$i % 4] . "'>" . $emplois[$i]['contrat'] . "</span>
                                            </div>
                                        </div>
                                        ➜
                                    </article>
                                </a>
                            ");
                        }
                    }
                }
                ?>
            </section>
        </div>

        <br><br><br><br>

        <p class="eyebrow">Candidature spontanée</p>
        <form action="php/mail.php" method="POST" enctype="multipart/form-data" id="candidature-form">
            <fieldset>
                <div class="section-head">
                    <span class="section-num">01</span>
                    <legend class="section-title">Vous</legend>
                </div>
                <div class="field-grid">
                    <div class="field">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" autocomplete="given-name" required>
                    </div>
                    <div class="field">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" autocomplete="family-name" required>
                    </div>
                    <div class="field">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" name="email" autocomplete="email" required>
                    </div>
                    <div class="field">
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" autocomplete="tel" required>
                    </div>
                    <div class="field full">
                        <label for="ville">Ville de résidence</label>
                        <input type="text" id="ville" name="ville" autocomplete="address-level2">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">02</span>
                    <legend class="section-title">Le poste recherché</legend>
                </div>
                <div class="field-grid">
                    <div class="field">
                        <label for="domaine">Domaine souhaité</label>
                        <select id="domaine" name="domaine" required>
                            <option value="">Sélectionner…</option>
                            <option>Commercial & vente</option>
                            <option>Marketing & communication</option>
                            <option>Technique & production</option>
                            <option>Informatique & digital</option>
                            <option>Administration & gestion</option>
                            <option>Ressources humaines</option>
                            <option>Autre</option>
                        </select>
                    </div>
                    <div class="field">
                        <label for="contrat">Type de contrat</label>
                        <select id="contrat" name="contrat" required>
                            <option value="">Sélectionner…</option>
                            <option>CDI</option>
                            <option>CDD</option>
                            <option>Stage</option>
                            <option>Apprentissage</option>
                            <option>Freelance</option>
                        </select>
                    </div>
                    <div class="field full">
                        <label for="disponibilite">Disponibilité <span class="opt">(optionnel)</span></label>
                        <input type="date" id="disponibilite" name="disponibilite">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">03</span>
                    <legend class="section-title">Votre parcours</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="motivation">Votre message</label>
                        <textarea id="parcours" name="parcours"
                            placeholder="Présentez-vous en quelques lignes : votre parcours, ce que vous recherchez, et pourquoi vous nous contactez."></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">04</span>
                    <legend class="section-title">Quelque chose à ajouter</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="motivation">Votre message</label>
                        <textarea id="message" name="message"
                            placeholder="Si vous avez quelque message que ce soit à nous transmettre."></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">05</span>
                    <legend class="section-title">Pièces jointes</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="cv">CV</label>
                        <div class="dropzone">
                            <input type="file" id="cv" name="cv" accept=".pdf" required>
                            <div class="dz-label">Cliquez ou déposez votre fichier</div>
                            <div class="dz-sub">PDF</div>
                            <div class="file-name" id="cv-name"></div>
                        </div>
                    </div>
                    <div class="field full">
                        <label for="lettre">Lettre de motivation <span class="opt">(optionnel)</span></label>
                        <div class="dropzone">
                            <input type="file" id="lettre" name="lettre" accept=".pdf">
                            <div class="dz-label">Cliquez ou déposez votre fichier</div>
                            <div class="dz-sub">PDF</div>
                            <div class="file-name" id="lettre-name"></div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="consent">
                <input type="checkbox" id="rgpd" name="rgpd" required>
                <label for="rgpd">J'accepte que les informations transmises via ce formulaire soient utilisées dans le
                    cadre du traitement de ma candidature, conformément à la <a class="preslink"
                        href="https://www.ciglesch.lu/wp-content/uploads/2024/12/PS15_Politique_protection_DCP_CIGLEsch_v00_04.pdf">politique
                        de confidentialité</a>.</label>
            </div>

            <div class="actions">
                <button type="submit">Envoyer ma candidature</button>
            </div>
        </form>
    </div>

    <button id="btn" class="Btn">
        <span class="text"><img src="img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/CIGLEsch/" target="_blank"><img
                src="img/icons/medias/facebook.png" alt="facebook"></a>
        <a class="media" href="https://www.linkedin.com/company/ciglesch" target="_blank"><img
                src="img/icons/medias/linkedin.png" alt="linkedin"></a>
        <a class="media" href="https://www.youtube.com/@ciglesch1101" target="_blank"><img
                src="img/icons/medias/youtube.png" alt="youtube"></a>
        <a class="media" href="https://www.instagram.com/ciglesch" target="_blank"><img src="img/icons/medias/insta.png"
                alt="instagram"></a>
    </button>

    <div>
        <div id="partenaires" class="grey-back">
            <div class="soutien">
                <b>Avec le soutien de</b>
                <h3>Partenaires institutionnels</h3>
            </div>
            <div id="top-invest">
                <img src="img/logo/travail.png" alt="logo ministère du travail">
                <img src="img/logo/esch.png" alt="logo ville d'esch">
            </div>
            <div class="vertical-line"></div>
            <img src="img/logo/education.png" alt="logo ministère de l'éducation">
            <img src="img/logo/environnement.png" alt="logo ministère de l'environnement">
            <img src="img/logo/agriculture.png" alt="logo ministère de l'agriculture">
            <img src="img/logo/oeuvreNationale.png" alt="logo oeuvre nationale">
        </div>
        <footer>
            <div class="adress">
                <b>CIGL Esch-sur-Alzette a.s.b.l.</b>
                <a href="https://maps.app.goo.gl/LywJj1peBjcj2GXX9" target="_blank">86, rue Victor Hugo, L-4141
                    Esch-sur-Alzette</a>
            </div>
            <div id="liensdubas">
                <a href="https://www.ciglesch.lu/wp-content/uploads/2024/12/PS15_Politique_protection_DCP_CIGLEsch_v00_04.pdf"
                    target="_blank">Politique
                    de confidentialité </a> | <a href="/mentions.php"> Mentions
                    légales </a> | <a href=""> Cookies</a>
            </div>
        </footer>
    </div>
    <script src="script/script.js"></script>
    <script src="script/scriptRessources.js"></script>
</body>