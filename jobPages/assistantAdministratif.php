<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Candidater - CIGL ESCH ASBL</title>
    <link rel="stylesheet" href="../style/style.css">
    <link rel="icon" type="image/png" href="../img/logo_fenetre.png">
</head>

<body>
    <style>
        * {
            box-sizing: border-box;
        }
    </style>
    <header class="navbar" id="navbar">
        <a href="../index.php"><img id="logo" src="../img/siteweb_logo_paysage-2.png" alt="Logo CIGL ESCH"></a>
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
            <div class="nav-item vert"><a href="../index.php#">ACCUEIL</a>
            </div>
            <div class="nav-item vert"><a href="../ciglbref.php">QUI SOMMES NOUS</a></div>
            <div class="nav-item vert"><a href="../service.php">NOS SERVICES</a>
                <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Services"
                    aria-expanded="false">›</button>
                <div class="dropdown">
                    <div class="dd-item has-sub">
                        <a href="../pagesServices/famille/famille.php">Famille & Enfants</a>
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
                        <a href="../pagesServices/mobilite/mobilite.php">Mobilité</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Mobilité"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="http://www.velok.lu/" target="_blank">Vël'OK</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../pagesServices/jardin/jardin.php">Jardin & Environnement</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Nature, création et citoyenneté"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../pagesServices/jardin/deg.php">Den Escher Geméisguart</a></li>
                                <li><a href="../pagesServices/jardin/kal.php">Kalendula</a></li>
                                <li><a href="../pagesServices/jardin/lag.php">Léieren am gaart</a></li>
                                <li><a href="https://interreg-gr.eu/project/integravert-fr-2/"
                                        target="_blank">Integravert</a></li>
                                <li><a href="../pagesServices/jardin/rec.php">RECUP</a></li>
                                <li><a href="../pagesServices/jardin/legumes.php">Vente de Légumes</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../pagesServices/maison/maison.php">Maison et Personne</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Service de proximité" aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../pagesServices/maison/personne.php">Service à la personne</a></li>
                                <li><a href="../pagesServices/maison/den.php">Den Handkesselchen</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../pagesServices/loisir/loisir.php">Loisir & Tourisme</a>
                        <button type="button" class="submenu-toggle vert" aria-label="Ouvrir le sous-menu Tourisme"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../pagesServices/loisir/stuff.php">Brasserie Camping Stuff</a>
                                </li>
                                <li><a href="../pagesServices/loisir/rosati.php">Maison Rosati</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="dd-item has-sub">
                        <a href="../pagesServices/amenagement/amenagement.php">Aménagement & Travaux</a>
                        <button type="button" class="submenu-toggle vert"
                            aria-label="Ouvrir le sous-menu Aménagement et construction"
                            aria-expanded="false">›</button>
                        <div class="submenu">
                            <ul>
                                <li><a href="../pagesServices/amenagement/entretien.php">Entretien des espaces
                                        verts</a></li>
                                <li><a href="../pagesServices/amenagement/construction.php">Construction Durable</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="nav-item vert"><a href="../accompagnement.php">ACCOMPAGNEMENT</a></div>
            <div class="nav-item vert"><a href="../actualite.php">ACTUALITES</a></div>
            <div class="nav-item vert"><a href="../ressources.php">RESSOURCES</a></div>
            <div class="nav-item vert"><a href="../contact.php">CONTACT</a></div>
        </nav>
    </header>

    <div class="page">

        <p class="eyebrow">Le poste</p>
        <div class="postes">
            <p class="presP">Dans le cadre du développement de nos activités, nous recherchons un(e) Assistant(e)
                administratif(ve) pour assurer le bon fonctionnement des tâches administratives quotidiennes de
                l'association.</p>
            <p class="presP">Vous serez un véritable soutien auprès des différents services en garantissant un suivi
                rigoureux des dossiers et une communication efficace avec nos partenaires, usagers et collaborateurs.
            </p>
            <br>
            <p class="presP"><b>Vos missions :</b>
                <ul class="presP">
                    <li>Accueillir les visiteurs et gérer l'accueil téléphonique.</li>
                    <li>Traiter, enregistrer et distribuer le courrier entrant et sortant.</li>
                    <li>Assurer le suivi administratif des dossiers.</li>
                    <li>Rédiger, mettre en forme et classer différents documents administratifs.</li>
                    <li>Organiser les agendas, réunions et prises de rendez-vous.</li>
                    <li>Mettre à jour les bases de données et les tableaux de suivi.</li>
                    <li>Participer à l'archivage des documents.</li>
                    <li>Apporter un soutien administratif aux différents services.</li>
                </ul>
            </p>
            <br>
            <p class="presP"><b>Profil recherché :</b>
                <ul class="presP">
                    <li>Formation en secrétariat, administration ou gestion.</li>
                    <li>Première expérience sur un poste similaire appréciée.</li>
                    <li>Bonne maîtrise des outils bureautiques (Word, Excel, Outlook).</li>
                    <li>Excellentes qualités rédactionnelles.</li>
                    <li>Sens de l'organisation et de la confidentialité.</li>
                    <li>Esprit d'équipe et bon relationnel.</li>
                </ul>
            </p>
            <br>
            <p class="presP"><b>Condition :</b>
                <ul class="presP">
                    <li>Contrat : CDI</li>
                    <li>Temps de travail : Temps plein</li>
                    <li>Prise de poste : Dès que possible</li>
                </ul>
            </p>
        </div>

        <br><br><br><br>

        <p class="eyebrow">Votre profil</p>
        <form action="../php/mail3.php" method="POST" enctype="multipart/form-data" id="candidature-form">
            <input type="hidden" name="poste" value="Assistant Administratif">
            <fieldset>
                <div class="section-head">
                    <span class="section-num">01</span>
                    <legend class="section-title">Vous</legend>
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
                        <label for="telephone">Téléphone</label>
                        <input type="tel" id="telephone" name="telephone" autocomplete="tel" required>
                    </div>
                    <div class="field full">
                        <label for="ville">Ville de résidence</label>
                        <input type="text" id="ville" name="ville" autocomplete="address-level2">
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">02</span>
                    <legend class="section-title">Votre parcours</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="motivation">Votre message</label>
                        <textarea id="parcours" name="parcours"
                            placeholder="Présentez-vous en quelques lignes : votre parcours, ce que vous recherchez, et pourquoi vous nous contactez."></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">03</span>
                    <legend class="section-title">Quelque chose à ajouter</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="motivation">Votre message</label>
                        <textarea id="message" name="message"
                            placeholder="Si vous avez quelque message que ce soit à nous transmettre."></textarea>
                    </div>
                </div>
            </fieldset>

            <fieldset>
                <div class="section-head">
                    <span class="section-num">04</span>
                    <legend class="section-title">Pièces jointes</legend>
                </div>
                <div class="field-grid">
                    <div class="field full">
                        <label for="cv">CV</label>
                        <div class="dropzone">
                            <input type="file" id="cv" name="cv" accept=".pdf" required>
                            <div class="dz-label">Cliquez ou déposez votre fichier</div>
                            <div class="dz-sub">PDF</div>
                            <div class="file-name" id="cv-name"></div>
                        </div>
                    </div>
                    <div class="field full">
                        <label for="lettre">Lettre de motivation <span class="opt">(optionnel)</span></label>
                        <div class="dropzone">
                            <input type="file" id="lettre" name="lettre" accept=".pdf">
                            <div class="dz-label">Cliquez ou déposez votre fichier</div>
                            <div class="dz-sub">PDF</div>
                            <div class="file-name" id="lettre-name"></div>
                        </div>
                    </div>
                </div>
            </fieldset>

            <div class="consent">
                <input type="checkbox" id="rgpd" name="rgpd" required>
                <label for="rgpd">J'accepte que les informations transmises via ce formulaire soient utilisées dans le
                    cadre du traitement de ma candidature, conformément à la <a class="preslink"
                        href="https://www.ciglesch.lu/wp-content/uploads/2024/12/PS15_Politique_protection_DCP_CIGLEsch_v00_04.pdf">politique
                        de confidentialité</a>.</label>
            </div>

            <div class="actions">
                <button type="submit">Envoyer ma candidature</button>
            </div>
        </form>
    </div>

    <button id="btn" class="Btn">
        <span class="text"><img src="../img/icons/medias/facebook.png" alt="facebook"></span>
        <a class="media" href="https://www.facebook.com/CIGLEsch/" target="_blank"><img
                src="../img/icons/medias/facebook.png" alt="facebook"></a>
        <a class="media" href="https://www.linkedin.com/company/ciglesch" target="_blank"><img
                src="../img/icons/medias/linkedin.png" alt="linkedin"></a>
        <a class="media" href="https://www.youtube.com/@ciglesch1101" target="_blank"><img
                src="../img/icons/medias/youtube.png" alt="youtube"></a>
        <a class="media" href="https://www.instagram.com/ciglesch" target="_blank"><img src="../img/icons/medias/insta.png"
                alt="instagram"></a>
    </button>

    <div>
        <div id="partenaires" class="grey-back">
            <div class="soutien">
                <b>Avec le soutien de</b>
                <h3>Partenaires institutionnels</h3>
            </div>
            <div id="top-invest">
                <img src="../img/logo/travail.png" alt="logo ministère du travail">
                <img src="../img/logo/esch.png" alt="logo ville d'esch">
            </div>
            <div class="vertical-line"></div>
            <img src="../img/logo/education.png" alt="logo ministère de l'éducation">
            <img src="../img/logo/environnement.png" alt="logo ministère de l'environnement">
            <img src="../img/logo/agriculture.png" alt="logo ministère de l'agriculture">
            <img src="../img/logo/oeuvreNationale.png" alt="logo oeuvre nationale">
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
    <script src="../script/script.js"></script>
    <script src="../script/scriptRessources.js"></script>
</body>