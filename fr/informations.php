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
        
        <title>FEST'IN MOTION - Informations</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Informations</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_informations">Informations</h2>
                <p id="texte_p_informations">Retrouvez ci-dessous toutes les informations (dates, horaires, stands, ...) à propos de notre festival.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_informations">
                <h3 class="titre_contenu">Festival International du film d'animation amateur 2020</h3>
                <p class="sous_titre_contenu">
                    Le Fest'In Motion est un festival, qui vous propose des films d'animation au fort potentiel du cinéma.<br/>
                    De l'animation 3D jusqu'au stop motion, l'objectif est de vous faire découvrir une autre facette du cinéma d'animation.
                </p>
        <div id=couleurs>        
                <div class="informations_explications item_page">
                    <div class="texte_explications">
                        <h3 class="titre_explications">
                            Fest'In Motion,<br/>
                            c'est quoi ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Le Fest'In Motion est un festival qui a lieu pendant 3 jours et qui vous propose de découvrir des films d'animation.<br/>
                            Mais, le Fest'In Motion, c'est aussi l'opportunité de rencontrer des professionnels dans le milieu du cinéma, de l'animation et de la photographie.
                        </p>
                        <p>
                            Pendant 3 jours, 20 films seront diffusés sur de grands écrans afin que vous puissiez les admirer.                            
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
                            quel est le programme ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Le Fest'In Motion, c'est la diffusion de plus de 30 heures de films d'animation pour élargir votre culture cinématographique.
                        </p>
                        <p>
                            Vous aurez aussi la possibilité de rencontrer des professionnels afin de pouvoir échanger avec eux, les questionner sur leur parcours, les demander des conseils, ...<br/>
                            Des expositions et des conférences seront également présentent afin de vous présenter les nouveaux projets de nos invités.
                        </p>
                    </div>
                </div>
                
                <div class="informations_inscription item_page">
                    <div class="texte_inscription">
                        <h3 class="titre_inscription">
                            Fest'In Motion,<br/>
                            comment y assister ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Les inscriptions pour assister au festival se font sur notre site officiel, la page <a class="lien_inscription1" href="inscription.php">Inscription.</a>
                        </p>
                        <p>
                            Vous aurez aussi la possibilité de rencontrer des professionnels afin de pouvoir échanger avec eux, les questionner sur leur parcours, les demander des conseils, ...<br/>
                            Des expositions et des conférences seront également présentes afin de vous présenter les nouveaux projets de nos invités.<br/>
                            Le festival est accessible depuis les autoroutes A16, A25 et A26.
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
                            qui y vient ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Notre festival fait venir des personnalités de l'animation tels que Disney, Pixar et même de petits producteurs indépendants.
                        </p>
                        <p>
                            Mais, nous faisons aussi venir des jurys du cinéma d'animation afin d'analyser les films que vous verrez.<br/>
                            Vous aurez alors l'occasion d'échanger avec eux mais aussi, leur poser des questions sur leur métier, leur parcours et bien d'autres.
                        </p>
                    </div>
                </div>
                
                <div class="informations_programme item_page">
                    <div class="texte_programme">
                        <h3 class="titre_programme">
                            Fest'In Motion,<br/>
                            comment y séjourner ?
                        </h3>
                        <!-- Ligne horizontale -->
                        <p>
                            Au cas où vous devrez venir de loin, nous vous mettens à disposition plusieurs solutions pour y séjourner sur place.
                        </p>
                        <p>
                            Les parkings gratuits sont Parkplatz Rue Léon Jacques Lesage, Bassin Ouest Boulevard de la Résidence, Parking de la Gare et Parking de la Mairie.<br/>
                            La Gare de Calais Est à 4 minutes en voitures, 18 minutes à pieds ou par la ligne 5 des bus de villes.<br/>
                            Et enfin, voici quelques hôtels qui seront prêts à vous loger : Citadel Hotel, Métropol’Hotel, Hotel Première Classe Calais, Brit Hotel Calais, B&B hôtel calais centre saint pierre, Holiday Inn Calais, Hotel Meurice, Aire de camping-car.
                        </p>
                    </div>
                    <div class="img_programme">
                        <img src="../images/photo2.jpg" alt="Photo citadelle" />
                    </div>
                </div>
      </div>          
                <div class="informations_photos item_page">
                    <div>
                        <h3 class="titre_photos">Fest'In Motion en photo</h3>
                    </div>
                    <!-- Ligne horizontale -->
                    <div class="img_photos">
                        <img  id="photos1" class="informations_img_photos" src="../images/photo1.jpg" alt="Photo Fest'In Motion 1" />
                        <img class="informations_img_photos" src="../images/citadelle2.jpg" alt="Photo Fest'In Motion 2" />
                        <img class="informations_img_photos" src="../images/citadelle3.jpg" alt="Photo Fest'In Motion 3" />
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