<?php
    session_start();
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Site officiel du festival Fest'In Motion" />
        <meta name="keywords" content="Fest'In Motion, Festival, Animation, Dessin animé, Événement, Extérieur, Art, Cinéma, Dessin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>FEST'IN MOTION - Information</title>
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
            <a id="logo" href="index.html"><img src="../images/logo_festinmotion.png" alt="Logo de Fest'In Motion" /></a>
            
            <div id="menu_deroulant">
                <button id="icon_menu_ferme" onclick="cache_menu();"><img src="../images/icon_menu_ferme.png" alt="Icône menu déroulant" /></button>
                <nav id="menu">
                    <a href="evenement.html">Event</a>
                    <a href="inscription.html">Registration</a>
                    <a href="partenaires.html">Partners</a>
                    <a href="informations.html">Information</a>
                    <a href="galeries.html">Gallery</a>
                    <a href="faq.html">F.A.Q.</a>
                    <a href="contact.html">Contact</a>
                </nav>

                <div id="reseaux_sociaux">
                    <a href="https://www.facebook.com/FestIn-Motion-100813134998756/?modal=admin_todo_tour"><img src="../images/icon_facebook.png" alt="Lien Facebook"></a>
                    <a href="https://www.instagram.com/festinmotion/"><img src="../images/icon_instagram.png" alt="Lien Instagram"></a>
                    <a href="https://twitter.com/FestMotion"><img src="../images/icon_twitter.png" alt="Lien Twitter"></a>
                    <a href="https://www.youtube.com/channel/UCcgmiDp9LxrktaljhuOzh9Q"><img src="../images/icon_youtube.png" alt="Lien Youtube"></a>
                    <a href="panier.html"><img src="../images/icon_panier.png" alt="Lien Panier"></a>
                </div>

                <div id="langues">
                    <button id="french" class="active" onclick="switchFR();">FR</button>
                    <button id="english" onclick="switchEN();">EN</button>
                </div>
            </div>
            <button id="icon_menu_ouvert" onclick="deroule_menu();"><img src="../images/icon_menu_ouvert.png" alt="Icône menu déroulant" /></button>
        </header>
        
        <section id="banniere">
            <div id="photos_banniere">
                <img src="../images/banniere.jpg" alt="Image banniere"  class="photo_baniere" />
            </div>
            <span id="chemin" class="item_page"><a href="index.html"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Information</span>
        </section>
        
        <div id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_informations">Information</h2>
                <p id="texte_p_informations">Find below all the information (dates, schedules, stands, ...) about our festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_informations">
                <h3 class="titre_contenu">2020 Amateur animated film international festival</h3>
                <p class="sous_titre_contenu">
                    Fest'In Motion is a festival that seeks to offer you animated films with strong cinema potential.
                    <br/>
                    From 3D animation to stop motion, the objective is to make you discover another facet of animation cinema.
                </p>
        <div id=couleurs>        
                <div class="informations_explications item_page">
                    <div class="texte_explications">
                        <h3 class="titre_explications">
                            What is <br/>
                            Fest’In Motion ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            The Fest'In Motion is a festival that takes place during 3 days and which proposes you to discover animated films.
                            <br/>
                            But, the Fest'In Motion is also the opportunity to meet professionals in the world of cinema, animation and photography.
                        </p>
                        <p>
                            During 3 days, 15 films will be shown on big screens so that you can admire them.                         
                        </p>
                    </div>
                    <div class="img_explications">
                        <img src="../images/photo3.jpg" alt="Photo citadelle" />
                    </div>
                </div>
                
                <div class="informations_programme item_page">
                    <div class="img_programme">
                        <img src="../images/photo4.jpg" alt="Photo citadelle" />
                    </div>
                    <div class="texte_programme">
                        <h3 class="titre_programme">
                            Fest'In Motion,<br/>
                            What is the program ?

                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            The broadcast of more than 30 hours of animated films to broaden your film culture.
                        </p>
                        <p>
                            You will also have the opportunity to meet professionals in order to exchange with them, ask them questions about their career path, ask them for advice, ...
                            <br/>
                            Exhibitions and conferences will also be present to present you the new projects of our guests.
                        </p>
                    </div>
                </div>
                
                <div class="informations_inscription item_page">
                    <div class="texte_inscription">
                        <h3 class="titre_inscription">
                            Fest'In Motion,<br/>
                            How to attend ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Registrations to attend the festival can be made on our official website, on the <a class="lien_inscription1" href="inscription.html">Registration</a>page.
                        </p>
                        <p>
                            You will also have the opportunity to meet professionals in order to exchange with them, ask them questions about their career path, ask them for advice, ...<br/>
                            Exhibitions and conferences will also be present to present you the new projects of our guests.<br/>
                            The festival is accessible from the A16, A25 and A26 motorways.
                        </p>
                    </div>
                    <div class="img_inscription">
                        <img src="../images/photo5.jpg" alt="Photo citadelle" />
                    </div>
                </div>
                
                <div class="informations_exposants item_page">
                    <div class="img_exposants">
                        <img src="../images/photo6.jpg" alt="Photo citadelle" />
                    </div>
                    <div class="texte_exposants">
                        <h3 class="titre_exposants">
                            Fest'In Motion,<br/>
                            Who's coming?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Our festival brings in animation personalities such as Disney, Pixar and even small independent producers.
                        </p>
                        <p>
                            But we also bring in juries from the animation industry to analyze the films you will see.<br/>
                            You'll have the opportunity to talk to them, but also to ask them questions about their profession, their background and more.
                        </p>
                    </div>
                </div>
      </div>          
                <div class="informations_photos item_page">
                    <div>
                        <h3 class="titre_photos">Fest’In Motion in pictures</h3>
                    </div>
                    <!-- Ligne horizontale -->
                    <div class="img_photos">
                        <img  id="photos1" class="informations_img_photos" src="../images/photo1.jpg" alt="Photo Fest'In Motion 1" />
                        <img class="informations_img_photos" src="../images/citadelle2.jpg" alt="Photo Fest'In Motion 2" />
                        <img class="informations_img_photos" src="../images/citadelle3.jpg" alt="Photo Fest'In Motion 3" />
                    </div>
                </div>
            </section>
        </div>
        
        <footer>
            <div id="top_footer">
                <div id="liens">
                    <div id="bloc_liens1">
                        <a href="evenement.html">Event</a>
                        <a href="inscription.html">Registration</a>
                        <a href="partenaires.html">Partners</a>
                    </div>
                    <div id="bloc_liens2">
                        <a href="informations.html">Information</a>
                        <a href="galeries.html">Gallery</a>
                        <a href="faq.html">F.A.Q.</a>
                    </div>
                    <div id="bloc_liens3">
                        <a href="contact.html">Contact</a>
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
                
                <div id="realisation"><p>website realized by </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.html">Legal notices</a> | <a href="confidentialite.html">privacy policy</a> | <a href="cookies.html">cookies policy</a><br/>| <a href="ventes.html">terms of sale</a> | <a href="contact.html">contact us</a></p></div>
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