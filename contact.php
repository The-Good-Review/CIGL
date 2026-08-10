<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact - CIGL ESCH ASBL</title>
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
            <h2>Contact</h2>
            <h1>Nous sommes <br> à votre écoute</h1>
            <h3>Une question, une demande d'information ou un projet ? <br> Contactez-nous, nous vous répondrons dans
                les meilleurs délais.
            </h3>
        </div>
        <img src="img/accueil-contact.jpg" alt="">
    </div>
    <br>

    <div class="contact-page">
        <form action="php/mail2.php" method="POST" enctype="multipart/form-data" id="contact-form">
            <fieldset>
                <div class="section-head">
                    <legend class="section-title vert">Formulaire général</legend>
                </div>
                <div class="field-grid">
                    <div class="field">
                        <label for="prenom">Prénom</label>
                        <input type="text" id="prenom" name="prenom" autocomplete="given-name" required>
                    </div>
                    <div class="field">
                        <label for="nom">Nom</label>
                        <input type="text" id="nom" name="nom" autocomplete="family-name" required>
                    </div>
                    <div class="field">
                        <label for="email">Adresse e-mail</label>
                        <input type="email" id="email" name="email" autocomplete="email" required>
                    </div>
                    <div class="field">
                        <label for="telephone">Téléphone <span class="opt">(optionnel)</span></label>
                        <input type="tel" id="telephone" name="telephone" autocomplete="tel">
                    </div>
                </div>
                <br>
                <div class="field-full">
                    <div class="field">
                        <label for="service">Service que vous souhaitez contacter</label>
                        <select id="service" name="service" required>
                            <option value="">Sélectionner…</option>
                            <option>Service à la personne</option>
                            <option>Ressources humaines / recrutement</option>
                            <option>Comptabilité / facturation</option>
                            <option>Direction générale</option>
                            <option>Presse</option>
                            <option>Partenariats</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="field-grid">
                    <div class="field full">
                        <label for="motivation">Votre message</label>
                        <textarea id="message" name="message" placeholder="Ecrivez nous ici..." required></textarea>
                    </div>

                    <div class="field full">
                        <label for="doc">Document <span class="opt">(optionnel)</span></label>
                        <div class="dropzone">
                            <input type="file" id="doc" name="doc" accept=".pdf">
                            <div class="dz-label">Cliquez ou déposez votre fichier</div>
                            <div class="dz-sub">PDF</div>
                            <div class="file-name" id="doc-name"></div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="consent">
                <input type="checkbox" id="rgpd" name="rgpd" required>
                <label for="rgpd">J'accepte que les informations transmises via ce formulaire soient utilisées dans le
                    cadre du traitement de ma demande de contact, conformément à la <a class="preslink"
                        href="https://www.ciglesch.lu/wp-content/uploads/2024/12/PS15_Politique_protection_DCP_CIGLEsch_v00_04.pdf">politique
                        de confidentialité</a>.</label>
            </div>

            <div class="actions">
                <button type="submit">Envoyer</button>
            </div>
        </form>

        <div class="contactsConfidentiels">
            <div class="section-head">
                <legend class="section-title vert">Contacts confidentiels</legend>
            </div>
            <div class="conf card">
                <b class="orange">Délégué de la protection des données</b> <br>
                <a class="preslink-orange" href="mailto:jsp@ciglesch.lu">jsp@ciglesch.lu</a>
            </div>
            <div class="conf card">
                <b class="bleu">Délégation du personnel</b> <br>
                <a class="preslink-bleu" href="mailto:jsp@ciglesch.lu">jsp@ciglesch.lu</a>
            </div>
            <div class="conf card">
                <b class="vert">Canal lanceur d'alerte</b> <br><br>
                <a href="" class="cta">
                    <span>Rejoindre le canal</span>
                    <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
                <br><br>
            </div>
        </div>
    </div>
    <br>
    <div class="services">
        <div class="section-head">
            <legend class="section-title vert">Adresses principales</legend>
        </div>
        <div class="services-grid lieux">
            <a class="services-link" href="https://maps.app.goo.gl/LywJj1peBjcj2GXX9" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/batiment.png">
                    <p>Siège / administration</p>
                    <p class="adlieu">86, rue Victor Hugo, 4141 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/KcSMo2JeYP9n91t99" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/velo.png">
                    <p>Vël'Ok</p>
                    <p class="adlieu">54, rue Louis Pasteur, 4276 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://goo.gl/maps/fgSJR3NsxXBugBYD8" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/maison.png">
                    <p>Maison Relais</p>
                    <p class="adlieu">57, Rue Zenon Bernard, 4031 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/TTWr2i3YHtwWjhPX7" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/jardin.png">
                    <p>Jardin Kalendula</p>
                    <p class="adlieu">61 Rue des Romains, 5671 Altwies Mondorf-les-Bains</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/7adp7Qft26WaTKYaA" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/tente.png">
                    <p>Camping's Stuff</p>
                    <p class="adlieu">Rue du Stade, 4325 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://goo.gl/maps/TEJWP4B81iC2" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/cle.png">
                    <p>Ateliers - Route de Belval</p>
                    <p class="adlieu">371, route de Belval, 4024 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/jC6AEoSVntnHzJig8" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/poussette-rouge.png">
                    <p>Crèche Belval</p>
                    <p class="adlieu">208, Rue de Belval, 4024 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/bELxH5gKNWBJFqev9" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/eleves.png">
                    <p>Accueil éducatif</p>
                    <p class="adlieu">49, Rue Zénon Bernard, 4031 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/aeEwK2ngPQTxu9X69" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/resto-rouge.png">
                    <p>Kaf Lokal</p>
                    <p class="adlieu">59, Rue de l'Alzette, 4011 Esch-sur-Alzette</p>
                </div>
            </a>
            <a class="services-link" href="https://maps.app.goo.gl/dh8UNXBR3riHP4CD8" target="_blank">
                <div class="services-cards lieux">
                    <img src="img/icons/services/legumes.png">
                    <p>Den Escher Geméisguart</p>
                    <p class="adlieu">50 Dieswee, 4173 Esch-sur-Alzette</p>
                </div>
            </a>
        </div>
    </div>
    <br>

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
                    de confidentialité </a> | <a href="https://www.ciglesch.lu/mentions-legales/"> Mentions
                    légales </a> | <a href=""> Cookies</a>
            </div>
        </footer>
    </div>
    <script src="script/script.js"></script>
    <script src="script/scriptContact.js"></script>
</body>