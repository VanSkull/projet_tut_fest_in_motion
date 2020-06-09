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
        
        <title>FEST'IN MOTION - Event</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Event</span>
        </section>
        
        <section id="corps_page">
            <section class="titre_entete item_page">
                <h2 id="titre_evenement">Event</h2>
                <p id="texte_p_evenement">Find below the presentation of our festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_evenement">
                <div class="item_page entete_evenement">
                    <h2>
                        International Amateur Animation Film Festival 2020<br/>
                        7/8/9 AUGUST 2020 - CALAIS
                    </h2>
                    <p>
                        Join us at La Citadelle de Calais for magical moments.<br/>
                        Open to everyone, you can enjoy our broadcasts, our stands, our bars and many other things.<br/>
                        <a href="informations.php" class="savoir_plus">Find out more</a>
                    </p>
                </div>
                <div class="item_page infos_evenement">
                    <div class="presentation">
                        <div class="photo_presentation">
                            <img id="img_presentation" src="../images/photo_presentation.jpg" alt="Photo de Fest'In Motion" />
                        </div>
                        <div class="texte_presentation">
                            <h3>
                                A 3-day festival,<br/>
                                with 20 animated films :
                            </h3>
                            <ul>
                                <li>Discover a lively universe</li>
                                <li>Meet professionals</li>
                                <li>Get away from reality</li>
                                <li>Leave with stars full of eyes</li>
                            </ul>
                            <!-- Ligne horizontale -->
                            <p>
                                A festival accessible to everyone, alone, with family or friends, where fiction becomes reality and where forms and drawing come to life.
                            </p>
                            <!-- Ligne horizontale -->
                            <p class="citation">
                                "For life to be a fairy tale, it may be enough to just believe in it ..."<br/>
                            </p>
                            <span class="auteur">Walt Disney</span>
                        </div>
                    </div>
                    
                    <div class="professionels">
                        <div class="texte_professionels">
                            <h3>
                                Professionals in the industry,<br/>
                                but not only.
                            </h3>
                            <!-- Ligne horizontale -->
                            <p>
                                Animation, an area of cinema that is sometimes overlooked, but which deserves our full attention, and for good reason: it brings together all generations, makes the eyes of the little ones shine and smiles on the faces of the older ones.
                            </p>
                            <p>
                                We also want to give visibility to young filmmakers whose work deserves to be recognized, allow them to progress and learn by exchanging and being judged by a jury of professional filmmakers.
                            </p>
                        </div>
                        <div class="photo_professionels">
                            <img id="img_professionels" src="../images/photo1.jpg" alt="Photo de Fest'In Motion" />
                        </div>
                    </div>
                    
                    <div class="souvenir">
                        <div class="photo_souvenir">
                            <img id="img_souvenir" src="../images/photo2.jpg" alt="Photo de Fest'In Motion" />
                        </div>
                        <div class="texte_souvenir">
                            <h3>
                                Come with ambitions.<br/>
                                Leave with stars full of eyes.
                            </h3>
                            <!-- Ligne horizontale -->
                            <p>
                                Coming to Fest’In Motion means participating in an animation marathon for beginners and initiates. Discover for some, improve for others, but above all share a moment together, all this in the exceptional setting of the Citadel of Calais, where we will do everything to maintain conviviality thanks to a relaxed and pleasant atmosphere. .
                            </p>
                        </div>
                    </div>
                    
                    <div class="tarifs">
                        <h3>PRICES</h3>
                        <p>
                            Come join us !!!
                        </p>
                        
                        <div id="prix_tarifs">                           
                            <div id="prix_adulte"><span>15</span>€00 / adult</div>

                            <div id="prix_enfant"><span>10</span>€00 / child<sup>*</sup></div>
                        </div>
                        
                        <a href="inscription.php" class="lien_inscription">I'm joining you</a>
                        
                        <span id="explication_asterisque" class="asterisque"><sup>*</sup>Corresponds to children under 10 years old</span>                
                    </div>
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