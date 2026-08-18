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
    <title>LÉIEREN AM GAART - CIGL ESCH ASBL</title>
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
            <h2 class="vert">Jardin & Environnement</h2>
            <h1>LÉIEREN <br> AM GAART</h1>
            <h3>Le réseau luxembourgeois des jardins pédagogiques, porté par le <br> service éducatif Kalendula du CIGL
                Esch, pour accompagner <br> la création et l'usage didactique des jardins scolaires.
            </h3>
            <div class="boutons-acceuil">
                <a class="service-btn" href="https://www.leierenamgaart.lu/" target="_blank">LÉIEREN AM GAART ➞</a>
            </div>
        </div>
        <img src="../../img/accueil-service/lag.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service-trois">
                <img src="../../img/icons/services/personne-vert.png">
                <p class="info-service-text"><b>Public concerné</b> <br> - Écoles & lycées <br> - Maisons relais <br> -
                    Enseignants & éducateurs</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/objectif-vert.png">
                <p class="info-service-text"><b>Mission</b> <br> Construire un réseau national de jardins pédagogiques
                    et accompagner leur création et leur usage éducatif.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/position-vert.png">
                <p class="info-service-text"><b>Agrément / Zone d'intervention</b> <br> - Luxembourg (national) <br> -
                    Soutien à 3 ministères <br> - Piloté depuis Altwies</p>
            </div>
        </div>
    </div>
    <div class="titreETstats grey-back">
        <div class="titre-sections">
            <h2 class="vert">PRESENTATION</h2>
            <h4>Un réseau pour faire grandir les jardins pédagogiques</h4>
            <br>
            <h3 class="presP">
                Léieren am Gaart, Réseau Luxembourg est une initiative du service éducatif Kalendula du CIGL Esch, en
                collaboration avec le Ministère de l'Environnement, du Climat et du Développement durable, le Ministère
                de l'Éducation nationale, de l'Enfance et de la Jeunesse, et le Ministère de l'Agriculture, de la
                Viticulture et du Développement rural. <br>
                <br>
                L'objectif : bâtir un réseau de jardins pédagogiques à travers le pays, pour soutenir la création et
                l'utilisation didactique de ces jardins, avec un accompagnement professionnel de tous les acteurs
                impliqués. <br>
                <br>
                Le projet est né de l'expérience acquise à Kalendula et à Den Escher Geméisguart, devenus au fil des
                années de véritables centres de ressources pour l'éducation à l'environnement au Luxembourg.
            </h3>
        </div>
        <img class="pres-service-img" src="../../img/services/lag-pres.jpg" alt="">
    </div>
    <div class="grey-back">
        <div class="services">
            <h2 class="vert">SERVICES OFFERTS</h2>
            <div class="services-grid">
                <div class="services-cards-service">
                    <img src="../../img/icons/services/reseau.png">
                    <p>Mise en réseau des jardins pédagogiques du Luxembourg</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/sensib.png">
                    <p>Accompagnement à la création et à l'aménagement de jardins scolaires</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/parc.png">
                    <p>Visites de terrain et plans d'aménagement</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/formation.png">
                    <p>Formations pour enseignants et éducateurs</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="vert">MODALITES PRATIQUES</h2>
            <div class="modalite">
                <img src="../../img/icons/services/note.png" alt="">
                <div class="liste">
                    <b>Envie de nous rejoindre ?</b>
                    <ul>
                        <li>Ouvert aux écoles primaires, maisons relais <br> et lycées souhaitant créer ou <br> faire
                            vivre un jardin pédagogique</li>
                        <br>
                        <li>contactez nous par mail ou téléphone<br> <a class="preslink"
                                href="mailto:info@leierenamgaart.lu">info@leierenamgaart.lu </a> <br> <a
                                class="preslink" href="tel:+352621413750"> +352 621 413 750</a> </li>
                        <br>
                        <li>Retrouvez toutes les ressources du réseau <br> sur <a class="preslink"
                                href="https://www.leierenamgaart.lu/" target="_blank">www.leierenamgaart.lu</a></li>
                        <br>
                        <li>ouvet du lundi au vendredi, 7h30 - 16h30</li>
                    </ul>
                </div>
                <div class="vente">
                    <img src="../../img/services/lag.jpg" alt="">
                    <a class="preslink" href="https://goo.gl/maps/deJQ6osiP2k" target="_blank">61 Rue des Romains, L-5671 Altwies</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="stats">
            <h2 class="titre-chiffres vert">QUELQUES CHIFFRES</h2>
            <div class="stats-grid">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/reseau.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="64">0</div>
                        <div class="stat-label">structure membre du réseau</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/mallette-verte.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="5">0</div>
                        <div class="stat-label">mallettes pédagogiques distribuées</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/formation.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="6">0</div>
                        <div class="stat-label">formations organisées</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/ballon.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="112">0</div>
                        <div class="stat-label">animations réalisées</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services">
            <h2 class="vert">TEMOIGNAGE</h2>
<div class="temoignage">
                <img src="<?= $temoignages['temTest']['img'] ?>" alt="">
                <div class="temoignageMobile">
                    <img id="pdpMobile" src="<?= $temoignages['temTest']['img'] ?>" alt="">
                    <img id="quoteMobile" src="../../img/icons/services/quote.png" alt="">
                </div>
                <div class="presP">
                    <img src="../../img/icons/services/quote.png" alt="">
                    <p><?= $temoignages['temTest']['texte'] ?></p>
                    <b class="deepGreen"><?= $temoignages['temTest']['nom'] ?></b> <br>
                    <small><?= $temoignages['temTest']['metier'] ?></small>
                </div>
            </div>
        </div>
        <div class="contact-service">
            <img src="../../img/icons/services/message.png">
            <div class="contact-servicetxt">
                <b>Une question ?</b>
                <h3>N'hésitez pas à contacter nos équipes, elles seront ravies de vous assister et vous accompagner dans
                    vos
                    recherches.</h3>
            </div>
            <a href="../../contact.php" class="button-service">Prendre contact ➞</a>
        </div>
    </div>

    <button id="btn" class="Btn">
        <span class="text"><img src="../../img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/ciglesch/" target="_blank"><img
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
                    légales </a>
            </div>
        </footer>
    </div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-6cbafc33-f0de-4d77-8cdb-d0ebd760a261"></div>
    <script src="../../script/script.js"></script>
</body>