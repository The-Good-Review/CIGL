<?php

$temoignages = json_decode(
    file_get_contents("../../content/temoignages.json"),
    true
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entretient des Espaces Verts - CIGL ESCH ASBL</title>
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
        <nav id="menu" class="liens-bleu">
            <button type="button" class="nav-back bleu" id="navBack">
                <span aria-hidden="true">‹</span> Retour
            </button>
            <div class="nav-item bleu"><a href="../../index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item bleu"><a href="../../ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item bleu"><a href="../../service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle bleu" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="../famille/famille.php">Famille & Enfants</a>
                        <button type="button" class="submenu-toggle bleu"
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
                        <button type="button" class="submenu-toggle bleu" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle bleu"
                            aria-label="Ouvrir le sous-menu Nature, création et citoyenneté"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../jardin/deg.php">Den Escher Geméisguart</a></li>
                                <li><a href="../jardin/kal.php">Kalendula</a></li>
                                <li><a href="../jardin/lag.php">Léieren am gaart</a></li>
                                <li><a href="https://interreg-gr.eu/project/integravert-fr-2/" target="_blank">Integravert</a></li>
                                <li><a href="../jardin/rec.php">RECUP</a></li>
                                <li><a href="../jardin/legumes.php">Vente de Légumes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../maison/maison.php">Maison et Personne</a>
                        <button type="button" class="submenu-toggle bleu"
                            aria-label="Ouvrir le sous-menu Service de proximité" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../maison/personne.php">Service à la personne</a></li>
                                <li><a href="../maison/den.php">Den Handkesselchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../loisir/loisir.php">Loisir & Tourisme</a>
                        <button type="button" class="submenu-toggle bleu" aria-label="Ouvrir le sous-menu Tourisme"
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
                        <button type="button" class="submenu-toggle bleu"
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
            <div class="nav-item bleu"><a href="../../accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item bleu"><a href="../../actualite.php">ACTUALITES</a></div>
            <div class="nav-item bleu"><a href="../../ressources.php">RESSOURCES</a></div>
            <div class="nav-item bleu"><a href="../../contact.php">CONTACT</a></div>
        </nav>
    </header>
    <div class="imageAcceuil">
        <div>
            <h2 class="bleu">AMENAGEMENT & TRAVAUX</h2>
            <h1>Etretient des <br> Espaces Verts</h1>
            <h3>Nettoyage, désherbage écologique, tonte, taille : <br> nos équipes entretiennent au quotidien les
                espaces <br>
                publics et privés d'Esch-sur-Alzette, sans pesticides.</h3>
        </div>
        <img src="../../img/accueil-service/entretien.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service-trois">
                <img src="../../img/icons/services/personne-bleu.png">
                <p class="info-service-text"><b>Public concerné</b> <br> - Ville d'Esch-sur-Alzette <br> - Institutions
                    & associations <br> - Particuliers
                </p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/objectif-bleu.png">
                <p class="info-service-text"><b>Mission</b> <br>Concevoir et réaliser des constructions et aménagements
                    respectueux de l'environnement à chaque étape.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/position-bleu.png">
                <p class="info-service-text"><b>Agrément / Zone d'intervention</b> <br> - Esch-sur-Alzette
                    <br> - Espaces publics & privés <br> - Matériaux naturels & de récupération
                </p>
            </div>
        </div>
        <div class="titreETstats grey-back">
            <div class="titre-sections">
                <h2 class="bleu">PRESENTATION</h2>
                <h4>Des espaces verts entretenus sans pesticides</h4>
                <br>
                <h3 class="presP">Ce service s'inscrit dans le cadre des campagnes Ouni Pestiziden et, plus
                    généralement, des projets d'entretien extensif de l'environnement. Il contribue ainsi à améliorer
                    nos conditions sociales, économiques et environnementales. <br>
                    <br>
                    Cette initiative est aussi créatrice d'emploi : de nombreux espaces publics nécessitent un entretien
                    régulier : nettoyage, désherbage, taille des massifs. Réalisé de façon écologique. <br>
                    <br>
                    Depuis de nombreuses années, le CIGL Esch prend en charge la gestion écologique de nombreux espaces
                    publics de la Ville et a initié de multiples projets à vocation écologique.
                </h3>
            </div>
            <img class="pres-service-img" src="../../img/services/entretien.jpg" alt="">
        </div>
        <br><br>
        <div class="services">
            <h2 class="bleu">SERVICES OFFERTS</h2>
            <div class="services-grid">
                <div class="services-cards-service">
                    <img src="../../img/icons/services/poubelle.png">
                    <p>Nettoyage, ramassage et tri des déchets</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/herbe.png">
                    <p>Désherbage écologique</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/tondeuse.png">
                    <p>Tonte de pelouse, débroussaillage, taille des arbres</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/jeux.png">
                    <p>Entretien des aires de jeux</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="bleu">MODALITES PRATIQUES</h2>
            <div class="modalite">
                <img id="azul" src="../../img/icons/services/note-bleu.png" alt="">
                <div class="liste">
                    <b>Informations :</b>
                    <ul>
                        <li>Interventions du lundi au vendredi, <br> de 7h00 à 16h30</li>
                        <br>
                        <li>Gestion écologique, sans pesticides, dans le <br> cadre de la campagne « Ouni Pestiziden »
                        </li>
                        <br>
                        <li>contactez nous par mail ou téléphone<br> <a class="preslink-bleu"
                                href="mailto:accueilbelval@ciglesch.lu">accueilbelval@ciglesch.lu</a> <br> <a
                                class="preslink-bleu" href="tel:+352544245505">+352 54 42 45 505</a></li>
                        <br>
                        <li>Service ouvert aux institutions, <br> associations et particuliers</li>
                    </ul>
                </div>
                <div class="vente">
                    <img src="../../img/services/cigl-service.png" alt="">
                    <a class="preslink-bleu" href="https://goo.gl/maps/TEJWP4B81iC2" target="_blank">371 Rte de Belval, L-4024
                        Esch-sur-Alzette</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="stats">
            <h2 class="titre-chiffres bleu">QUELQUES CHIFFRES</h2>
            <div class="stats-grid">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/debroussailleuse.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="15450">0</div>
                            <div class="stat-unit">h</div>
                        </div>
                        <div class="stat-label">d'intervention pour la Ville d'Esch-sur-Alzette</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/pelouse.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="40">0</div>
                        <div class="stat-label">rues ou places désherbées écologiquement</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/jeux.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="14">0</div>
                        <div class="stat-label">aires de jeux entretenues</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="services">
            <h2 class="bleu">TARIFS</h2>
            <div class="tarif">
                <div class="cout">
                    <b>Tarif horaire</b>
                    <h1>15 - 18 €</h1>
                </div>
                <div class="vertical-line"></div>
                <div class="cout">
                    <b>Frais de déplacement</b>
                    <h1>3 - 5 €</h1>
                </div>
                <div class="vertical-line"></div>
                <div class="cout">
                    <b>Machines</b>
                    <h1>4 - 7 €</h1>
                </div>
            </div>
            <!-- Mobile -->
            <div class="tarifMobile">
                <div class="tarifM">
                    <div class="cout">
                        <b>Tarif horaire</b>
                        <h1>15 - 18 €</h1>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="cout">
                        <b>Frais de déplacement</b>
                        <h1>3 - 5 €</h1>
                    </div>
                </div>
                <br>
                <div class="tarifM">
                    <div class="cout">
                        <b>Machines</b>
                        <h1>4 - 7 €</h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="bleu">TEMOIGNAGE</h2>
            <div class="temoignage">
                <img src="<?= $temoignages['temTest']['img'] ?>" alt="">
                <div class="temoignageMobile">
                    <img id="pdpMobile" src="<?= $temoignages['temTest']['img'] ?>" alt="">
                    <img id="quoteMobile" src="../../img/icons/services/quote-bleu.png" alt="">
                </div>
                <div class="presP">
                    <img src="../../img/icons/services/quote-bleu.png" alt="">
                    <p><?= $temoignages['temTest']['texte'] ?></p>
                    <b class="deepBlue"><?= $temoignages['temTest']['nom'] ?></b> <br>
                    <small><?= $temoignages['temTest']['metier'] ?></small>
                </div>
            </div>
        </div>
        <div class="contact-service-bleu">
            <img src="../../img/icons/services/message-bleu.png">
            <div class="contact-servicetxt">
                <b>Une question ?</b>
                <h3>N'hésitez pas à contacter nos équipes, elles seront ravies de vous assister et vous accompagner dans
                    vos
                    recherches.</h3>
            </div>
            <a href="../../contact.php" class="button-service-bleu">Prendre contact ➞</a>
        </div>
    </div>

    <button id="btn" class="Btn">
        <span class="text"><img src="../../img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/CIGLEsch" target="_blank"><img
                src="../../img/icons/medias/facebook.png" alt="facebook"></a>
        <a class="media" href="https://www.linkedin.com/company/ciglesch" target="_blank"><img
                src="../../img/icons/medias/linkedin.png" alt="linkedin"></a>
        <a class="media" href="https://www.youtube.com/@ciglesch1101" target="_blank"><img
                src="../../img/icons/medias/youtube.png" alt="youtube"></a>
        <a class="media" href="https://www.instagram.com/ciglesch" target="_blank"><img
                src="../../img/icons/medias/insta.png" alt="instagram"></a>
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
                    de confidentialité </a> | <a href="https://www.ciglesch.lu/mentions-legales/"> Mentions
                    légales </a> | <a href=""> Cookies</a>
            </div>
        </footer>
    </div>
    <script src="../../script/script.js"></script>
</body>