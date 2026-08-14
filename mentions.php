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

    <div>
        <div id="prestxt">
            <p class="presP"><b>MENTIONS LÉGALES</b></p>
            <p class="presP">
                CIGL Esch-sur-Alzette A.S.B.L. <br>
                Association sans but lucratif <br>
                Siège social : 86, rue Victor Hugo, L-4141 Esch-sur-Alzette <br>
                Tél. : (+352) 54 42 45 200 <br>
                E-mail : info@ciglesch.lu <br>
                Site Internet : www.ciglesch.lu <br>
            <p class="presP">Le site web www.ciglesch.lu (désigné ci-après « le site ») est la propriété exclusive du
                CIGL Esch, une association sans but lucratif immatriculée au Registre de Commerce et des Sociétés du
                Luxembourg sous le numéro F2594. Le site est édité et géré par le CIGL Esch.</p>
            <p class="presP">Les présentes conditions générales d’utilisation sont régies par le droit luxembourgeois et
                encadrent l’utilisation du site. En accédant au site, l’utilisateur accepte ces conditions générales. Si
                l’utilisateur n’accepte pas ces conditions, il lui est demandé de ne pas poursuivre sa visite ou son
                utilisation du site.</p>

            <br>
            <p class="presP"><b>1. Responsabilité de l’utilisateur</b></p>
            <p class="presP">L’utilisateur accède au site à ses propres risques et sous son entière responsabilité. Le
                CIGL Esch ne garantit pas que le site soit exempt d’interruptions ou d’erreurs. L’utilisateur doit
                s’assurer que son équipement informatique est sécurisé et maintenu à jour en matière de sécurité.</p>
            <p class="presP">Le CIGL Esch ne pourra être tenue responsable des dommages directs ou indirects que
                l’utilisateur pourrait subir en naviguant sur le site, notamment en cas d’attaque informatique ou de
                dysfonctionnement lié à la configuration de l’utilisateur.</p>
            <p class="presP">Par le biais de projets répondant à des besoins locaux et sociaux, le CIGL Esch met le
                demandeur d'emploi au centre de ses actions, le rendant acteur de son projet de vie.</p>

            <br>
            <p class="presP"><b>2. Accessibilité du site</b></p>
            <p class="presP">Le site est accessible 24 heures sur 24, 7 jours sur 7, sauf en cas de maintenance
                technique programmée ou de force majeure. Cependant, le CIGL Esch n’est tenue que par une obligation de
                moyens et ne peut garantir l’absence de dysfonctionnements ou d’interruptions temporaires du site.</p>
            <p class="presP">Le CIGL Esch se réserve le droit de suspendre ou d’interrompre temporairement l’accès au
                site, notamment pour des raisons de maintenance, sans préavis ni compensation pour l’utilisateur.</p>

            <br>
            <p class="presP"><b>3. Liens externes</b></p>
            <p class="presP">Le site peut contenir des liens hypertextes vers des sites externes gérés par des tiers. Le
                CIGL Esch n’a aucun contrôle sur ces sites et décline toute responsabilité concernant leur contenu ou
                leurs politiques de gestion des données. L’inclusion de ces liens ne signifie pas une approbation de ces
                sites par le CIGL Esch.</p>
            <p class="presP">Le CIGL Esch ne garantit pas la disponibilité des sites tiers et ne pourra être tenue
                responsable des dommages directs ou indirects résultant de l’utilisation de ces liens externes.</p>

            <br>
            <p class="presP"><b>4. Propriété intellectuelle</b></p>
            <p class="presP">Tous les éléments du site (textes, images, graphismes, logos, vidéos, sons, logiciels,
                etc.) sont protégés par les lois sur la propriété intellectuelle, y compris, mais sans s’y limiter, la
                loi modifiée du 18 avril 2001 relative aux droits d’auteur, aux droits voisins et aux bases de données,
                ainsi que la Convention Benelux en matière de propriété intellectuelle.</p>
            <p class="presP">Les droits de propriété intellectuelle sur l’ensemble du contenu du site appartiennent au
                CIGL Esch ou sont utilisés avec l’autorisation de leurs propriétaires respectifs. Toute reproduction,
                représentation, adaptation, modification, distribution, ou exploitation non autorisée est strictement
                interdite, sauf autorisation écrite préalable du CIGL Esch.</p>
            <p class="presP">L’utilisateur est autorisé à consulter le contenu du site uniquement à des fins
                personnelles et non commerciales. Toute utilisation à des fins commerciales ou professionnelles est
                soumise à autorisation préalable.</p>

            <br>
            <p class="presP"><b>5. Limitation de responsabilité</b></p>
            <p class="presP">Les informations publiées sur le site sont fournies à titre purement informatif. Bien que
                le CIGL Esch s’efforce de garantir l’exactitude des informations publiées, elle ne peut être tenue
                responsable des omissions, inexactitudes ou des erreurs éventuelles.</p>
            <p class="presP">Les photographies, illustrations et textes présents sur le site ne sont pas contractuels et
                n’engagent pas la responsabilité du CIGL Esch en cas d’erreurs ou d’omissions.</p>
            <p class="presP">Le CIGL Esch décline toute responsabilité pour les dommages indirects tels que la perte de
                profit, perte de marché ou toute autre perte résultant de l’utilisation ou de l’impossibilité d’utiliser
                le site.</p>

            <br>
            <p class="presP"><b>6. Modification des conditions générales d’utilisation</b></p>
            <p class="presP">Le CIGL Esch se réserve le droit de modifier ou de compléter les présentes conditions
                générales d’utilisation à tout moment, en fonction des évolutions du site ou de la législation
                applicable. Les utilisateurs sont invités à consulter régulièrement cette page afin de prendre
                connaissance des éventuelles modifications. La version modifiée sera réputée en vigueur dès sa
                publication sur le site.</p>

            <br>
            <p class="presP"><b>7. Législation applicable et juridictions compétentes</b></p>
            <p class="presP">Tout litige ou différend relatif à l’utilisation du site www.ciglesch.lu sera soumis au
                droit luxembourgeois.</p>
            <p class="presP">En cas de litige, les tribunaux du Grand-Duché de Luxembourg seront seuls compétents pour
                en juger.</p>

            <br>
            <p class="presP"><b>8. Prise de vue (photos, vidéos)</b></p>
            <p class="presP"><b>Événements organisés par le CIGL Esch ASBL</b></p>
            <p class="presP">
                Responsable du traitement <br>
                CIGL Esch ASBL <br>
                www.ciglesch.lu - info@ciglesch.lu - Tél. 54 42 45</p>
            <p class="presP"><b>Prises de vues lors de l’événement</b></p>
            <p class="presP">Dans le cadre de ses activités, le CIGL Esch ASBL est susceptible de réaliser des photos
                et/ou vidéos lors de cet événement.</p>
            <p class="presP"><b>Finalités du traitement</b></p>
            <p class="presP">Ces images peuvent être utilisées exclusivement à des fins :</p>
            <ul>
                <li class="presP">de communication institutionnelle,</li>
                <li class="presP">de promotion des activités du CIGL Esch ASBL,</li>
                <li class="presP">sur les supports suivants : site internet, réseaux sociaux, publications et supports de présentation.</li>
            </ul>
            <p class="presP"><b>Base légale</b></p>
            <p class="presP">Le traitement repose sur :</p>
            <ul>
                <li class="presP">l’intérêt légitime du CIGL Esch ASBL à communiquer sur ses missions et activités, et/ou</li>
                <li class="presP">le consentement des personnes concernées, selon les situations.</li>
            </ul>
            <p class="presP"><b>Durée de conservation</b></p>
            <p class="presP">Les images sont conservées pour une durée maximale de 5 ans, sauf retrait anticipé ou obligation légale contraire.</p>
            <p class="presP"><b>Droit d’opposition</b></p>
            <p class="presP">Toute personne ne souhaitant pas être photographiée ou filmée peut :</p>
            <ul>
                <li class="presP">se signaler auprès de l’équipe organisatrice pendant l’événement,</li>
                <li class="presP">ou contacter le responsable communication : joao.silva@ciglesch.lu.</li>
            </ul>
            <p class="presP"><b>Des solutions alternatives seront mises en place dans la mesure du possible.</b></p>
            <p class="presP"><b>Vos droits RGPD</b></p>
            <p class="presP">Conformément au Règlement général sur la protection des données (RGPD), vous disposez :</p>
            <ul>
                <li class="presP">d’un droit d’accès,</li>
                <li class="presP">de rectification,</li>
                <li class="presP">d’effacement,</li>
                <li class="presP">d’opposition,</li>
                <li class="presP">et de limitation du traitement.</li>
            </ul>
            <p class="presP"><b>Pour toute question ou demande relative à vos données personnelles :</b></p>
            <ul>
                <li class="presP">Délégué à la protection des données (DPO) : dpo@ciglesch.lu</li>
                <li class="presP">Vous avez également le droit d’introduire une réclamation auprès de la CNPD.  </li>
            </ul>
            <p class="presP">Fait à Esch-sur-Alzette, septembre 2024 <br> Mise à jour en avril 2026</p>
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
</body>