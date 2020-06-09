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
        
        <title>FEST'IN MOTION - Politique des cookies</title>
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
            
        
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Politique des cookies</span>
        
        </section>
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_cookies" class="titre_reglement">Politique des cookies</h2>
                <p id="sous_titres_cookies">Par la présente politique des cookies, l’opérateur du site informe les visiteurs du site de l'utilisation faite des cookies ou des technologies de stockage similaires mises en place sur ce site.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_cookies">
                <div id="infos_cookies">
                    <h3 class="titre_paragraphe">1. Que sont les cookies ?</h3>
                    <p>
                        Les cookies sont des petits fichiers textes qui sont stockés par votre navigateur sur votre ordinateur ou support mobile pour enregistrer certaines informations ou fichiers d’images, tels que les pixels. La prochaine fois que vous visiterez notre site web sur le même dispositif, les informations enregistrées dans les cookies seront transmises en conséquence soit à notre site web ("cookie de première partie"), soit à un autre site web auquel le cookie appartient ("cookie de tiers").
                    </p>
                    <p>
                        Grâce à cet échange d’informations enregistrées lors de vos différents passages sur le site web en question, il reconnaît que vous utilisez les mêmes navigateurs et dispositif. Nous utilisons ces informations pour pouvoir concevoir et afficher le site web de manière optimale et en fonction de vos préférences.
                    </p>
                    <p>
                        En conséquence, seul le cookie lui-même est identifié sur votre appareil. Vos données personnelles seront enregistrées qu'avec votre consentement exprès ou si cela est strictement nécessaire pour pouvoir utiliser le service qui vous est offert et donc auquel vous avez accès.
                    </p>
                </div>
                
                <div id="utilisation_cookies">
                    <h3 class="titre_paragraphe">2. Consentement de l'utilisation des cookies :</h3>
                    <p>
                        Le Site utilise 3 catégories de cookies dont les finalités sont décrites ci-après. Aucun cookie n’est utilisé pour collecter des informations nominatives (comme le nom de l’Utilisateur par exemple).
                    </p>
                    
                    <div id="utilisation_cookies_1">
                        <h4 class="sous_titre_paragraphe">1. Les cookies de fonctionnalités</h4>
                        <p>
                            Ces cookies ne sont pas indispensables à la navigation sur le Site, mais permettent d’optimiser le fonctionnement du Site et de proposer à une navigation fluide et sur-mesure.<br/>
                            En l’occurrence, l’Éditeur utilise un seul cookie de ce type. Il s’agit du cookie de session. Sa durée de vie est égale au temps de la session de l’Utilisateur. Ce temps est limité à 1 heure en cas d’inactivité et au maximum, à 24 heures.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_2">
                        <h4 class="sous_titre_paragraphe">2. Les cookies de mesure d'audience (statistique)</h4>
                        <p>
                            Ces cookies recueillent des informations sur la façon dont les visiteurs utilisent un site Web. Par exemple, le nombre de visites, les pages les plus visitées...<br/>
                            Les données statistiques obtenues ne sont pas cédées à des tiers ni utilisées à d’autres fins.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_3">
                        <h4 class="sous_titre_paragraphe">3. Les cookies de partage (liens sociaux)</h4>
                        <p>
                            Le Site contient des liens de partage vers Facebook, Twitter et autres réseaux sociaux similaires, qui vous permettent de partager des contenus du Site avec d’autres personnes. Lorsque l’Utilisateur utilise ces boutons de partage, un cookie tiers est installé. Si l’Utilisateur est connecté au réseau social lors de sa navigation sur le Site, les boutons de partage permettent de relier les contenus consultés au compte utilisateur.
                        </p>
                    </div>
                    
                    <div id="utilisation_cookies_4">
                        <h4 class="sous_titre_paragraphe">4. Les cookies publicitaires</h4>
                        <p>
                            Ces cookies collectent des informations concernant vos habitudes en matière de navigation Internet afin de vous proposer des publicités qui vous sont adaptées et correspondent à vos centres d’intérêt. Ils permettent également de limiter le nombre de fois que vous verrez une publicité et nous aident à évaluer l’efficacité de nos campagnes publicitaires. Ils sont en général installés par des réseaux publicitaires avec l’autorisation de l’opérateur du site Internet. Ils mémorisent les visites effectuées sur un site et partagent ces informations avec d’autres entreprises (des publicitaires par exemple). Les cookies ciblés ou publicitaires sont souvent liés aux fonctionnalités du site fournies par l’entreprise partenaire.
                        </p>
                    </div>
                    
                    <p>
                        Les informations sont collectées et partagées avec des tiers pour proposer des ciblages d’audience et des solutions d’optimisation pour les annonceurs publicitaires et les éditeurs. Aucune donnée personnelle n’est recueillie et un individu ne peut être identifié via les données collectées.
                    </p>
                </div>
                
                <div id="parametrage_cookies">
                    <h3 class="titre_paragraphe">3. Gestion et paramétrage des cookies :</h3>
                    <p>
                        Plusieurs possibilités sont offertes à l’Utilisateur pour gérer les cookies. Toutefois, il est précisé que tout paramétrage réalisé par l’Utilisateur est susceptible de modifier la navigation sur Internet et les conditions d’accès à certains services nécessitant l’utilisation de cookies.
                    </p>
                </div>
                
                <div id="desactivation_cookies">
                    <h3 class="titre_paragraphe">4. Désactivation et suppression de tous les cookies :</h3>
                    <p>
                        Il est possible de configurer votre navigateur pour empêcher l’utilisation et stockage de cookies sur votre dispositif et/ou que l'on vous demande à chaque visite d’un site d’activer les cookies. Vous pouvez également, à tout moment, supprimer les cookies qui ont été réactivés.
                    </p>
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
                
                <div id="reglements"><p><a href="mentions_legales.php">Mentions légales</a> | <a href="confidentialite.php">Politiques de confidentialité</a> | <a href="cookies.php">Politique des cookies</a><br/>| <a href="ventes.php">Conditions de ventes</a> | <a href="contact.php">Contactez-nous</a></p></div>
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