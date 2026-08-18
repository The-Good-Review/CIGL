<?php

$accomp = json_decode(
    file_get_contents("content/accompagnement.json"),
    true
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accompagnement - CIGL ESCH ASBL</title>
    <link rel="stylesheet" href="style/style.css">
    <link rel="icon" type="image/png" href="img/logo_fenetre.png">
</head>

<body>
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
                                <li><a href="https://interreg-gr.eu/project/integravert-fr-2/" target="_blank">Integravert</a></li>
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
            <h2>ACCOMPAGNEMENT</h2>
            <h1>Votre projet est notre <br> principale priorité </h1>
            <h3>Du service à la personne à la réinssertion professionelle <br> nous choisissons de vous accompagner
                chaque jour.</h3>
        </div>
        <img src="img/acceuil-accomp.jpg" alt="">
    </div>
    <br>
    <div class="stats">
        <div class="stats-grid">
            <div class="stat-cards">
                <div class="stat-icon">
                    <img src="img/icons/stats/salarie.png" alt="">
                </div>
                <div class="stats-not-icon">
                    <div class="stat-number" data-target="<?= $accomp["salaries"] ?>">0</div>
                    <div class="stat-label">salariés en insertions</div>
                </div>
            </div>
            <div class="stat-cards">
                <div class="stat-icon">
                    <img src="img/icons/stats/stat.png" alt="">
                </div>
                <div class="stats-not-icon">
                    <div class="stat-label">dont</div>
                    <div class="stat-nu">
                        <div class="stat-number" data-target="<?= $accomp["cinquantenaire"] ?>">0</div>
                        <div class="stat-unit">%</div>
                    </div>
                    <div class="stat-label">de plus de 50 ans</div>
                </div>
            </div>
            <div class="stat-cards">
                <div class="stat-icon">
                    <img src="img/icons/stats/heure.png" alt="">
                </div>
                <div class="stats-not-icon">
                    <div class="stat-nu">
                        <div class="stat-number" data-target="<?= $accomp["heures"] ?>">0</div>
                        <div class="stat-unit">h</div>
                    </div>
                    <div class="stat-label">de formations réalisées</div>
                </div>
            </div>
            <div class="stat-cards">
                <div class="stat-icon">
                    <img src="img/icons/stats/formation.png" alt="">
                </div>
                <div class="stats-not-icon">
                    <div class="stat-label">réparties en</div>
                    <div class="stat-number" data-target="<?= $accomp["formations"] ?>"></div>
                    <div class="stat-label">formations différentes</div>
                </div>
            </div>
        </div>
    </div>
    <div class="grey-back">
        <div id="prestxt">
            <p class="presP">La mission du service « Accompagnement vers l'emploi » du CIGL Esch consiste à accompagner
                une dynamique dont le seul acteur est la personne en parcours, les encadrants étant des catalyseurs.
                Il s'organise autour de 4 grands axes :</p>
            <ul>
                <li class="presP">Accueil et intégration en milieu de travail</li>
                <li class="presP">L'accompagnement socio-professionnel</li>
                <li class="presP">La formation des salariés en insertion</li>
                <li class="presP">La recherche d'emploi</li>
            </ul>
        </div>
    </div>
    <div class="imgAccomp">
        <img src="img/accomp/SAVE1.jpg" alt="">
        <img src="img/accomp/SAVE2.jpg" alt="">
        <img src="img/accomp/SAVE3.jpg" alt="">
        <img src="img/accomp/SAVE4.jpg" alt="">
        <img src="img/accomp/SAVE5.jpg" alt="">
    </div>
    <div class="imgAccompMobile">
        <img src="img/accomp/schéma-vertical.png" alt="">
    </div>
    <div class="grey-back">
        <div id="prestxt">
            <p class="presP">Chaque demandeur d'emploi accueilli est pris dans son entité (personnelle et
                professionnelle)
                dès son arrivée par l'intermédiaire d'un entretien. Lors de cet entretien, le demandeur d'emploi
                signifie
                par la signature d'un contrat interne d'engagement réciproque sa volonté de s'impliquer dans une
                consolidation de sa situation sociale et / ou dans la construction de projets professionnels lui
                permettant
                d'intégrer plus facilement le premier marché du travail.</p>
            <p class="presP">De cet engagement découle un parcours d'insertion socio-professionnelle individuel : entrée
                et
                adaptation dans la structure, validation et construction d'un projet de vie et projet professionnel
                (projet
                réaliste et réalisable), mise en place de formations « adaptation au poste de travail » en lien avec les
                postes vacants et formations continues (développement de compétences personnelles) dont le choix, le
                contenu
                et la durée varient en fonction des personnes et de leur parcours.</p>
            <p class="presP">La formation prend un aspect important pour l'insertion professionnelle : suite à l'analyse
                du
                parcours du salarié en insertion, de son poste de travail et de l'identification du projet
                professionnel,
                des actions de formation spécifiques lui sont proposées.</p>
            <p class="presP">Tout demandeur d'emploi allant au terme de son contrat de travail aura en sa possession un
                plan
                d'action de recherche d'emploi.</p>
            <p class="presP">Par le biais de projets répondant à des besoins locaux et sociaux, le CIGL Esch met le
                demandeur d'emploi au centre de ses actions, le rendant acteur de son projet de vie.</p>
        </div>
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
    <script src="script/script.js"></script>
</body>