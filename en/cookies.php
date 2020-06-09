<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Site officiel du festival Fest'In Motion" />
        <meta name="keywords" content="Fest'In Motion, Festival, Animation, Dessin animé, Événement, Extérieur, Art, Cinéma, Dessin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>FEST'IN MOTION - Cookies policy</title>
        <link rel="shortcut icon" type="images/png" href="../images/favicon.png" />
        
        <link rel="stylesheet" type="text/css" href="../styles/normalize.css" />
        <link rel="stylesheet" type="text/css" href="../styles/style.css" />
        
        <link href="http://fr.allfont.net/allfont.css?fonts=dosis" rel="stylesheet" type="text/css" />
        
        <link rel="stylesheet" href="https://unpkg.com/leaflet@1.2.0/dist/leaflet.css" integrity="sha512-M2wvCLH6DSRazYeZRIm1JnYyh22purTM+FDB5CsyxtQJYeKq83arPe5wgbNmcFXGqiSH2XR8dT/fJISVA1r/zQ==" crossorigin=""/>
        <script src="https://unpkg.com/leaflet@1.2.0/dist/leaflet.js" integrity="sha512-lInM/apFSqyy1o6s89K4iQUKg6ppXEgsVxT35HbzUupEVRh2Eu9Wdl4tHj7dZO0s1uvplcYGmt3498TtHq+log==" crossorigin=""></script>
        
        <script src="../scripts/script.js" type="text/javascript"></script>
    </head>
    
    <body>
        <header>
            <a id="logo" href="index.php"><img src="../images/logo_festinmotion.png" alt="Logo de Fest'In Motion" /></a>
            
            <div id="menu_deroulant">
                <button id="icon_menu_ferme" onclick="cache_menu();"><img src="../images/icon_menu_ferme.png" alt="Icône menu déroulant" /></button>
                <nav id="menu">
                    <a href="evenement.php">Event</a>
                    <a href="inscription.php">Registration</a>
                    <a href="partenaires.php">Partners</a>
                    <a href="informations.php">Informations</a>
                    <a href="galeries.php">Gallery</a>
                    <a href="faq.php">F.A.Q.</a>
                    <a href="contact.php">Contact</a>
                </nav>

                <div id="reseaux_sociaux">
                    <a href="https://www.facebook.com/FestIn-Motion-100813134998756/?modal=admin_todo_tour"><img src="../images/icon_facebook.png" alt="Lien Facebook"></a>
                    <a href="https://www.instagram.com/festinmotion/"><img src="../images/icon_instagram.png" alt="Lien Instagram"></a>
                    <a href="https://twitter.com/FestMotion"><img src="../images/icon_twitter.png" alt="Lien Twitter"></a>
                    <a href="https://www.youtube.com/channel/UCcgmiDp9LxrktaljhuOzh9Q"><img src="../images/icon_youtube.png" alt="Lien Youtube"></a>
                    <a href="panier.php"><img src="../images/icon_panier.png" alt="Lien Panier"></a>
                </div>

                <div id="langues">
                    <button id="french" onclick="switchFR();">FR</button>
                    <button id="english" class="active" onclick="switchEN();">EN</button>
                </div>
            </div>
            <button id="icon_menu_ouvert" onclick="deroule_menu();"><img src="../images/icon_menu_ouvert.png" alt="Icône menu déroulant" /></button>
        </header>
        
        <section id="banniere">
            <div id="photos_banniere">
                <img src="../images/banniere.jpg" alt="Image banniere"  class="photo_baniere" />
            </div>
            
        
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Cookies policy</span>
        
        </section>
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_cookies" class="titre_reglement">Cookies policy</h2>
                <p id="sous_titres_cookies">Through this cookie policy, the site operator informs site visitors of the use made of cookies or similar storage technologies implemented on this site.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_cookies">
                <div id="infos_cookies">
                    <h3 class="titre_paragraphe">1. What are cookies ?</h3>
                    <p>
                        Cookies are small text files that are stored by your browser on your computer or mobile device to save certain information or image files, such as pixels. The next time you visit our website on the same device, the information stored in cookies will be transmitted accordingly either to our website ("first party cookie"), or to another website to which the cookie belongs (" third party cookie ").
                    </p>
                    <p>
                        Thanks to this exchange of information recorded during your various visits to the website in question, it recognizes that you are using the same browsers and device. We use this information to be able to design and display the website optimally and according to your preferences.
                    </p>
                    <p>
                        As a result, only the cookie itself is identified on your device. Your personal data will be saved only with your express consent or if this is strictly necessary to be able to use the service offered to you and therefore to which you have access.
                    </p>
                </div>
                
                <div id="utilisation_cookies">
                    <h3 class="titre_paragraphe">2. Consent to the use of cookies :</h3>
                    <p>
                        The Site uses 3 categories of cookies, the purposes of which are described below. No cookie is used to collect nominative information (like the name of the User for example).
                    </p>
                    
                    <div id="utilisation_cookies_1">
                        <h4 class="sous_titre_paragraphe">1. Functionality cookies</h4>
                        <p>
                            These cookies are not essential for navigation on the Site, but allow to optimize the functioning of the Site and to offer a smooth and tailor-made navigation.<br/>
                            In this case, the Publisher uses a single cookie of this type. This is the session cookie. Its lifespan is equal to the time of the User session. This time is limited to 1 hour in the event of inactivity and a maximum of 24 hours.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_2">
                        <h4 class="sous_titre_paragraphe">2. Audience measurement cookies (statistics)</h4>
                        <p>
                            These cookies collect information about how visitors use a website. For example, the number of visits, the most visited pages ...<br/>
                            The statistical data obtained is not passed on to third parties or used for other purposes.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_3">
                        <h4 class="sous_titre_paragraphe">3. Sharing cookies (social links)</h4>
                        <p>
                            The Site contains sharing links to Facebook, Twitter and other similar social networks, which allow you to share content from the Site with other people. When the User uses these sharing buttons, a third-party cookie is installed. If the User is connected to the social network while browsing the Site, the sharing buttons allow the content consulted to be linked to the user account.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_4">
                        <h4 class="sous_titre_paragraphe">4. Advertising cookies</h4>
                        <p>
                            These cookies collect information about your Internet browsing habits in order to provide you with advertisements that are tailored to you and correspond to your areas of interest. They also limit the number of times you will see an advertisement and help us assess the effectiveness of our advertising campaigns. They are usually installed by ad networks with the permission of the website operator. They record visits to a site and share this information with other companies (advertisers, for example). Targeted or advertising cookies are often linked to the functionality of the site provided by the partner company.
                        </p>
                    </div>
                    
                    <p>
                        Information is collected and shared with third parties to provide audience targeting and optimization solutions for advertisers and publishers. No personal data is collected and an individual cannot be identified via the data collected.
                    </p>
                </div>
                
                <div id="parametrage_cookies">
                    <h3 class="titre_paragraphe">3. Management and configuration of cookies :</h3>
                    <p>
                        Several possibilities are offered to the User to manage cookies. However, it is specified that any setting made by the User is likely to modify Internet browsing and the conditions of access to certain services requiring the use of cookies.
                    </p>
                </div>
                
                <div id="desactivation_cookies">
                    <h3 class="titre_paragraphe">4. Deactivation and deletion of all cookies :</h3>
                    <p>
                        It is possible to configure your browser to prevent the use and storage of cookies on your device and / or that you are asked each time you visit a site to activate cookies. You can also delete cookies that have been reactivated at any time.
                    </p>
                </div>
            </section>
        </section>
        
        <footer>
            <div id="top_footer">
                <div id="liens">
                    <div id="bloc_liens1">
                        <a href="evenement.php">Event</a>
                        <a href="inscription.php">Registration</a>
                        <a href="partenaires.php">Partners</a>
                    </div>
                    <div id="bloc_liens2">
                        <a href="informations.php">Informations</a>
                        <a href="galeries.php">Gallery</a>
                        <a href="faq.php">F.A.Q.</a>
                    </div>
                    <div id="bloc_liens3">
                        <a href="contact.php">Contact</a>
                    </div>
                </div>
                <div id="localisation">
                    <div id="texte_carte">
                        <h3 id="titre_carte">FEST'IN MOTION</h3>
                        <p id="adresse_carte">
                            La Citadelle<br/>
                            Avenue Pierre de Coubertin<br/>
                            62100 Calais
                        </p>
                    </div>
                    
                    <div id="carte" style="width: 240px; height: 180px;"></div>

                </div>
            </div>
            
            <div id="trait"><hr></div>          

            <div id="bottom_footer">
                <div id="droits">© 2020 Fest'In Motion - All rights reserved</div>
                
                <div id="realisation"><p>Website created by </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.php">Legal notices</a> | <a href="confidentialite.php">Privacy policy</a> | <a href="cookies.php">Cookies policy</a><br/>| <a href="ventes.php">Terms of sale</a> | <a href="contact.php">Contact us</a></p></div>
            </div>
        </footer>
        
        <script>
            var mymap = L.map('carte').setView([50.956413, 1.842957], 14);
            L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
                maxZoom: 18,
                minZoom: 2,
                id: 'mapbox.streets'
            }).addTo(mymap);
            
            L.marker([50.956413, 1.842957]).addTo(mymap)
            /*.bindPopup("<strong>FEST'IN MOTION</strong><p>La Citadelle<br/>Avenue Pierre de Coubertin<br/>62100 Calais</p>").openPopup()*/;
        </script>
    </body>
</html>