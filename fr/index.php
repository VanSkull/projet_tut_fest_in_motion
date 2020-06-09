<?php
    session_start();
    date_default_timezone_set('UTC');
    setcookie('lastConnexion', date('d.m.Y'), time()+365*24*3600, null, null, false, true);
?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8" />
        <meta name="description" content="Site officiel du festival Fest'In Motion" />
        <meta name="keywords" content="Fest'In Motion, Festival, Animation, Dessin animé, Événement, Extérieur, Art, Cinéma, Dessin" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        
        <title>FEST'IN MOTION - Accueil</title>
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
            
        </section>
        
        <section id="corps_page">
            <section id="entete" class="item_page">
                <h2 id="titre_entete">Bienvenue au festival de Fest'In Motion</h2>
                <p id="description_entete">Pour cette deuxième édition de Fest'In Motion, nous vous proposons des activités en plein air diverses et variées.<br/>
                De l'animation, des rencontres avec des producteurs, des diffusions de films, ... Vous trouverez votre bonheur.</p>
            </section>
            
            <section id="promo_video" class="item_page">
                <div id="video">
                    <video id='lavideo' controls poster="../images/video.PNG">
                        <source src="../videos/PROMO.mp4" type="video/mp4">
                        Une erreur est survenue ! Il semblerait que votre navigateur ne puisse pas lire notre vidéo.
                    </video>
                </div>
                
                <div id="texte_video">
                    <h2 id="titre_video">Vous ne nous connaissez pas ?</h2>
                    <p id="description_video">Pas de problème! Ici on vous donne un petit aperçu de ce que vous pourrez découvrir durant le festival, vous y trouverez forcément les bonnes informations !</p>
                </div>
            </section>
            
            <section id="preview_galeries" class="item_page">
                <h2 id="titre_preview_galeries">Notre galerie</h2>
                <div id="preview_photos">
                    <img src="../images/Cupcake%20aux%20fraises%20de%20Emile%20Vullemin%20et%20Marie%20Semin.png" alt="Affiche 1" id="preview_affiche1" />
                    <img src="../images/Mon%20objet.jpg" alt="Affiche 2" id="preview_affiche2" />
                    <img src="../images/Nao%20de%20Antoine%20Chamb%C3%A9ry.png" alt="Affiche 3" id="preview_affiche3" />
                    <img src="../images/N%C3%A9on%20animation.jpg" alt="Affiche 4" id="preview_affiche4" />
                    <img src="../images/Plong%C3%A9e%20astrale.png" alt="Affiche 5" id="preview_affiche5" />
                    <img src="../images/Seasons.png" alt="Affiche 6" id="preview_affiche6" />
                    <img src="../images/Spooch%20et%20cookie.png" alt="Affiche 7" id="preview_affiche7" />
                    <img src="../images/Super%20MMi.jpg" alt="Affiche 8" id="preview_affiche8" />
                     <img src="../images/A%20crab%20droid%20Story.jpg" alt="Affiche 9" id="preview_affiche9" />
                    <img src="../images/autour%20des%20rochers.jpg" alt="Affiche 10" id="preview_affiche10" />
                    <img src="../images/Il%20%C3%A9tait%20une%20fois%20dans%20le%20grand%20est.png" alt="Affiche 11" id="preview_affiche11" />
                    <img src="../images/Isola%20Urbana%20de%20Th%C3%A9o%20L%E2%80%99Huillier.jpg" alt="Affiche 12" id="preview_affiche12" />
                    <img src="../images/La%20lune%20rouge.png" alt="Affiche 13" id="preview_affiche13" />
                    <img src="../images/Tempo%20The%20Music%20connection%20de%20Kostia%20Ratel.jpg" alt="Affiche 14" id="preview_affiche14" />
                    <img src="../images/tempo.jpg" alt="Affiche 15" id="preview_affiche15" />
                    
                </div>
            </section>
            
            <section id="reservation" class="item_page">
                <h2 id="titre_reservation">Réservez vos places</h2>
                <div id="contenu_reservation">
                    <div id='butt_reservation'>
                    <a href="inscription.php" id="lien_reservation">Réservation</a>
                    </div>
                    <span id="description_reservation">Prenez vos places pour profiter de notre spectacle.</span>
                    
                    <div id="tarifs">
                        <div id="prix_adulte">
                        <span>15</span>€00 / adulte
                        </div>
                        <div id="prix_enfant">
                        <span>10</span>€00 / enfant<sup>*</sup>
                        </div>
                        <div>
                        <span id="explication_asterisque"><sup>*</sup>Correspond aux enfants de moins de 10 ans</span>
                        </div>
                    </div>
                </div>
            </section>
            
            <section id="partenaires" class="item_page">
                <h2 id="titre_partenaires">Nos bénévoles et partenariats</h2>
                <p id="description_partenaires">Ils nous ont fait confiance et ils nous ont aidés pour ce projet incroyable.</p>
                <div id="images_partenaires">
                    <img src="../images/logo_calais.png" alt="Logo ville de Calais" id="partenaire1" />
                    <img src="../images/logo_canon.png" alt="Logo Canon" id="partenaire2" />
                    <img src="../images/logo_gaumont.png" alt="Logo Cinéma Gaumont" id="partenaire3" />
                    <img src="../images/logo_pause_canap.png" alt="Logo Pause Canap'" id="partenaire4" />
                    <img src="../images/logo_disney_store.png" alt="Logo Disney Store" id="partenaire5" />
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