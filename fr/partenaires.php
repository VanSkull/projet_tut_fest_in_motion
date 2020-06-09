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
        
        <title>FEST'IN MOTION - Nos partenaires</title>
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
                    <a href="evenement.php">Événement</a>
                    <a href="inscription.php">Inscription</a>
                    <a href="partenaires.php">Partenaires</a>
                    <a href="informations.php">Informations</a>
                    <a href="galeries.php">Galerie</a>
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
            
            <span id="chemin" class="item_pagep"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Partenaires</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page entete_partenaire">
                <h2 id="titre_partenairesp">Partenaires</h2>
                <p id="texte_p_partenaires">Retrouvez ci-dessous la liste de tous les bénévoles et partenaires qui nous ont aidés dans cette immense projet.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_pagep contenu_partenaires">
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_canon.png" alt="Partenaire Canon"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Canon</span>
                        <p class="infos_partenaire">
                            Canon, un énorme partenaire pour le matériel photo et vidéo mais aussi, notre partenaire principal.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_calais.png" alt="Partenaire Ville de Calais"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Ville de Calais</span>
                        <p class="infos_partenaire">
                            Un grand merci à la ville de Calais qui nous a permis de réaliser ce projet ici. Sans eux, ce projet n'aurait pas lieu.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_gaumont.png" alt="Partenaire Cinéma Pathé Gaumont"/>
                    <div class="explication_partenaire">                    
                        <span class="nom_partenaire">Cinéma Pathé Gaumont</span>
                        <p class="infos_partenaire">
                            Merci au cinéma Pathé Gaumont pour le matériel de projection et pour les films afin d'animer nos journées.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_cnc.png" alt="Partenaire CNC"/>
                    <div class="explication_partenaire">                    
                        <span class="nom_partenaire">CNC</span>
                        <p class="infos_partenaire">
                            Merci à la CNC également afin d'animer nos journées et d'en profiter un maximum de notre festival.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_disney_store.png" alt="Partenaire Disney Store"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Disney Store</span>
                        <p class="infos_partenaire">
                            Profiter de magnifiques souvenirs avec notre partenaire Disney Store plein de générosité.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_pause_canap.png" alt="Partenaire Pause Canap'"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Pause Canap'</span>
                        <p class="infos_partenaire">
                            Envie de repartir avec un souvenir ? Notre ami Pause Canap' nous permet que vous ne puissiez partir avec les mains vides.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_geek_store.png" alt="Partenaire Geekstore"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Geekstore<sup>TM</sup></span>
                        <p class="infos_partenaire">
                            Grâce à Geekstore<sup>TM</sup>, nous aurons la possibilité de vous offir un petit souvenir de notre festival.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_hovercraft.png" alt="Partenaire L'Hovercraft"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">L'Hovercraft</span>
                        <p class="infos_partenaire">
                            Notre partenaire, l'Hovercraft, nous assurera la restauration sur place afin que vous puissiez profiter du spectacle le plus longtemps possible.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_lecamiongourmand.png" alt="Partenaire Le Camion gourmand"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Le Camion gourmand</span>
                        <p class="infos_partenaire">
                            Notre ami, le Camion gourmand, nous assurera également la restauration sur place pour que vous puissiez vous régaler pendant le spectacle.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_laposte.png" alt="Partenaire La Poste"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">La Poste</span>
                        <p class="infos_partenaire">
                            Un grand merci à La Poste afin d'assurer la livraison de vos commandes de souvenirs lors du festival.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_hautsdefrance.png" alt="Partenaire Région Hauts-de-France"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Région Hauts-de-France</span>
                        <p class="infos_partenaire">
                            Nous remercions aussi la région Hauts-de-France pour nous avoir fait confiance tout le long de ce projet.
                        </p>
                    </div>
                </div>
                <div class="partenaire">
                    <img class="img_partenaire" src="../images/logo_horizon.png" alt="Partenaire Horizon"/>
                    <div class="explication_partenaire">
                        <span class="nom_partenaire">Horizon</span>
                        <p class="infos_partenaire">
                            Un immense merci à l'agence Horizon de nous avoir fait la communication de cette événement.
                        </p>
                    </div>
                </div>
            </section>
        </section>
        
        <footer>
            <div id="top_footer">
                <div id="liens">
                    <div id="bloc_liens1">
                        <a href="evenement.php">Événement</a>
                        <a href="inscription.php">Inscription</a>
                        <a href="partenaires.php">Partenaires</a>
                    </div>
                    <div id="bloc_liens2">
                        <a href="informations.php">Informations</a>
                        <a href="galeries.php">Galerie</a>
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
                <div id="droits">© 2020 Fest'In Motion - Tous droits réservés</div>
                
                <div id="realisation"><p>Site réalisé par </p><a href="https://www.agence-horizon.fr/"><img src="../images/logo_horizon.png" alt="Logo agence Horizon" /></a></div>
                
                <div id="reglements"><p><a href="mentions_legales.php">Mentions légales</a> | <a href="confidentialite.php">Politique de confidentialité</a> | <a href="cookies.php">Politique des cookies</a><br/>| <a href="ventes.php">Conditions de ventes</a> | <a href="contact.php">Contactez-nous</a></p></div>
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