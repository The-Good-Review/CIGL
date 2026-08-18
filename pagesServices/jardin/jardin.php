<?php

$dossier = __DIR__ . '/../../content/actualitesFamille/jardin/';

$actus = [];
if (!is_dir($dossier)) {
    return $actus;
}
$fichiers = glob($dossier . '*.json');
foreach ($fichiers as $fichier) {
    $contenu = file_get_contents($fichier);
    $actualite = json_decode($contenu, true);
    if ($actualite !== null) {
        $actualite['_fichier'] = basename($fichier);
        $actus[] = $actualite;
    }
}

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Jardin & Environnement - CIGL ESCH ASBL</title>
    <link rel="stylesheet" href="../../style/style.css">
    <link rel="icon" type="image/png" href="../../img/logo_fenetre.png">
</head>

<body>
    <header class="navbar" id="navbar">
        <a href="../../index.php"><img id="logo" src="../../img/siteweb_logo_paysage-2.png" alt="Logo CIGL ESCH"></a>
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
            <div class="nav-item vert"><a href="../../index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item vert"><a href="../../ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item vert"><a href="../../service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="../famille/famille.php">Famille & Enfants</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Enfance et jeunesse" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-creche-belval/" target="_blank">Creche Belval</a>
                                </li>
                                <li><a href="https://heemelmaus.lu/qui-sommes-nous-accueil-educatif/" target="_blank">Acceuil
                                        Educatif</a></li>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-maison-relais/" target="_blank">Maison Relai</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../mobilite/mobilite.php">Mobilité</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Nature, création et citoyenneté"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="deg.php">Den Escher Geméisguart</a></li>
                                <li><a href="kal.php">Kalendula</a></li>
                                <li><a href="lag.php">Léieren am gaart</a></li>
                                <li><a href="https://interreg-gr.eu/project/integravert-fr-2/" target="_blank">Integravert</a></li>
                                <li><a href="rec.php">RECUP</a></li>
                                <li><a href="legumes.php">Vente de Légumes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../maison/maison.php">Maison et Personne</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Service de proximité" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../maison/maison.php">Service à la personne</a></li>
                                <li><a href="../maison/den.php">Den Handkesselchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../loisir/loisir.php">Loisir & Tourisme</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Tourisme"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../loisir/stuff.php">Brasserie Camping Stuff</a>
                                </li>
                                <li><a href="../loisir/rosati.php">Maison Rosati</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../amenagement/amenagement.php">Aménagement & Travaux</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Aménagement et construction"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../amenagement/entretien.php">Entretien des espaces
                                        verts</a></li>
                                <li><a href="../amenagement/construction.php">Construction Durable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item vert"><a href="../../accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item vert"><a href="../../actualite.php">ACTUALITES</a></div>
            <div class="nav-item vert"><a href="../../ressources.php">RESSOURCES</a></div>
            <div class="nav-item vert"><a href="../../contact.php">CONTACT</a></div>
        </nav>
    </header>
    <div class="imageAcceuil">
        <div>
            <h2 class="vert">JARDIN & ENVIRONNEMENT</h2>
            <h1>Pour un environnement <br> présérvé et partagé.</h1>
            <h3>Nous agissons pour un cadre de vie plus vert, <br> plus sain et plus respectueux de la nature.</h3>
        </div>
        <img src="../../img/accueil-service/jardin.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service">
                <img src="../../img/icons/services/personne-vert.png">
                <p class="info-service-text"><b>Pour qui ?</b> <br> Habitants, associations, collectivités ou toute personne souhaitant participer à un cadre de vie plus durable.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service">
                <img src="../../img/icons/services/objectif-vert.png">
                <p class="info-service-text"><b>Notre objectif</b> <br> Entretenir les espaces verts, développer des projets environnementaux ou sensibiliser à la nature.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service">
                <img src="../../img/icons/services/alliance-vert.png">
                <p class="info-service-text"><b>Notre engagement</b> <br> Préserver l'environnement tout en favorisant les initiatives locales et citoyennes.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service">
                <img src="../../img/icons/services/approche-vert.png">
                <p class="info-service-text"><b>Notre approche</b> <br> Des actions concrètes menées dans une logique de développement durable et de coopération.</p>
            </div>
        </div>
        <br><br>
        <div class="titre-sections">
            <h4>Les services disponibles</h4>
            <h3>Voici les services à votre disposition pour cette catégorie.</h3>
        </div>
        <div class="services">
            <div class="services-grid">
                <a class="services-link" href="deg.php">
                    <div class="services-cards">
                        <img src="../../img/icons/services/cultiver.png">
                        <p>Den Escher Geméisguart</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="kal.php">
                    <div class="services-cards">
                        <img src="../../img/icons/services/jardin.png">
                        <p>Kalendula</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="lag.php">
                    <div class="services-cards">
                        <img src="../../img/icons/services/sensib.png">
                        <p>Léieren am gaart</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="https://interreg-gr.eu/project/integravert-fr-2/" target="_blank">
                    <div class="services-cards">
                        <img src="../../img/icons/services/parc.png">
                        <p>Integravert</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="rec.php">
                    <div class="services-cards">
                        <img src="../../img/icons/services/paysage.png">
                        <p>REC'UP</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="legumes.php">
                    <div class="services-cards">
                        <img src="../../img/icons/services/legumes.png">
                        <p>Vente de Légumes</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
            </div>
        </div>
        <div class="titre-sections">
            <h4>Acutalités</h4>
        </div>
        <div class="actuFamille">
            <section class="articles" id="articlesList" aria-label="Liste des actualités">

                <?php

                $colors = Array('orange', 'green', 'teal', 'red');
                $tagColors = Array('tag-blue', 'tag-green', 'tag-teal', 'tag-orange');

                for ($i=0; $i < sizeof($actus); $i++) { 
                    echo(
                        "<article class='article-card' data-title='".$actus[$i]['titre']."
                        'data-tag='".$actus[$i]['titre']."'>
                            <div class='article-thumb' aria-hidden='true'>
                                <img src='".$actus[$i]['img']."' alt=''>
                            </div>
                            <div class='article-body'>
                                <p class='article-eyebrow eyebrow-".$colors[$i%4]."'>".$actus[$i]['titre']."</p>
                                <h3>".$actus[$i]['sous-titre']."</h3>
                                <p class='article-desc'>".$actus[$i]['contenu']."</p>
                                <div class='article-meta'>
                                    <span class='article-date'>
                                        <svg width='14' height='14' viewBox='0 0 24 24' fill='none' stroke='currentColor'
                                            stroke-width='2'>
                                            <rect x='3' y='4' width='18' height='18' rx='2' />
                                            <line x1='16' y1='2' x2='16' y2='6' />
                                            <line x1='8' y1='2' x2='8' y2='6' />
                                            <line x1='3' y1='10' x2='21' y2='10' />
                                        </svg>
                                        ".$actus[$i]['date']."
                                    </span>
                                    <span class='tag ".$tagColors[$i%4]."'>".$actus[$i]['titre']."</span>
                                </div>
                            </div>
                        </article>"
                    );
                }
                ?>

                <p class="no-results" id="noResults" hidden>Aucune actualité ne correspond à votre recherche.</p>
            </section>
        </div>
    </div>
    
    <button id="btn" class="Btn">
        <span class="text"><img src="../../img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/CIGLEsch/" target="_blank"><img
                src="../../img/icons/medias/facebook.png" alt="facebook"></a>
        <a class="media" href="https://www.linkedin.com/company/ciglesch" target="_blank"><img
                src="../../img/icons/medias/linkedin.png" alt="linkedin"></a>
        <a class="media" href="https://www.youtube.com/@ciglesch1101" target="_blank"><img
                src="../../img/icons/medias/youtube.png" alt="youtube"></a>
        <a class="media" href="https://www.instagram.com/ciglesch" target="_blank"><img src="../../img/icons/medias/insta.png"
                alt="instagram"></a>
    </button>

    <div>
        <div id="partenaires" class="grey-back">
            <div class="soutien">
                <b>Avec le soutien de</b>
                <h3>Partenaires institutionnels</h3>
            </div>
            <div id="top-invest">
                <img src="../../img/logo/travail.png" alt="logo ministère du travail">
                <img src="../../img/logo/esch.png" alt="logo ville d'esch">
            </div>
            <div class="vertical-line"></div>
            <img src="../../img/logo/education.png" alt="logo ministère de l'éducation">
            <img src="../../img/logo/environnement.png" alt="logo ministère de l'environnement">
            <img src="../../img/logo/agriculture.png" alt="logo ministère de l'agriculture">
            <img src="../../img/logo/oeuvreNationale.png" alt="logo oeuvre nationale">
        </div>
        <footer>
            <div class="adress">
                <b>CIGL Esch-sur-Alzette a.s.b.l.</b>
                <a href="https://maps.app.goo.gl/LywJj1peBjcj2GXX9" target="_blank">86, rue Victor Hugo, L-4141 Esch-sur-Alzette</a>
            </div>
            <div id="liensdubas">
                <a href="https://www.ciglesch.lu/wp-content/uploads/2024/12/PS15_Politique_protection_DCP_CIGLEsch_v00_04.pdf"
                    target="_blank">Politique
                    de confidentialité </a> | <a href="/mentions.php"> Mentions
                    légales </a> | <a href="#" id="clearSiteData"> Cookies </a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-6cbafc33-f0de-4d77-8cdb-d0ebd760a261"></div>
    <script src="../../script/script.js"></script>
</body>