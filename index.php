<?php

$accueil = json_decode(
    file_get_contents("content/accueil.json"),
    true
);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - CIGL ESCH ASBL</title>
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

    <div class="imageAcceuil index">
        <div>
            <h2>ECONOMIE SOCIALE ET SOLIDAIRE</h2>
            <h1>Vos besoins, <br> nos projets</h1>
            <h3>Acteur d'économie sociale et solidaire à Esch-sur-Alzette, <br> nous créons des solutions utiles et
                durables pour tous</h3>
            <div class="boutons-acceuil index">
                <a class="service-btn" href="service.php">Découvrir nos services ➞</a>
                <a href="ressources.php" class="cta">
                    <span>Nous rejoindre</span>
                    <svg width="15px" height="10px" viewBox="0 0 13 10">
                        <path d="M1,5 L11,5"></path>
                        <polyline points="8 1 12 5 8 9"></polyline>
                    </svg>
                </a>
            </div>
        </div>
        <img src="img/acceuil.JPG" alt="">
    </div>
    <div class="grey-back">
        <div class="stats">
            <div class="stats-grid">
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="img/icons/stats/person.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target=<?= $accueil["collaborateurs"] ?>>0</div>
                        <div class="stat-label">collaborateurs engagés</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="img/icons/stats/globe.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-number" data-target="<?= $accueil["nationalites"] ?>"></div>
                        <div class="stat-label">nationalités representée</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="img/icons/stats/stonks.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-unit">+</div>
                            <div class="stat-number" data-target="<?= $accueil["formation"] ?>">0</div>
                            <div class="stat-unit">%</div>
                        </div>
                        <div class="stat-label">d'activité de formation en 2025</div>
                    </div>
                </div>
                <div class="stat-cards">
                    <div class="stat-icon">
                        <img src="img/icons/stats/heart.png" alt="">
                    </div>
                    <div class="stats-not-icon">
                        <div class="stat-nu">
                            <div class="stat-number" data-target="<?= $accueil["annees"] ?>">0</div>
                            <div class="stat-unit">ans</div>
                        </div>
                        <div class="stat-label">en 2027, à vos côté</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="titre-sections">
            <h4>Des services utiles près de chez vous</h4>
            <h3>Trouvez directement la réponse qui correspond à votre besoin.</h3>
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
        <div class="accomp">
            <img src="img/icons/services/mallette.png">
            <div class="accomptxt">
                <b>Accompagnement vers l'emploi</b>
                <h3>Notre mission centrale : vous acceuillir, vous former et vous accompagner pour votre recherche
                    d'emploi</h3>
            </div>
            <a href="accompagnement.php" class="button">Comprendre le parcours ➞</a>
        </div>
        <br>
    </div>
    <div class="values">
        <div class="values-grid">
            <div class="values-item">
                <img src="img/icons/valeurs/bienveillance.png" alt="icon bienveillance">
                <div>
                    <h4 class="values-title">Bienveillance</h4>
                    <p class="values-desc">Un accueil chaleureux et sans jugement, pour chaque personne accompagnée.
                    </p>
                </div>
            </div>
            <div class="values-item">
                <img src="img/icons/valeurs/solidarite.png" alt="icon bienveillance">
                <div>
                    <h4 class="values-title">Respect</h4>
                    <p class="values-desc">Attention aux besoins, disponibilité, patience et ouverture sans jugement.
                    </p>
                </div>
            </div>
            <div class="values-item">
                <img src="img/icons/valeurs/accompagnement.png" alt="icon bienveillance">
                <div>
                    <h4 class="values-title">Egalité des chances</h4>
                    <p class="values-desc">Un suivi adapté à chacun en prenant en compte les situations individuels.</p>
                </div>
            </div>
            <div class="values-item">
                <img src="img/icons/valeurs/ecoute.png" alt="icon bienveillance">
                <div>
                    <h4 class="values-title">Écoute</h4>
                    <p class="values-desc">Des besoins réels entendus, pour des réponses justes et adaptées.</p>
                </div>
            </div>
        </div>
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
                    target="_blank"> Politique
                    de confidentialité </a> | <a href="/mentions.php"> Mentions
                    légales </a> | <a href="#" id="clearSiteData"> Cookies </a>
            </div>
            <script>
                // 
                async function clearSiteData() {
                    localStorage.clear();
                    sessionStorage.clear();
                    if (indexedDB.databases) {
                        const databases = await indexedDB.databases();
                        for (const db of databases) {
                            if (db.name) {
                                indexedDB.deleteDatabase(db.name);
                            }
                        }
                    }
                    if ('caches' in window) {
                        const cacheNames = await caches.keys();
                        for (const cacheName of cacheNames) {
                            await caches.delete(cacheName);
                        }
                    }
                    if ('serviceWorker' in navigator) {
                        const registrations = await navigator.serviceWorker.getRegistrations();
                        for (const registration of registrations) {
                            await registration.unregister();
                        }
                    }
                    document.cookie.split(';').forEach(cookie => {
                        const name = cookie.split('=')[0].trim();
                        document.cookie =
                            name + '=;expires=Thu, 01 Jan 1970 00:00:00 UTC;path=/';
                    });
                    location.reload();
                }
                document.getElementById('clearSiteData').addEventListener('click', async function (e) {
                    e.preventDefault();
                    await clearSiteData();
                });
            </script>
        </footer>
    </div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-6cbafc33-f0de-4d77-8cdb-d0ebd760a261"></div>
    <script src="https://cdn.commoninja.com/sdk/latest/commonninja.js" defer></script>
    <div class="commonninja_component pid-6cbafc33-f0de-4d77-8cdb-d0ebd760a261"></div>
    <script src="script/script.js"></script>
</body>