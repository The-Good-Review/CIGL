<?php

$temoignages = json_decode(
    file_get_contents("../../content/temoignages/campingStuff.json"),
    true
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CAMPING BRASSERIE STUFF - CIGL ESCH ASBL</title>
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
        <nav id="menu" class="liens-orange">
            <button type="button" class="nav-back orange" id="navBack">
                <span aria-hidden="true">‹</span> Retour
            </button>
            <div class="nav-item orange"><a href="../../index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item orange"><a href="../../ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item orange"><a href="../../service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle orange" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="../famille/famille.php">Famille & Enfants</a>
                        <button type="button" class="submenu-toggle orange"
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
                        <button type="button" class="submenu-toggle orange" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle orange"
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
                        <button type="button" class="submenu-toggle orange"
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
                        <button type="button" class="submenu-toggle orange" aria-label="Ouvrir le sous-menu Tourisme"
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
                        <button type="button" class="submenu-toggle orange"
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
            <div class="nav-item orange"><a href="../../accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item orange"><a href="../../actualite.php">ACTUALITES</a></div>
            <div class="nav-item orange"><a href="../../ressources.php">RESSOURCES</a></div>
            <div class="nav-item orange"><a href="../../contact.php">CONTACT</a></div>
        </nav>
    </header>
    <div class="imageAcceuil">
        <div>
            <h2 class="orange">Loisir & Tourisme</h2>
            <h1>BRASSERIE <br> CAMPING STUFF</h1>
            <h3>Depuis 2017, le CIGL Esch gère et exploite la Brasserie <br> Camping's Stuff au Gaalgebierg :
                restauration, <br>
                événements et catering au cœur du parc animalier.</h3>
        </div>
        <img src="../../img/accueil-service/brasserie.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service-trois">
                <img src="../../img/icons/services/personne-orange.png">
                <p class="info-service-text"><b>Public concerné</b> <br> - Familles & particuliers <br> - Entreprises
                    <br> - Groupes & collectivités
                </p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/objectif-orange.png">
                <p class="info-service-text"><b>Mission</b> <br>Proposer une restauration conviviale et locale, au point
                    de rencontre du Déierepark et du Gaalgebierg.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/position-orange.png">
                <p class="info-service-text"><b>Agrément / Zone d'intervention</b> <br> - Gaalgebierg, Esch-sur-Alzette
                    <br> - Sur place & à emporter <br> - Label Gëlle Flûte</p>
            </div>
        </div>
        <div class="titreETstats grey-back">
            <div class="titre-sections">
                <h2 class="orange">PRESENTATION</h2>
                <h4>Un lieu de vie au cœur du Gaalgebierg</h4>
                <br>
                <h3 class="presP">Depuis janvier 2017, le CIGL Esch assure la gestion et l'exploitation de la
                    Brasserie Camping Stuff au Gaalgebierg. Un lieu convivial, apprécié aussi bien des familles en
                    visite au Déierepark que des groupes venus pour un événement. <br>
                    <br>
                    La Stuff sert aussi de point d'information du parc animalier et de point de distribution pour la
                    nourriture des animaux, un rôle qui en fait une étape incontournable pour petits et grands. <br>
                    <br>
                    Notre équipe accompagne aujourd'hui 3 personnes en formation au Lycée Bouneweger (2 apprentis en
                    cuisine, 1 en salle), et le label Gëlle Flûte, renouvelé en 2025 par Munhowen, vient récompenser
                    notre professionnalisme.
                </h3>
            </div>
            <img class="pres-service-img" src="../../img/services/brasserie.jpg" alt="">
        </div>
        <br><br>
        <div class="services">
            <h2 class="orange">SERVICES OFFERTS</h2>
            <div class="services-grid">
                <div class="services-cards-service">
                    <img src="../../img/icons/services/resto.png">
                    <p>Restauration, sur place ou à emporter</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/festival.png">
                    <p>Organisation d'événements</p>
                </div>
                <div class="services-cards-service">
                    <img style="scale: calc(1.25);" src="../../img/icons/services/traiteur.png">
                    <p>Service de traiteur</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/chien.png">
                    <p>Distribution de nourriture pour les animaux</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="orange">MODALITES PRATIQUES</h2>
            <div class="modalite">
                <img id="naranja" src="../../img/icons/services/note-orange.png" alt="">
                <div class="liste">
                    <b>Informations :</b>
                    <ul>
                        <li>Horaire d'été : 10h-22h, fermé le lundi</li>
                        <br>
                        <li>Le reste de l'année : tous les jours <br> de 9h à 22h, le mardi de 12h à 22h</li>
                        <br>
                        <li>contactez nous par mail ou téléphone<br> <a class="preslink-orange"
                                href="mailto:stuff@ciglesch.lu">stuff@ciglesch.lu</a> <br> <a class="preslink-orange"
                                href="tel:+35226531446">+352 26 53 14 46</a></li>
                        <br>
                        <li>Accès facile : parking gratuit, <br> Gaalgebus et Flexibus</li>
                    </ul>
                </div>
                <div class="vente">
                    <img src="../../img/services/stuff.jpg" alt="">
                    <a class="preslink-orange" href="https://maps.app.goo.gl/bL61PgTZw6nzBCvg7" target="_blank">Rue du Stade L-4325, Esch-sur-Alzette </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="stats">
            <h2 class="titre-chiffres orange">QUELQUES CHIFFRES</h2>
            <div class="stats-grid">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/plat.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="2800">0</div>
                        <div class="stat-label">plats servis en 2025</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/biere.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="3450">0</div>
                            <div class="stat-unit">litres</div>
                        </div>
                        <div class="stat-label">de bière servis</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/anniv-orange.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="9">0</div>
                            <div class="stat-unit">ans</div>
                        </div>
                        <div class="stat-label">de gestion par le CIGL</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="services">
            <h2 class="orange">TEMOIGNAGE</h2>
            <div class="temoignage">
                <img src="<?= $temoignages['temTest']['img'] ?>" alt="">
                <div class="temoignageMobile">
                    <img id="pdpMobile" src="<?= $temoignages['temTest']['img'] ?>" alt="">
                    <img id="quoteMobile" src="../../img/icons/services/quote-orange.png" alt="">
                </div>
                <div class="presP">
                    <img src="../../img/icons/services/quote-orange.png" alt="">
                    <p><?= $temoignages['temTest']['texte'] ?></p>
                    <b class="deepOrange"><?= $temoignages['temTest']['nom'] ?></b> <br>
                    <small><?= $temoignages['temTest']['metier'] ?></small>
                </div>
            </div>
        </div>
        <div class="contact-service-orange">
            <img src="../../img/icons/services/message-orange.png">
            <div class="contact-servicetxt">
                <b>Une question ?</b>
                <h3>N'hésitez pas à contacter nos équipes, elles seront ravies de vous assister et vous accompagner dans
                    vos
                    recherches.</h3>
            </div>
            <a href="../../contact.php" class="button-service-orange">Prendre contact ➞</a>
        </div>
    </div>

    <button id="btn" class="Btn">
        <span class="text"><img src="../../img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/CampingsStuff" target="_blank"><img
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
                    de confidentialité </a> | <a href="/mentions.php"> Mentions
                    légales </a> | <a href="#" id="clearSiteData"> Cookies </a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-6cbafc33-f0de-4d77-8cdb-d0ebd760a261"></div>
    <script src="../../script/script.js"></script>
</body>