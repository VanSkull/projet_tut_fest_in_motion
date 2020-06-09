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
        
        <title>FEST'IN MOTION - Mentions légales</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Mentions légales</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_mentions_legales" class="titre_reglement">Mentions légales</h2>
                <p id="sous-titre-mention">Afin de respecter le travail de l'agence HORIZON, merci de créditer à l'aide d'un lien toute représentation ou reproduction intégrale ou partielle du site.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_mentions_legales">
                <div id="mention_loi">
                    <p>Conformément aux dispositions des articles 6-III et 19 de la Loi n° 2004-575 du 21 juin 2004 pour la Confiance dans l'économie numérique, dite L.C.E.N., nous portons à la connaissance des utilisateurs et visiteurs du site : festinmotion.000webhostapp.com/ les informations suivantes :</p>
                </div>
                
                <div id="infos_legales">
                    <h3 class="titre_paragraphe">1. Informations légales :</h3>
                    <p>
                        Statut du propriétaire : <em>Particulier</em><br/>
                        Le Propriétaire est : <em>Hervelyne Vasse</em><br/>
                        Adresse postale du propriétaire : <em>Université, SP, 16 Rue de l'Université, 62307 Lens</em>
                    </p>
                    <p>
                        Le Créateur du site est : <em>Agence HORIZON</em><br/>
                        Le Responsable de la publication est : <em>Hervelyne Vasse</em><br/>
                        Contacter le responsable de la publication : <em>hervelynev@gmail.com</em><br/>
                        Le responsable de la publication est une <em>personne physique</em>
                    </p>
                    <p>
                        Contacter le responsable du site : <em><a href="mailto:festinmotion@laposte.net?subject=Contact à partir des mentions légales via le site festinmotion.000webhostapp.com/">festinmotion@laposte.net</a></em><br/>
                        Appeler le responsable du site : <em>01.23.45.67.89</em>
                    </p>
                    <p>
                        Les Webmasters sont : <em>Lucie Mayeur</em> et <em>Valentin Vanhaecke</em><br/>
                        Contacter les Webmasters : <em><a href="mailto:luciemayeur1@laposte.net?subject=Contact à partir des mentions légales via le site festinmotion.000webhostapp.com/">luciemayeur1@laposte.net</a></em> ou <em><a href="mailto:valentinvanh@gmail.com?subject=Contact à partir des mentions légales via le site festinmotion.000webhostapp.com/">valentinvanh@gmail.com</a></em><br/>
                        L'hébergeur du site est : <em>000webhost <a href="https://fr.000webhost.com/">fr.000webhost.fr/</a></em>                        
                    </p>
                </div>
                
                
                <div id="presentation_principe">
                    <h3 class="titre_paragraphe">2. Présentation et principe :</h3>
                    <p>
                        Le site <em>festinmotion.000webhostapp.com/</em> regroupe un ensemble de services, dans l'état,  mis à la disposition des utilisateurs. Il est ici précisé que ces derniers doivent rester courtois et faire preuve de bonne foi tant envers les autres utilisateurs qu'envers les webmasters du site festinmotion.000webhostapp.com/. Le site festinmotion.000webhostapp.com/ est mis à jour régulièrement par Hervelyne Vasse.
                    </p>
                    <p>
                        Hervelyne Vasse s’efforce de fournir sur le site festinmotion.000webhostapp.com/ des informations les plus précises possibles (sous réserve de modifications apportées depuis leur mise en ligne), mais ne saurait garantir l'exactitude, la complétude et l'actualité des informations diffusées sur son site, qu’elles soient de son fait ou du fait des tiers partenaires qui lui fournissent ces informations. En conséquence, l'utilisateur reconnaît utiliser ces informations données (à titre indicatif, non exhaustives et susceptibles d'évoluer) sous sa responsabilité exclusive.
                    </p>
                </div>
                
                <div id="accessibilite">
                    <h3 class="titre_paragraphe">3. Accessibilité :</h3>
                    <p>
                        Le site festinmotion.000webhostapp.com/ est par principe accessible aux utilisateurs 24/24h, 7/7j, sauf interruption, programmée ou non, pour les besoins de sa maintenance ou en cas de force majeure. En cas d’impossibilité d’accès au service, festinmotion.000webhostapp.com/ s’engage à faire son maximum afin de rétablir l’accès au service et s’efforcera alors de communiquer préalablement aux utilisateurs les dates et heures de l’intervention.  N’étant soumis qu’à une obligation de moyen, festinmotion.000webhostapp.com/ ne saurait être tenu pour responsable de tout dommage, quelle qu’en soit la nature, résultant d’une indisponibilité du service.
                    </p>
                </div>  
                
                <div id="propriete_intellectuelle">
                    <h3 class="titre_paragraphe">4. Propriété intellectuelle :</h3>
                    <p>
                        Hervelyne Vasse est propriétaire exclusif de tous les droits de propriété intellectuelle ou détient les droits d’usage sur tous les éléments accessibles sur le site, tant sur la structure que sur les textes, images, graphismes, logo, icônes, sons, logiciels…<br/>
                        Toute reproduction totale ou partielle du site festinmotion.000webhostapp.com/, représentation, modification, publication, adaptation totale ou partielle de l'un quelconque de ces éléments, quel que soit le moyen ou le procédé utilisé, est interdite, sauf autorisation écrite préalable de Hervelyne Vasse, propriétaire du site à l'email : hervelynev@gmail.com, à défaut elle sera considérée comme constitutive d’une contrefaçon et passible de poursuite conformément aux dispositions des articles L.335-2 et suivants du Code de Propriété Intellectuelle.
                    </p>
                </div>  
                
                <div id="hypertextes_cookies">
                    <h3 class="titre_paragraphe">5. Liens hypertextes et cookies :</h3>
                    <p>
                        Le site festinmotion.000webhostapp.com/ contient un certain nombre de liens hypertextes vers d’autres sites (partenaires, informations …) mis en place avec l’autorisation de Hervelyne Vasse. Cependant, Hervelyne Vasse n’a pas la possibilité de vérifier l'ensemble du contenu des sites ainsi visités et décline donc toute responsabilité de ce fait quant aux risques éventuels de contenus illicites.<br/>
                        L’utilisateur est informé que lors de ses visites sur le site festinmotion.000webhostapp.com/, un ou des cookies sont susceptibles de s’installer automatiquement sur son ordinateur par l'intermédiaire de son logiciel de navigation. Un cookie est un bloc de données qui ne permet pas d'identifier l'utilisateur, mais qui enregistre des informations relatives à la navigation de celui-ci sur le site.<br/>
                        Le paramétrage du logiciel de navigation permet d’informer de la présence de cookie et éventuellement, de la refuser de la manière décrite à l’adresse suivante : <a href="https://www.cnil.fr/">www.cnil.fr</a>. L’utilisateur peut toutefois configurer le navigateur de son ordinateur pour refuser l’installation des cookies, sachant que le refus d'installation d'un cookie peut entraîner l’impossibilité d’accéder à certains services. Pour tout blocage des cookies, tapez dans votre moteur de recherche : blocage des cookies sous IE ou Firefox et suivez les instructions en fonction de votre version.
                    </p>
                </div>  
                
                <div id="donnees_personnelles">
                    <h3 class="titre_paragraphe">6. Protection des biens et des personnes - gestion des données personnelles :</h3>
                    <p>
                        En France, les données personnelles sont notamment protégées par la loi n° 78-87 du 6 janvier 1978, la loi n° 2004-801 du 6 août 2004, l'article L. 226-13 du Code pénal et la Directive Européenne du 24 octobre 1995.<br/>
                        Sur le site festinmotion.000webhostapp.com/, Hervelyne Vasse ne collecte des informations personnelles ( suivant l'article 4 loi n°78-17 du 06 janvier 1978) relatives à l'utilisateur que pour le besoin de certains services proposés par le site festinmotion.000webhostapp.com/. L'utilisateur fournit ces informations en toute connaissance de cause, notamment lorsqu'il procède par lui-même à leur saisie. Il est alors précisé à l'utilisateur du site festinmotion.000webhostapp.com/ l’obligation ou non de fournir ces informations.<br/>
                        Conformément aux dispositions des articles 38 et suivants de la loi 78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés, tout utilisateur dispose d’un droit d’accès, de rectification, de suppression et d’opposition aux données personnelles le concernant. Pour l’exercer, adressez votre demande à festinmotion.000webhostapp.com/ par e-mail : <em><a href="mailto:hervelynev@gmail.com?subject=Contact à partir des mentions légales via le site festinmotion.000webhostapp.com/">hervelynev@gmail.com</a></em> ou par écrit dûment signé, accompagné d’une copie du titre d’identité avec signature du titulaire de la pièce, en précisant l’adresse à laquelle la réponse doit être envoyée.
                    </p>
                </div>
                
                <p id="paragraphe_gras">
                    Aucune information personnelle de l'utilisateur du site festinmotion.000webhostapp.com/ n'est publiée à l'insu de l'utilisateur, échangée, transférée, cédée ou vendue sur un support quelconque à des tiers. Seule l'hypothèse du rachat du site festinmotion.000webhostapp.com/ et de ses droits autorise Hervelyne Vasse à transmettre les dites informations à l'éventuel acquéreur qui serait à son tour tenu à la même obligation de conservation et de modification des données vis à vis de l'utilisateur du site festinmotion.000webhostapp.com/.
                </p>
                
                <p id="protection_bdd">
                    Les bases de données sont protégées par les dispositions de la loi du 1er juillet 1998 transposant la directive 96/9 du 11 mars 1996 relative à la protection juridique des bases de données.
                </p>
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