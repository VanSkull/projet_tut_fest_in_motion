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
        
        <title>FEST'IN MOTION - Legal notices</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Legal notices</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_mentions_legales" class="titre_reglement">Legal notices</h2>
                <p id="sous-titre-mention">In order to respect the work of the HORIZON agency, please credit with a link any representation or reproduction, in whole or in part, of the site.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_mentions_legales">
                <div id="mention_loi">
                    <p>In accordance with the provisions of articles 6-III and 19 of Law n ° 2004-575 of June 21, 2004 for Confidence in the digital economy, known as LCEN, we bring to the attention of users and visitors of the site: festinmotion.000webhostapp.com/ the following informations :</p>
                </div>
                
                <div id="infos_legales">
                    <h3 class="titre_paragraphe">1. Legal informations :</h3>
                    <p>
                        Owner status : <em>Particular</em><br/>
                        The owner is : <em>Hervelyne Vasse</em><br/>
                        Mailing address of the owner : <em>Université, SP, 16 Rue de l'Université, 62307 Lens</em>
                    </p>
                    <p>
                        The creator of the site is : <em>HORIZON agency</em><br/>
                        The publication manager is : <em>Hervelyne Vasse</em><br/>
                        Contact the publication manager : <em>hervelynev@gmail.com</em><br/>
                        The publication manager is a <em>physical person</em>
                    </p>
                    <p>
                        Contact the site manager : <em><a href="mailto:festinmotion@laposte.net?subject=Contact from legal notice via the site festinmotion.000webhostapp.com/">festinmotion@laposte.net</a></em><br/>
                        Call the site manager : <em>01.23.45.67.89</em>
                    </p>
                    <p>
                        Webmasters are : <em>Lucie Mayeur</em> et <em>Valentin Vanhaecke</em><br/>
                        Contact the Webmasters : <em><a href="mailto:luciemayeur1@laposte.net?subject=Contact from legal notice via the site festinmotion.000webhostapp.com/">luciemayeur1@laposte.net</a></em> ou <em><a href="mailto:valentinvanh@gmail.com?subject=Contact from legal notice via the site festinmotion.000webhostapp.com/">valentinvanh@gmail.com</a></em><br/>
                        The host of the site is : <em>000webhost <a href="https://fr.000webhost.com/">fr.000webhost.fr/</a></em>                        
                    </p>
                </div>
                
                
                <div id="presentation_principe">
                    <h3 class="titre_paragraphe">2. Presentation and principle :</h3>
                    <p>
                        The website <em>festinmotion.000webhostapp.com/</em> brings together a set of services, in the state, made available to users. It is specified here that they must remain courteous and show good faith both to other users and to the webmasters of the festinmotion.000webhostapp.com/ site. The festinmotion.000webhostapp.com/ site is updated regularly by Hervelyne Vasse.
                    </p>
                    <p>
                        Hervelyne Vasse strives to provide the most precise information possible on the website festinmotion.000webhostapp.com/ (subject to changes since their posting), but cannot guarantee the accuracy, completeness and topicality of the information disseminated on its site, whether by it or by third party partners who provide it with this information. Consequently, the user acknowledges using this given information (for information only, not exhaustive and liable to change) under his exclusive responsibility.
                    </p>
                </div>
                
                <div id="accessibilite">
                    <h3 class="titre_paragraphe">3. Accessibility :</h3>
                    <p>
                        The website festinmotion.000webhostapp.com/ is in principle accessible to users 24 hours a day, 7 days a week, unless there is an interruption, scheduled or not, for maintenance purposes or in the event of force majeure. If unable to access the service, festinmotion.000webhostapp.com/ undertakes to do its utmost to restore access to the service and will then endeavor to communicate to users before the dates and times of the intervention . Being subject only to an obligation of means, festinmotion.000webhostapp.com/ can not be held responsible for any damage, whatever its nature, resulting from the unavailability of the service.
                    </p>
                </div>  
                
                <div id="propriete_intellectuelle">
                    <h3 class="titre_paragraphe">4. Intellectual property :</h3>
                    <p>
                        Hervelyne Vasse is the exclusive owner of all intellectual property rights or holds the rights of use on all the elements accessible on the site, both on the structure and on the texts, images, graphics, logo, icons, sounds, software ...<br/>
                        Any total or partial reproduction of the website festinmotion.000webhostapp.com/, representation, modification, publication, total or partial adaptation of any of these elements, whatever the means or process used, is prohibited, unless prior written authorization from Hervelyne Vasse, owner of the site to email: hervelynev@gmail.com, failing which it will be considered as constituting an infringement and liable to prosecution in accordance with the provisions of articles L.335-2 and following of the Intellectual Property Code .
                    </p>
                </div>  
                
                <div id="hypertextes_cookies">
                    <h3 class="titre_paragraphe">5. Hypertext links and cookies :</h3>
                    <p>
                        The website festinmotion.000webhostapp.com/ contains a number of hypertext links to other sites (partners, information, etc.) set up with the authorization of Hervelyne Vasse. However, Hervelyne Vasse does not have the possibility of verifying the entire content of the sites thus visited and therefore declines any responsibility for this fact as to the possible risks of illegal content.<br/>
                        The user is informed that during his visits to the website festinmotion.000webhostapp.com/, one or more cookies may be automatically installed on his computer through his browser software. A cookie is a block of data which does not allow the user to be identified, but which records information relating to the browsing thereof on the site.<br/>
                        The configuration of the navigation software makes it possible to inform of the presence of cookie and possibly, to refuse it as described at the following address : <a href="https://www.cnil.fr/">www.cnil.fr</a>. However, the user can configure the browser on their computer to refuse the installation of cookies, knowing that refusing to install a cookie may make it impossible to access certain services. For any blocking of cookies, type in your search engine: blocking cookies in IE or Firefox and follow the instructions depending on your version.
                    </p>
                </div>  
                
                <div id="donnees_personnelles">
                    <h3 class="titre_paragraphe">6. Protection of property and people - management of personal data :</h3>
                    <p>
                        In France, personal data is notably protected by Law No. 78-87 of January 6, 1978, Law No. 2004-801 of August 6, 2004, Article L. 226-13 of the Criminal Code and the European Directive of October 24, 1995.<br/>
                        On the website festinmotion.000webhostapp.com/, Hervelyne Vasse collects personal information (according to article 4 law n ° 78-17 of January 06, 1978) relating to the user only for the need of certain services offered by the website festinmotion.000webhostapp.com/. The user provides this information with full knowledge of the facts, in particular when he enters it himself. The user of the festinmotion.000webhostapp.com/ site is then informed of the obligation or not to provide this information.<br/>
                        In accordance with the provisions of articles 38 and following of law 78-17 of January 6, 1978 relating to data processing, files and freedoms, any user has a right of access, rectification, deletion and opposition personal data concerning him. To exercise this right, send your request to festinmotion.000webhostapp.com/ by e-mail : <em><a href="mailto:hervelynev@gmail.com?subject=Contact from legal notice via the site festinmotion.000webhostapp.com/">hervelynev@gmail.com</a></em> or in writing duly signed, accompanied by a copy of the identity document with the signature of the document holder, specifying the address to which the response must be sent.
                    </p>
                </div>
                
                <p id="paragraphe_gras">
                    No personal information of the user of the website festinmotion.000webhostapp.com/ is published without the knowledge of the user, exchanged, transferred, assigned or sold on any medium to third parties. Only the assumption of the redemption of the site festinmotion.000webhostapp.com/ and its rights authorizes Hervelyne Vasse to transmit said information to the possible purchaser who would in turn be held to the same obligation of conservation and modification of the data vis vis the user of the website festinmotion.000webhostapp.com/.
                </p>
                
                <p id="protection_bdd">
                    The databases are protected by the provisions of the law of July 1, 1998 transposing Directive 96/9 of March 11, 1996 on the legal protection of databases.
                </p>
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