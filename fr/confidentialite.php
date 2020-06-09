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
        
        <title>FEST'IN MOTION - Politique de confidentialité</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Politique de confidentialité</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_confidentialite" class="titre_reglement">Politique de confidentialité</h2>
                <p id="sous_titre_confidentialite">Nous utilisons cette politique de confidentialité pour vous informer des données personnelles que nous enregistrons lorsque vous utilisez notre site et des finalités pour lesquelles ces données sont utilisées.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_confidentialite">
                <div id="donnees_collectees">
                    <h3 class="titre_paragraphe">1. Quelles sont les données collectées ?</h3>
                    <p>
                        En fonction de la façon dont vous interagissez avec la société et de la finalité de cette interaction, la Société est susceptible de collecter les données suivantes :
                    </p>
                    <p>
                        <strong>Données relatives à votre identité :</strong> ces données désignent notamment votre nom, votre prénom, votre adresse électronique, votre adresse postale ou encore votre numéro de téléphone et votre profil (candidat, visiteur, exposant…).
                    </p>
                    <p>
                        <strong>Données relatives à votre commande :</strong> ces données désignent l’ensemble des informations nécessaires à la satisfaction et à la complétude de votre commande, notamment les informations relatives à la carte bancaire utilisée (nom du titulaire de la carte, numéro de la carte, date d’expiration…), le détail de la commande, la date de la commande, les échanges avec le service des relations commerciales. En tout état de cause, les données relatives au paiement sont traitées conformément à la réglementation et aux normes de sécurité applicable en la matière.
                    </p>
                    <p>
                        <strong>Données relatives à la connexion et à l’utilisation du compte lorsque vous en est titulaire :</strong> ces données désignent l’ensemble des informations dont vous avez besoin pour accéder à votre espace personnel ainsi que celles relatives à l’utilisation du Compte Client et notamment, vos identifiants et mot de passe, vos choix et préférences, l’historique des événements auxquels vous avez participé. En tout état de cause, le Compte Client fait l’objet de conditions générales d’utilisation spécifique.
                    </p>
                    <p>
                        <strong>Données relatives à la navigation :</strong> ces données concernent la manière dont l’Utilisateur navigue sur le Site. Ces données peuvent inclure l’adresse IP, la résolution de l’écran, le navigateur utilisé, le temps de navigation, historique de recherche, le système d’exploitation utilisé, la langue et les pages visualisées.
                    </p>
                    <p>
                        <strong>Données relatives à votre participation aux salons :</strong> date de participation, stands visités, achats réalisés.
                    </p>
                    <p>
                        <strong>Données relatives à l’utilisation des réseaux sociaux :</strong> lorsque vous interagissez avec les fonctionnalités de réseaux sociaux.
                    </p>
                </div>
                <div id="donnees_recoltees">
                    <h3 class="titre_paragraphe">2. Comment vos données sont-elles collectées ?</h3>
                    <p>
                        En fonction de la façon dont vous interagissez avec la société, cette dernière est susceptible de collecter vos données selon les modalités décrites comme suie.
                    </p>
                    <p>
                        La société collecte vos données directement auprès de vous lorsque notamment vous remplissez un formulaire de contact ou d’inscription, vous passez une commande ou encore que vous vous adressez à la société (par exemple en lui adressant un courrier électronique).
                    </p>
                    <p>
                        La Société collecte indirectement vos Données lorsque vous naviguez sur les sites au moyen de cookies et de balises dans les conditions définies plus avant. La société collecte aussi vos données via des tiers dont les réseaux sociaux lorsque vous utilisez le compte dont vous êtes titulaire auprès de ces tiers pour vous connecter ou vous inscrire à une manifestation.
                    </p>
                    <p>
                        Lorsque vous communiquez des données à la société, il vous appartient de vous assurer qu’elles sont exactes et complètes. Le cas échéant, vous devez les mettre à jour.
                    </p>
                    <p>
                        Les données présentées comme obligatoires sont nécessaires à la gestion de votre demande et pour nous permettre de vous fournir les services sollicités. Le caractère obligatoire ou facultatif des données est indiqué sur les formulaires ainsi que les éventuelles conséquences en cas de défaut de réponse.
                    </p>
                </div>
                <div id="donnees_raison">
                    <h3 class="titre_paragraphe">3. Pourquoi vos données sont-elles collectées ?</h3>
                    <p>
                        Vos données font l’objet de traitements automatisés mis en œuvre par la société pour les diverses finalités ci-après décrites tant dans le cadre de votre utilisation des sites que de votre participation aux événements organisés par la société ou dont l’organisation lui a été confiée.
                    </p>
                    <p>
                        Vos données sont traitées pour gérer les demandes que vous formulez et vous contacter.
                    </p>
                    <p>
                        <strong>Si vous êtes client,</strong> sur la base de l’exécution du contrat conclu avec la société (conditions générales de pré-enregistrement, conditions générales de vente Billetterie ou conditions générales de participation), vos données sont traitées pour gérer vos demandes de participation et commandes et organiser vos participations et visites sur les événements que nous organisons ou dont l’organisation nous a été confiée.
                    </p>
                    <p>
                        Dans une perspective d’amélioration continue des événements qu’elle organise, vos données sont aussi traitées par la société pour vous adresser des enquêtes post événements et analyser leur résultat.
                    </p>
                    <p>
                        <strong>Si vous avez la qualité de prospect professionnel,</strong> la société est susceptible de vous adresser, par tous canaux, ses actualités et informations commerciales sur la base de son intérêt légitime à promouvoir les événements qu’elle organise.
                    </p>
                    <p>
                        <strong>Si vous êtes un prospect non professionnel,</strong> la société est susceptible de vous adresser, par tous canaux, ses actualités et informations commerciales si vous y avez consenti.
                    </p>
                    <p>
                        Sur la base de votre consentement, la société peut également vous adresser, par tous canaux, des actualités et informations commerciales concernant les événements organisés par d’autres entités du Groupe HORIZON et/ou les services de partenaires.
                    </p>
                </div>
                <div id="donnees_destination">
                    <h3 class="titre_paragraphe">4. À qui vos données sont-elles destinées ?</h3>
                    <p>
                        Vos données sont traitées par les équipes internes de la société. En outre, seuls les prestataires de service et leur personnel limitativement habilités sont autorisés à accéder à vos données, et ce, eu égard aux prestations spécifiques qui leur sont confiées et qu’ils doivent réaliser pour le compte exclusif de la société dans le strict respect d’obligations notamment de sécurité et de confidentialité.
                    </p>
                    <p>
                        Avec votre consentement, lorsqu’il est requis, vos données sont susceptibles d’être transmises aux entités du Groupe auquel la société appartient ainsi qu’à des partenaires notamment afin qu’ils vous adressent des informations et actualités sur les services et produits qu’ils proposent.
                    </p>
                    <p>
                        Lorsque la réglementation en vigueur l’exige, la société est susceptible de transmettre vos données aux organismes et autorités légalement autorisés à y accéder (notamment les autorités judiciaires et administratives).
                    </p>
                </div>
                <div id="donnees_protection">
                    <h3 class="titre_paragraphe">5. Comment vos données sont-elles protégées ?</h3>
                    <p>
                        La société prend toutes précautions utiles afin de préserver la sécurité et la confidentialité de vos données afin, d’empêcher qu'elles soient déformées, endommagées, divulguées et que des tiers non-autorisés y aient accès.
                    </p>
                </div>
                <div id="donnees_droits">
                    <h3 class="titre_paragraphe">6. Quels sont vos droits ?</h3>
                    <p>
                        Conformément à la réglementation applicable et dans les conditions qu’elle définit, vous pouvez à tout moment exercer votre :
                    </p>
                    <p>
                        <strong>Droit d'accès :</strong> vous pouvez demander à la société des informations sur les traitements dont les données vous concernant font l’objet et la copie desdites données.
                    </p>
                    <p>
                        <strong>Droit de rectification :</strong> vous pouvez demander la rectification des données inexactes vous concernant lorsque celles détenues par la société sont erronées ou incomplètes.
                    </p>
                    <p>
                        <strong>Droit à l’effacement :</strong> vous avez le droit d'obtenir de la société l'effacement de vos données lorsqu’un des motifs prévus par la réglementation existe (inutilité des données, retrait de votre consentement pour les traitements fondés sur ce dernier, etc.).
                    </p>
                    <p>
                        <strong>Droit d'opposition :</strong> vous avez le droit d'obtenir de la société l'effacement de vos données lorsqu’un des motifs prévus par la réglementation existe (inutilité des données, retrait de votre consentement pour les traitements fondés sur ce dernier, etc.).
                    </p>
                    <p>
                        <strong>Droit à la portabilité de vos données :</strong> vous avez le droit de recevoir les données dans un format exploitable. Ce droit ne concerne que le cas où les Données sont fournies à la société par vous-même ou qu’elles résultent de l’utilisation que vous faites de ses services. Ces données sont traitées sur la base de votre consentement ou de l’exécution d’un contrat.
                    </p>
                    <p>
                        <strong>Droit à la limitation :</strong> vous pouvez demander à la société la suspension du traitement de vos données lorsqu’un des motifs prévus par la réglementation existe (contestation de l’exactitude des données, etc.).
                    </p>
                    <p>
                        Dans les conditions définies par la réglementation, vous disposez également d’un droit de définir des directives générales ou particulières relatives au sort de vos données après votre décès. Vous êtes toutefois informé que seules les directives particulières relatives aux traitements de données mis en œuvre par la Société pour les finalités définies dans la présente politique seront enregistrées par la société sous réserve de son consentement spécifique.
                    </p>
                    <p>
                        Lorsque vos données sont traitées avec votre consentement, vous pouvez, à tout moment, le révoquer. Vous êtes cependant informés que les traitements mis en œuvre antérieurement à cette révocation demeureront valables.
                    </p>
                    <p>
                        Vous pouvez exercer vos droits en contactant la Société :
                    </p>
                    <p>
                        Vous êtes en outre informé que dans certains cas, les fonctionnalités des sites vous permettent de consulter et de modifier les données que vous avez communiquées à la société.
                    </p>
                    <p>
                        Vous êtes informé que la société dispose d’un délai d’un mois à compter de la réception de votre demande pour y répondre.
                    </p>
                    <p>
                        La société apporte la plus grande attention à vos données, néanmoins si vous considérez que leur traitement porte atteinte à vos droits vous disposez de la faculté d’introduire une réclamation auprès de la Commission Nationale de l’Informatique et des Libertés (CNIL) - 3 Place de Fontenoy - TSA 80715 - 75334 PARIS CEDEX 07.
                    </p>
                </div>
                <div id="donnees_conservation">
                    <h3 class="titre_paragraphe">7. Pendant combien de temps conservons-nous vos données ?</h3>
                    <p>
                        La société conserve vos données pendant une durée qui n’excède pas la durée nécessaire aux finalités exposées par la présente politique. Au-delà, vos sonnées sont susceptibles d’être archivées pour respecter les obligations légales auxquelles la société est soumise ou supprimées.
                    </p>
                    <p>
                        Les données permettant d'établir la preuve d'un droit ou d'un contrat, ou conservées au titre du respect d'une obligation légale par la société sont archivées conformément aux dispositions en vigueur.
                    </p>
                    <p>
                        La société prend en compte la saisonnalité des événements qu’elle organise.
                    </p>
                </div>
                <div id="donnees_transfert">
                    <h3 class="titre_paragraphe">8. Transfert des données</h3>
                    <p>
                        Pour l’hébergement et le traitement de vos données, la société privilégie des moyens situés sur le territoire de l’Union européenne. Si un transfert de données vers un pays tiers à l’Union européenne devait néanmoins être envisagé, une information spécifique vous sera délivrée par la société.
                    </p>
                </div>
                <div id="donnees_modification">
                    <h3 class="titre_paragraphe">9. Modification de la politique de confidentialité</h3>
                    <p>
                        Toute modification par la société de la présente politique fera l’objet d’une mise à jour sur le Site.
                    </p>
                    <p>
                        L’Utilisateur est invité à consulter régulièrement la présente politique afin de prendre connaissance de toute mise à jour ou modification.
                    </p>
                    <p>
                        Si l'une quelconque des clauses de la présente politique est déclarée nulle ou contraire à la réglementation, elle sera réputée non écrite mais n'entraînera pas la nullité des autres clauses de la politique.
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