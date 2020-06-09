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
        
        <title>FEST'IN MOTION - Galeries</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Galerie</span>
        </section>
        
        <div id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_galeries">Galerie</h2>
                <p id="texte_p_galeries">Retrouvez ci-dessous toutes les photos, vidéos, affiches, flyers et documents de nos festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_galeries">
                <div class="categorie_photos">
                    <h2 class="titre_categorie">Photos</h2>
                    <div class="ensemble_categorie">
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo1.jpg" alt="Photo n°1" />
                            <div class="lien_download">
                                <a href="../images/photo1.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo1.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo2.jpg" alt="Photo n°2" />
                            <div class="lien_download">
                                <a href="../images/photo2.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo2.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo3.jpg" alt="Photo n°3" />
                            <div class="lien_download">
                                <a href="../images/photo3.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo3.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo4.jpg" alt="Photo n°4" />
                            <div class="lien_download">
                                <a href="../images/photo4.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo4.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo5.jpg" alt="Photo n°5" />
                            <div class="lien_download">
                                <a href="../images/photo5.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo5.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="photo_galerie" src="../images/photo6.jpg" alt="Photo n°6" />
                            <div class="lien_download">
                                <a href="../images/photo6.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/photo6.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                    </div>
                </div>
                
                <div class="categorie_vidéos">
                    <h2 class="titre_categorie">Vidéos</h2>
                    <div class="ensemble_categorie">
                        <video class="videos" controls poster="../images/video.PNG">
                            <source src="../videos/PROMO.mp4" type="video/mp4">
                            Une erreur est survenue ! Il semblerait que votre navigateur ne puisse pas lire notre vidéo.
                        </video>
                        <video class="videos" controls poster="../images/videopresentation.PNG">
                            <source src="../videos/videopresentation.mp4" type="video/mp4">
                            Une erreur est survenue ! Il semblerait que votre navigateur ne puisse pas lire notre vidéo.
                        </video>
                    </div>
                </div>
                
                <div class="categorie_illustrations">
                    <h2 class="titre_categorie">Affiches</h2>
                    <div class="ensemble_categorie">
                        
                        <div class="download_image">
                            <img class="illustration_galerie" src="../images/affiche-idee-1.jpg" alt="Affiche n°1" />
                            <div class="lien_download">
                                <a href="../images/affiche-idee-1.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/affiche-idee-1.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>
                        
                        <div class="download_image">
                            <img class="illustration_galerie" src="../images/affiche_anglais.jpg" alt="Affiche n°2" />
                            <div class="lien_download">
                                <a href="../images/affiche_anglais.jpg"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                                <a href="../images/affiche_anglais.jpg" download="photo.jpg"><img class="icon_download" src="../images/download.png" alt="Icon téléchargement" /></a>
                            </div>
                        </div>

                    </div>
                </div>
                
                <div class="categorie_communique">
                    <h2 class="titre_categorie">Communiqué de presse</h2>
                    <div class="ensemble_categorie">
                        <div id="presse_galerie">
                            <img src="../images/citadelle1.jpg" alt="Communiqué de presse" />
                            <p class="titre_communique">
                                Communiqué de presse<br/>
                                -<br/>
                                Fest'In Motion
                            </p>
                            <div class="lien_download">
                                <a href="../documents/fr/communique.pdf"><img class="icon_download" src="../images/fullscreen.png" alt="Icon aperçu" /></a>
                            </div>
                        </div>
                        
                        <a href="../documents/fr/dossier_de_presse.pdf" id="lien_telechargement_presse" download="communique_de_presse.pdf">Télécharger le <br/>dossier</a>
                    </div>
                   
                </div>
            </section>
        </div>
        
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