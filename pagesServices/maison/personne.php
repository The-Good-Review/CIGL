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
    <title>Service à la personne - CIGL ESCH ASBL</title>
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
        <nav id="menu" class="liens-rouge">
            <button type="button" class="nav-back rouge" id="navBack">
                <span aria-hidden="true">‹</span> Retour
            </button>
            <div class="nav-item rouge"><a href="../../index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item rouge"><a href="../../ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item rouge"><a href="../../service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle rouge" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="../famille/famille.php">Famille & Enfants</a>
                        <button type="button" class="submenu-toggle rouge"
                            aria-label="Ouvrir le sous-menu Enfance et jeunesse" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-creche-belval/">Creche Belval</a>
                                </li>
                                <li><a href="https://heemelmaus.lu/qui-sommes-nous-accueil-educatif/">Acceuil Educatif</a>
                                </li>
                                <li><a href="https://www.heemelmaus.lu/qui-sommes-nous-maison-relais/">Maison Relai</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../mobilite/mobilite.php">Mobilité</a>
                        <button type="button" class="submenu-toggle rouge" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle rouge"
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
                        <button type="button" class="submenu-toggle rouge"
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
                        <button type="button" class="submenu-toggle rouge" aria-label="Ouvrir le sous-menu Tourisme"
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
                        <button type="button" class="submenu-toggle rouge"
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
            <div class="nav-item rouge"><a href="../../accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item rouge"><a href="../../actualite.php">ACTUALITES</a></div>
            <div class="nav-item rouge"><a href="../../ressources.php">RESSOURCES</a></div>
            <div class="nav-item rouge"><a href="../../contact.php">CONTACT</a></div>
        </nav>
    </header>
    <div class="imageAcceuil">
        <div>
            <h2 class="rouge">SERVICE A LA PERSONNE</h2>
            <h1>Pour vous aider <br> au quotidien</h1>
            <h3>Un accompagnement de proximité pour les personnes <br> de plus de 60 ans, en situation de handicap,
                dépendantes <br> ou convalescentes, résidant à Esch-sur-Alzette.</h3>
        </div>
        <img src="../../img/accueil-service/personne.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service-trois">
                <img src="../../img/icons/services/personne-rouge.png">
                <p class="info-service-text"><b>Public concerné</b> <br> - Personnes de + de 60 ans <br> - Personnes
                    handicapées <br> - Personnes dépendantes ou convalescentes</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/objectif-rouge.png">
                <p class="info-service-text"><b>Mission</b> <br> Apporter une aide à domicile de proximité et favoriser
                    le lien social des habitants d'Esch-sur-Alzette.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/position-rouge.png">
                <p class="info-service-text"><b>Agrément / Zone d'intervention</b> <br> - Esch-sur-Alzette <br> - Sur
                    rendez-vous <br> - Intervention à domicile</p>
            </div>
        </div>
        <div class="titreETstats grey-back">
            <div class="titre-sections">
                <h2 class="rouge">PRESENTATION</h2>
                <h4>Une aide de proximité, humaine et accessible</h4>
                <br>
                <h3 class="presP">Ce service répond aux demandes d'intervention de personnes de plus de 60 ans,
                    handicapées, dépendantes ou convalescentes résidant sur le territoire eschois. <br>
                    <br>
                    Grâce à sa proximité, sa disponibilité et son accessibilité, le service à la personne est à même de
                    proposer des services de ménage, nettoyage, lessive, repassage, courses. À titre ponctuel ou
                    régulier, auprès de personnes souvent en détresse sociale ou affective. <br>
                    <br>
                    Pour promouvoir l'autonomie des personnes et favoriser le lien social, le service propose également
                    à ses usagers un accompagnement à des sorties culturelles.
                </h3>
            </div>
            <img class="pres-service-img" src="../../img/services/personne.jpg" alt="">
        </div>
        <br><br>
        <div class="services">
            <h2 class="rouge">SERVICES OFFERTS</h2>
            <div class="services-grid">
                <div class="services-cards-service">
                    <img src="../../img/icons/services/menage.png">
                    <p>Ménage, entretien du logement, lessive</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/store.png">
                    <p>Accompagnement aux courses et à la pharmacie</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/theatre.png">
                    <p>Sorties culturel pour favoriser le lien social</p>
                </div>
                <div class="services-cards-service">
                    <img src="../../img/icons/services/social.png">
                    <p>Accompagnement quotidien ponctuel comment régulier</p>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="rouge">MODALITES PRATIQUES</h2>
            <div class="modalite">
                <img id="rojo" src="../../img/icons/services/note-rouge.png" alt="">
                <div class="liste">
                    <b>Informations :</b>
                    <ul>
                        <li>Interventions sur rendez-vous, <br> du lundi au vendredi de 7h30 à 16h00</li>
                        <br>
                        <li>contactez nous par mail ou téléphone<br> <a class="preslink-rouge"
                            href="mailto:spro@ciglesch.lu">spro@ciglesch.lu</a> <br> <a class="preslink-rouge"
                            href="tel:+352544245501">+352 54 42 45 501</a></li>
                        <br>
                        <li>Intervention ponctuelle ou régulière, <br> adaptée à chaque situation</li>
                        <br>
                        <li>Coordination possible avec les <br> services sociaux et médicaux</li>
                    </ul>
                </div>
                <div class="vente">
                    <img src="../../img/services/cigl-service.png" alt="">
                    <a class="preslink-rouge" href="https://goo.gl/maps/TEJWP4B81iC2" target="_blank">371 Rte de Belval, L-4024
                        Esch-Belval. </a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="stats">
            <h2 class="titre-chiffres rouge tres">QUELQUES CHIFFRES</h2>
            <div class="stats-grid tres">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/homme-de-menage.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="5211">0</div>
                        <div class="stat-label">interventions de ménage réalisées</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/aide.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="268">0</div>
                        <div class="stat-label">soutiens ponctuels (courses, pharmacie, lessive...)</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/anniv.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="21">0</div>
                            <div class="stat-unit">ans</div>
                        </div>
                        <div class="stat-label">passés à vous rendre service</div>
                    </div>
                </div>
            </div>
        </div>
        <br>
        <div class="services">
            <h2 class="rouge">TARIFS</h2>
            <div class="tarif">
                <div class="prix">
                    <b>Coût par ouvrier</b>
                    <h1>15€/h</h1>
                </div>
                <div class="vertical-line"></div>
                <div class="prix">
                    <b>Matériel</b>
                    <h1>3€</h1>
                </div>
            </div>
            <div class="tarifMobile">
                <div class="tarifM">
                    <div class="prix">
                        <b>Coût par ouvrier</b>
                        <h1>15€/h</h1>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="prix">
                        <b>Matériel</b>
                        <h1>3€</h1>
                    </div>
                </div>
            </div>
        </div>
        <br><br>
        <div class="services">
            <h2 class="rouge">TEMOIGNAGE</h2>
            <div class="temoignage">
                <img src="<?= $temoignages['temTest']['img'] ?>" alt="">
                <div class="temoignageMobile">
                    <img id="pdpMobile" src="<?= $temoignages['temTest']['img'] ?>" alt="">
                    <img id="quoteMobile" src="../../img/icons/services/quote-rouge.png" alt="">
                </div>
                <div class="presP">
                    <img src="../../img/icons/services/quote-rouge.png" alt="">
                    <p><?= $temoignages['temTest']['texte'] ?></p>
                    <b class="deepRed"><?= $temoignages['temTest']['nom'] ?></b> <br>
                    <small><?= $temoignages['temTest']['metier'] ?></small>
                </div>
            </div>
        </div>
        <div class="contact-service-rouge">
            <img src="../../img/icons/services/message-rouge.png">
            <div class="contact-servicetxt">
                <b>Une question ?</b>
                <h3>N'hésitez pas à contacter nos équipes, elles seront ravies de vous assister et vous accompagner dans
                    vos
                    recherches.</h3>
            </div>
            <a href="../../contact.php" class="button-service-rouge">Prendre contact ➞</a>
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