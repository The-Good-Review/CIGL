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
    <title>Vente de Légumes - CIGL ESCH ASBL</title>
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
            <h1>VENTE DE <br> LEGUMES</h1>
            <h3>Nos légumes bio, cultivés à Kalendula et au Escher <br> Geméisguart, disponibles au marché d'Esch, <br>
                en panier sur commande, ou livrés chez vous.
            </h3>
            <div class="boutons-acceuil">
                <a class="service-btn" href="https://form.jotform.com/232122741472347">Réserver son panier ➞</a>
            </div>
        </div>
        <img src="../../img/services/legumes.jpg" alt="">
    </div>
    <br>
    <div class="grey-back">
        <div class="infos-service-container">
            <div class="infos-service-trois">
                <img src="../../img/icons/services/personne-vert.png">
                <p class="info-service-text"><b>Public concerné</b> <br> - Habitants d'Esch, Belval, Mondorf <br> -
                    Familles & particuliers <br> - Collectivités</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/objectif-vert.png">
                <p class="info-service-text"><b>Mission</b> <br> Rendre accessible une alimentation bio, locale et de
                    saison, produite par nos jardins solidaires.</p>
            </div>
            <div class="vertical-line"></div>
            <div class="infos-service-trois">
                <img src="../../img/icons/services/position-vert.png">
                <p class="info-service-text"><b>Où nous trouver</b> <br> - Marché d'Esch (vendredi) <br> -
                    Kalendula & Escher Geméisguart <br> - Livraison à domicile</p>
            </div>
        </div>
    </div>
    <div class="titreETstats grey-back">
        <div class="titre-sections">
            <h2 class="vert">PRESENTATION</h2>
            <h4>Des légumes bio, cultivés près de chez vous</h4>
            <br>
            <h3 class="presP">
                Nos légumes biologiques sont cultivés sur nos deux jardins solidaires, Kalendula à Altwies et Den Escher
                Geméisguart à Esch-sur-Alzette, certifiés « Bio Lëtzbuerg » et contrôlés deux fois par an par un
                organisme indépendant. <br>
                <br>
                Vous pouvez les retrouver au marché de la Ville d'Esch les mardis et vendredis de 8h00 à 12h00, ou
                commander votre panier en ligne pour un retrait sur l'un de nos sites, au Kaf Lokal, ou une livraison
                gratuite à domicile. <br>
                <br>
                Une production locale et de saison, pensée pour réduire l'impact environnemental de notre alimentation
                tout en soutenant l'insertion professionnelle des salariés du CIGL Esch.
            </h3>
        </div>
        <img class="pres-service-img" src="../../img/services/vente-legume.jpg" alt="">
    </div>
    <div class="grey-back">
        <div class="services">
            <h2 class="vert">MODALITES PRATIQUES</h2>
            <div class="modalite">
                <img src="../../img/icons/services/note.png" alt="">
                <div class="liste">
                    <b>Informations :</b>
                    <ul>
                        <li>Réservation à effectuer du lundi au jeudi 8h00, <br> via le <a class="preslink"
                                href="https://form.jotform.com/232122741472347">formulaire en ligne</a></li>
                        <br>
                        <li>Livraison gratuite à Esch-sur-Alzette,<br> Belval et Mondorf-les-Bains dès 16 €</li>
                        <br>
                        <li>Également en vente libre au marché d'Esch,<br> les mardis et vendredis de 8h à 12h</li>
                        <br>
                        <li>contactez nous par mail ou téléphone<br> <a class="preslink"
                                href="mailto:kalendula@ciglesch.lu">kalendula@ciglesch.lu</a> <br> <a class="preslink"
                                href="tel:+352621411370">+352 621 41 13 70</a></li>
                    </ul>
                </div>
                <div class="vente">
                    <img src="../../img/accueil-service/legumes.jpg" alt="">
                    <a class="preslink" href="https://goo.gl/maps/deJQ6osiP2k">61 Rue des Romains, L-5671 Altwies</a>
                </div>
            </div>
        </div>
        <br><br><br><br>
        <div class="stats">
            <h2 class="titre-chiffres vert">QUELQUES CHIFFRES</h2>
            <div class="stats-grid">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/carotte.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="37">0</div>
                            <div class="stat-unit">tonne</div>
                        </div>
                        <div class="stat-label">de légumes produits en 2025</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/tomate.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="3800">0</div>
                            <div class="stat-unit">kg</div>
                        </div>
                        <div class="stat-label">de légumes découpés pour les cuisines de la Ville d'Esch</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/bocaux.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="2066">0</div>
                            <div class="stat-unit">bocaux</div>
                        </div>
                        <div class="stat-label">de légumes lacto-fermentés produits</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="../../img/icons/services/cagette.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="80">0</div>
                            <div class="stat-unit">panier</div>
                        </div>
                        <div class="stat-label">de légumes distribués par semaine</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="services">
            <h2 class="vert">POINTS DE RETRAIT</h2>
            <div class="retrait">
                <div class="lieu">
                    <b>KALENDULA</b>
                    <h3>Vendredi : <br> 12h00 - 16h00</h3>
                </div>
                <div class="vertical-line"></div>
                <div class="lieu">
                    <b>DEN ESCHER GEMEISGUART</b>
                    <h3>Vendredi : <br> 8h00 - 16h00</h3>
                </div>
                <div class="vertical-line"></div>
                <div class="lieu">
                    <b>KAF LOKAL</b>
                    <h3>Vendredi : <br> 12h00 - 19h00 <br><br> Samedi : <br> 9h00 - 19h00</h3>
                </div>
                <div class="vertical-line"></div>
                <div class="lieu">
                    <b>MARCHE D'ESCH-SUR-ALZETTE</b>
                    <h3>Vendredi : <br> 7h00 - 13h00</h3>
                </div>
            </div>
            <div class="retraitMobile">
                <div class="retraitM">
                    <div class="lieu">
                        <b>KALENDULA</b>
                        <h3>Vendredi : <br> 12h00 - 16h00</h3>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="lieu">
                        <b>DEN ESCHER GEMEISGUART</b>
                        <h3>Vendredi : <br> 8h00 - 16h00</h3>
                    </div>
                </div>
                <br>
                <div class="retraitM">
                    <div class="lieu">
                        <b>KAF LOKAL</b>
                        <h3>Vendredi : <br> 12h00 - 19h00 <br><br> Samedi : <br> 9h00 - 19h00</h3>
                    </div>
                    <div class="vertical-line"></div>
                    <div class="lieu">
                        <b>MARCHE D'ESCH-SUR-ALZETTE</b>
                        <h3>Vendredi : <br> 7h00 - 13h00</h3>
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
                <h3>N'hésitez pas à contacter nos équipes, elles seront ravies de vous assister et vous accompagner dans vos
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
                    légales </a> | <a href=""> Cookies</a>
            </div>
        </footer>
    </div>
    <script src="../../script/script.js"></script>
</body>