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
        
        <title>FEST'IN MOTION - Événement</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Événement</span>
        </section>
        
        <section id="corps_page">
            <section class="titre_entete item_page">
                <h2 id="titre_evenement">Événement</h2>
                <p id="texte_p_evenement">Retrouvez ci-dessous la présentation de notre festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_evenement">
                <div class="item_page entete_evenement">
                    <h2>
                        Festival International du film d'animation amateur 2020<br/>
                        7/8/9 AOÛT 2020 - CALAIS
                    </h2>
                    <p>
                        Retrouvez-nous à La Citadelle de Calais pour vivre des moments magiques.<br/>
                        Ouvert à tous, vous pourrez profiter de nos diffusions, nos stands, nos bars et plein d'autres choses.<br/>
                        <a href="informations.php" class="savoir_plus">En savoir plus</a>
                    </p>
                </div>
                <div class="item_page infos_evenement">
                    <div class="presentation">
                        <div class="photo_presentation">
                            <img id="img_presentation" src="../images/photo_presentation.jpg" alt="Photo de Fest'In Motion" />
                        </div>
                        <div class="texte_presentation">
                            <h3>
                                Un festival de 3 jours,<br/>
                                avec 20 films d'animation :
                            </h3>
                            <ul>
                                <li>Découvrez un univers animé</li>
                                <li>Rencontrez des professionnels</li>
                                <li>Évadez-vous de la réalité</li>
                                <li>Repartez avec des étoiles pleins les yeux</li>
                            </ul>
                            <!-- Ligne horizontale -->
                            <p>
                                Un festival accessible à tous, seul, en famille ou entre amis, où la fiction devient réalité et où les formes et le dessin prennent vie.
                            </p>
                            <!-- Ligne horizontale -->
                            <p class="citation">
                                "Pour que la vie soit un conte de fées, il suffit peut-être simplement d'y croire ..."<br/>
                            </p>
                            <span class="auteur">Walt Disney</span>
                        </div>
                    </div>
                    
                    <div class="professionels">
                        <div class="texte_professionels">
                            <h3>
                                Des professionnels dans le milieu,<br/>
                                mais pas que.
                            </h3>
                            <!-- Ligne horizontale -->
                            <p>
                                L'animation, un domaine du cinéma parfois mis à l’écart, mais qui mérite toute notre attention, et pour cause : il réunit toutes les générations, fait briller les yeux des petits et colle des sourires sur les visages des plus grands.
                            </p>
                            <p>
                                Nous tenons aussi à donner de la visibilité à de jeunes équipes de réalisation dont le travail mérite d’être reconnu, leur permettre de progresser et d’apprendre en échangeant et en étant jugé par un jury de cinéastes professionnels.
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
                                Venez avec des ambitions.<br/>
                                Repartez avec des étoiles pleins les yeux.
                            </h3>
                            <!-- Ligne horizontale -->
                            <p>
                                Venir à Fest’In Motion c’est participer à un marathon d’animation pour débutant et initiés. Découvrir pour certains, se perfectionner pour d’autres, mais surtout partager un moment ensemble, tout cela dans le cadre exceptionnel qu’est celui de la Citadelle de Calais, ou nous ferons tout pour faire régner la convivialité grâce à une ambiance décontractée et agréable.
                            </p>
                        </div>
                    </div>
                    
                    <div class="tarifs">
                        <h3>TARIFS</h3>
                        <p>
                            Venez-nous rejoindre !!!
                        </p>
                        
                        <div id="prix_tarifs">                           
                            <div id="prix_adulte"><span>15</span>€00 / adulte</div>

                            <div id="prix_enfant"><span>10</span>€00 / enfant<sup>*</sup></div>
                        </div>
                        
                        <a href="inscription.php" class="lien_inscription">Je vous rejoins</a>
                        
                        <span id="explication_asterisque" class="asterisque"><sup>*</sup>Correspond aux enfants de moins de 10 ans</span>                
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