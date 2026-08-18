<?php

$service = json_decode(
    file_get_contents("content/service.json"),
    true
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services - CIGL ESCH ASBL</title>
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
            <h2>NOS SERVICES</h2>
            <h1>Des solutions concrètes pour répondre à vos besoins au quotidien.</h1>
            <h3>Retrouvez l'ensemble de nos services classés par thématique afin de trouver celui qui vous
                correspondra.</h3>
        </div>
        <img src="img/acceuil-service.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="titreETstats">
            <div class="titre-sections">
                <h2 class="orange">PRESENTATION</h2>
                <h4>Des services utiles, <br> accessibles à tous</h4>
                <h3 class="presP">Au quotidien, chacun peut avoir des besoins différents. Que ce soit pour votre
                    famille, votre mobilité, votre logement, votre environnement ou vos loisirs,
                    il n'est pas toujours évident de savoir vers quel service se tourner.<br>
                    <br>
                    C'est pourquoi nous avons organisé nos services par thématiques, afin de vous permettre de
                    trouver facilement celui qui correspond à votre situation. Derrière chaque service, il y a des
                    équipes engagées, à votre écoute, prêtes à vous accompagner avec bienveillance et
                    professionnalisme.<br>
                    <br>
                    Prenez quelques instants pour parcourir les différentes catégories et découvrez des solutions
                    concrètes,adaptées à votre quotidien. <br> Notre objectif est simple :
                    vous faciliter la vie et vous orienter vers le
                    service qui répond le mieux à vos attentes.
                </h3>
            </div>
            <div class="stats-grid-service">
                <div class="stat-cards-service">
                    <div class="stat-icon-service">
                        <img src="img/icons/chronologie/velo.png" alt="">
                    </div>
                    <div class="stats-not-icon-service">
                        <div class="stat-number" data-target="<?= $service["velo"] ?>">0</div>
                        <div class="stat-label">vélos éléctriques à disposition</div>
                    </div>
                </div>
                <div class="stat-cards-service">
                    <div class="stat-icon-service">
                        <img src="img/icons/chronologie/poussette.png" alt="">
                    </div>
                    <div class="stats-not-icon-service">
                        <div class="stat-number" data-target="<?= $service["accueil"] ?>"></div>
                        <div class="stat-label">places d'accueil</div>
                    </div>
                </div>
                <div class="stat-cards-service">
                    <div class="stat-icon-service">
                        <img src="img/icons/chronologie/feuille.png" alt="">
                    </div>
                    <div class="stats-not-icon-service">
                            <div class="stat-number" data-target="<?= $service["desherbage"] ?>">0</div>
                            <div class="stat-label">rues/places désherbées</div>
                    </div>
                </div>
            </div>
        </div>

        <br><br><br>
        <div class="titre-sections">
            <h4>Les services selon vos besoins</h4>
            <h3>Selectionnez une catégorie pour découvrir les services associées.</h3>
        </div>
        <div class="services">
            <div class="services-grid">
                <a class="services-link" href="pagesServices/famille/famille.php">
                    <div class="services-cards">
                        <img src="img/icons/services/famille.png">
                        <p>Famille & enfants</p>
                        <p class="fleche orange">➞</p>
                    </div>
                </a>
                <a class="services-link" href="pagesServices/mobilite/mobilite.php">
                    <div class="services-cards">
                        <img src="img/icons/services/velo.png">
                        <p>Mobilité</p>
                        <p class="fleche bleu">➞</p>
                    </div>
                </a>
                <a class="services-link" href="pagesServices/jardin/jardin.php">
                    <div class="services-cards">
                        <img src="img/icons/services/feuille.png">
                        <p>Jardin & environnement</p>
                        <p class="fleche vert">➞</p>
                    </div>
                </a>
                <a class="services-link" href="pagesServices/maison/maison.php">
                    <div class="services-cards">
                        <img src="img/icons/services/maison.png">
                        <p>Maison & personne</p>
                        <p class="fleche rouge">➞</p>
                    </div>
                </a>
                <a class="services-link" href="pagesServices/loisir/loisir.php">
                    <div class="services-cards">
                        <img src="img/icons/services/tente.png">
                        <p>Loisir & tourisme</p>
                        <p class="fleche orange">➞</p>
                    </div>
                </a>
                <a class="services-link" href="pagesServices/amenagement/amenagement.php">
                    <div class="services-cards">
                        <img src="img/icons/services/cle.png">
                        <p>Aménagement & travaux</p>
                        <p class="fleche bleu">➞</p>
                    </div>
                </a>
            </div>
        </div>
        <br><br>
        <div class="titre-sections">
            <h4>Comment ça fonctionne</h4>
            <br>
            <div class="fonctionnement">
                <div class="function-cards">
                    <p class="etape une">1</p>
                    <img src="img/icons/function/loupe.png">
                    <p class="">Choississez <br> une catégorie</p>
                </div>
                <img src="img/icons/function/fleche.png" alt="">
                <div class="function-cards">
                    <p class="etape deux">2</p>
                    <img src="img/icons/function/liste.png">
                    <p class="">Découvrez <br> les services</p>
                </div>
                <img src="img/icons/function/fleche.png" alt="">
                <div class="function-cards">
                    <p class="etape trois">3</p>
                    <img src="img/icons/function/contact.png">
                    <p class="">Contactez <br> nos équipes</p>
                </div>
            </div>
        </div>
        <br>
        <div class="accomp">
            <img src="img/icons/function/messagerie.png">
            <div class="accomptxt">
                <b>Vous ne savez pas quel service choisir</b>
                <h3>Nos équipes sont à votre disposition pour vous orienter dans votre choix.</h3>
            </div>
            <a href="contact.php" class="button">Nous contacter ➞</a>
        </div>
        <br>
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