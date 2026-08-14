<?php

$dossier = __DIR__ . '/content/actualitesGenerales/';

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
    <title>Actualités - CIGL ESCH ASBL</title>
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
            <h2>ACTUALITES</h2>
            <h1>Toutes nos <br> actualités</h1>
            <h3>Retrouvez ici toutes les dernières nouvelles du CIGL Esch : <br> vie associative, projets, événements et
                publications.</h3>
        </div>
        <img src="img/accueil-actu.jpg" alt="">
    </div>
    <br>
    <!-- ===== MAIN CONTENT ===== -->
    <main class="content">
        <div class="content-inner">
            <div class="filters-bar">
                <div class="search-box">
                    <svg width="16" height="16" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2">
                        <circle cx="11" cy="11" r="7" />
                        <line x1="21" y1="21" x2="16.65" y2="16.65" />
                    </svg>
                    <input type="text" id="searchInput" placeholder="Rechercher une actualité…">
                </div>
            </div>

            <div class="layout-grid">

                <!-- SIDEBAR -->
                <aside class="sidebar" aria-label="Catégories">
                    <ul class="cat-list">
                        <li>
                            <button class="cat-item active" data-category="toutes">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="3" width="7" height="7" rx="1" />
                                    <rect x="14" y="3" width="7" height="7" rx="1" />
                                    <rect x="3" y="14" width="7" height="7" rx="1" />
                                    <rect x="14" y="14" width="7" height="7" rx="1" />
                                </svg>
                                Toutes les actualités
                            </button>
                        </li>
                        <li>
                            <button class="cat-item" data-category="vie-associative">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M17 21v-2a4 4 0 0 0-4-4H5a4 4 0 0 0-4 4v2" />
                                    <circle cx="9" cy="7" r="4" />
                                    <path d="M23 21v-2a4 4 0 0 0-3-3.87" />
                                    <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                </svg>
                                Vie associative
                            </button>
                        </li>
                        <li>
                            <button class="cat-item" data-category="services">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path d="M20 7h-9M14 17H5" />
                                    <circle cx="17" cy="17" r="3" />
                                    <circle cx="7" cy="7" r="3" />
                                </svg>
                                Actualités des services
                            </button>
                        </li>
                        <li>
                            <button class="cat-item" data-category="projets">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <path
                                        d="M11 20A7 7 0 0 1 9.8 6.1C15.5 5 17 4.48 19 2c1 2 2 4.18 2 8 0 5.5-4.78 10-10 10Z" />
                                    <path d="M2 21c0-3 1.85-5.36 5.08-6C9.5 14.52 11 13 11 11" />
                                </svg>
                                Projets et réalisations
                            </button>
                        </li>
                        <li>
                            <button class="cat-item" data-category="evenements">
                                <svg width="17" height="17" viewBox="0 0 24 24" fill="none" stroke="currentColor"
                                    stroke-width="2">
                                    <rect x="3" y="4" width="18" height="18" rx="2" />
                                    <line x1="16" y1="2" x2="16" y2="6" />
                                    <line x1="8" y1="2" x2="8" y2="6" />
                                    <line x1="3" y1="10" x2="21" y2="10" />
                                </svg>
                                Événements
                            </button>
                        </li>
                    </ul>
                </aside>

                <!-- ARTICLE LIST -->
                <section class="articles" id="articlesList" aria-label="Liste des actualités">

                    <?php

                    $colors = Array('orange', 'green', 'teal', 'red');
                    $tagColors = Array('tag-blue', 'tag-green', 'tag-teal', 'tag-orange');

                    for ($i=0; $i < sizeof($actus); $i++) { 
                        echo(
                            "<article class='article-card' data-category='".$actus[$i]['categorie']."'
                                data-title='".$actus[$i]['titre']."' data-tag='".$actus[$i]['titre']."'>
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

        <div>
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-2ff384a8-a4c7-421d-ae98-2e40bb19f530" data-elfsight-app-lazy></div>
            <br><br><br><br>
            <script src="https://elfsightcdn.com/platform.js" async></script>
            <div class="elfsight-app-803e69fc-2b4e-492c-8464-379cd11c26ca" data-elfsight-app-lazy></div>
        </div>
    </main>

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
                    légales </a> | <a href=""> Cookies</a>
            </div>
        </footer>
    </div>
    <script src="script/scriptActu.js"></script>
    <script src="script/script.js"></script>
</body>