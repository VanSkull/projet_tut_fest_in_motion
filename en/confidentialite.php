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
        
        <title>FEST'IN MOTION - Privacy policy</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Privacy policy</span>
        </section>
        
        <section id="corps_page">
            <section class="item_page titre_entete">
                <h2 id="titre_confidentialite" class="titre_reglement">Privacy policy</h2>
                <p id="sous_titre_confidentialite">We use this privacy policy to inform you of the personal data we save when you use our site and the purposes for which it is used.</p>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontale -->
            
            <section class="item_page contenu_confidentialite">
                <div id="donnees_collectees">
                    <h3 class="titre_paragraphe">1. What data is collected ?</h3>
                    <p>
                        Depending on the way you interact with the company and the purpose of this interaction, the Company may collect the following data :
                    </p>
                    <p>
                        <strong>Data relating to your identity :</strong> this data designates in particular your name, your first name, your e-mail address, your postal address or even your telephone number and your profile (candidate, visitor, exhibitor, etc...).
                    </p>
                    <p>
                        <strong>Data relating to your order :</strong> these data designate all the information necessary for the satisfaction and completeness of your order, in particular information relating to the bank card used (name of the card holder, card number, expiration date, etc.), details of the order, the date of the order, exchanges with the commercial relations department. In any event, payment data are processed in accordance with the regulations and security standards applicable in this area.
                    </p>
                    <p>
                        <strong>Data relating to the connection and use of the account when you are the holder :</strong> this data designates all the information you need to access your personal space as well as that relating to the use of the Customer Account and in particular, your username and password, your choices and preferences, the history of events at which you participated. In any event, the Customer Account is subject to general conditions of specific use.
                    </p>
                    <p>
                        <strong>Navigation data :</strong> this data concerns the way in which the User navigates on the Site. This data can include the IP address, screen resolution, browser used, browsing time, search history, operating system used, language and pages viewed.
                    </p>
                    <p>
                        <strong>Data relating to your participation in trade fairs :</strong> date of participation, stands visited, purchases made.
                    </p>
                    <p>
                        <strong>Data relating to the use of social networks :</strong> when you interact with social media features.
                    </p>
                </div>
                <div id="donnees_recoltees">
                    <h3 class="titre_paragraphe">2. How is your data collected ?</h3>
                    <p>
                        Depending on the way in which you interact with the company, the latter may collect your data according to the methods described as soot.
                    </p>
                    <p>
                        The company collects your data directly from you when, in particular, you complete a contact or registration form, you place an order or you address the company (for example by sending it an email).
                    </p>
                    <p>
                        The Company indirectly collects your Data when you browse the sites using cookies and tags under the conditions defined above. The company also collects your data via third parties, including social networks, when you use the account you hold with these third parties to log in or register for an event.
                    </p>
                    <p>
                        When you communicate data to the company, it is your responsibility to ensure that it is accurate and complete. If necessary, you must update them.
                    </p>
                    <p>
                        The data presented as mandatory is necessary for the management of your request and to allow us to provide you with the services requested. The compulsory or optional nature of the data is indicated on the forms as well as the possible consequences in the event of failure to reply.
                    </p>
                </div>
                <div id="donnees_raison">
                    <h3 class="titre_paragraphe">3. Why is your data collected ?</h3>
                    <p>
                        Your data is subject to automated processing implemented by the company for the various purposes below described both in the context of your use of the sites and your participation in events organized by the company or whose organization has been entrusted.
                    </p>
                    <p>
                        Your data is processed to manage the requests you make and to contact you.
                    </p>
                    <p>
                        <strong>If you are a customer,</strong> on the basis of the execution of the contract concluded with the company (general conditions of pre-registration, general conditions of sale Ticketing or general conditions of participation), your data is processed to manage your requests for participation and orders and organize your participations and visits to events that we organize or for which the organization has been entrusted to us.
                    </p>
                    <p>
                        With a view to continuous improvement of the events it organizes, your data is also processed by the company to send you post-event surveys and analyze their results.
                    </p>
                    <p>
                        <strong>If you are a professional prospect,</strong> the company is likely to send you, by all channels, its news and commercial information on the basis of its legitimate interest in promoting the events it organizes.
                    </p>
                    <p>
                        <strong>If you are an unprofessional prospect,</strong> the company may send you, by any channel, its news and commercial information if you have consented.
                    </p>
                    <p>
                        On the basis of your consent, the company may also send you, by any channel, news and commercial information concerning events organized by other entities of the HORIZON Group and / or partner services.
                    </p>
                </div>
                <div id="donnees_destination">
                    <h3 class="titre_paragraphe">4. Who is your data intended for ?</h3>
                    <p>
                        Your data is processed by the company's internal teams. In addition, only service providers and their personnel with limited authority are authorized to access your data, and this, having regard to the specific services entrusted to them and which they must carry out for the exclusive account of the company in strict compliance security and confidentiality obligations in particular.
                    </p>
                    <p>
                        With your consent, when required, your data may be transmitted to the Group entities to which the company belongs as well as to partners, in particular so that they send you information and news on the services and products that they propose.
                    </p>
                    <p>
                        When required by current regulations, the company may transmit your data to bodies and authorities legally authorized to access it (in particular the judicial and administrative authorities).
                    </p>
                </div>
                <div id="donnees_protection">
                    <h3 class="titre_paragraphe">5. How is your data protected ?</h3>
                    <p>
                        The company takes all necessary precautions to preserve the security and confidentiality of your data in order to prevent it from being distorted, damaged, disclosed and that unauthorized third parties have access to it.
                    </p>
                </div>
                <div id="donnees_droits">
                    <h3 class="titre_paragraphe">6. What are your rights ?</h3>
                    <p>
                        In accordance with the applicable regulations and under the conditions it defines, you can at any time exercise your :
                    </p>
                    <p>
                        <strong>Permission to access :</strong> you can ask the company for information on the processing of which data concerning you is subject and the copy of said data.
                    </p>
                    <p>
                        <strong>Right of rectification :</strong> you can request the correction of inaccurate data concerning you when those held by the company are incorrect or incomplete.
                    </p>
                    <p>
                        <strong>Right to erasure :</strong> you have the right to obtain from the company the erasure of your data when one of the grounds provided for by the regulations exists (uselessness of the data, withdrawal of your consent for the treatments based on the latter, etc...).
                    </p>
                    <p>
                        <strong>Right to object :</strong> you have the right to obtain from the company the erasure of your data when one of the grounds provided for by the regulations exists (uselessness of the data, withdrawal of your consent for the treatments based on the latter, etc...).
                    </p>
                    <p>
                        <strong>Right to the portability of your data :</strong> you have the right to receive the data in a usable format. This right only concerns the case where the Data is provided to the company by yourself or that it results from the use you make of its services. This data is processed on the basis of your consent or the performance of a contract.
                    </p>
                    <p>
                        <strong>Right to limitation :</strong> you can ask the company to suspend the processing of your data when one of the grounds provided for by the regulations exists (challenge to the accuracy of the data, etc...).
                    </p>
                    <p>
                        Under the conditions defined by the regulations, you also have the right to define general or specific directives relating to the fate of your data after your death. You are however informed that only the specific directives relating to data processing implemented by the Company for the purposes defined in this policy will be recorded by the company subject to its specific consent.
                    </p>
                    <p>
                        When your data is processed with your consent, you can revoke it at any time. You are however informed that the treatments implemented prior to this revocation will remain valid.
                    </p>
                    <p>
                        You can exercise your rights by contacting the Company :
                    </p>
                    <p>
                        You are also informed that in certain cases, the functionality of the sites allows you to consult and modify the data that you have communicated to the company.
                    </p>
                    <p>
                        You are informed that the company has one month from the receipt of your request to respond.
                    </p>
                    <p>
                        The company pays the utmost attention to your data, however if you consider that their processing infringes your rights you have the option of lodging a complaint with the National Commission for Data Protection (NCDP) - 3 Place de Fontenoy - TSA 80715 - 75334 PARIS CEDEX 07.
                    </p>
                </div>
                <div id="donnees_conservation">
                    <h3 class="titre_paragraphe">7. How long do we keep your data for ?</h3>
                    <p>
                        The company keeps your data for a period which does not exceed the period necessary for the purposes set out in this policy. Beyond this, your data may be archived to comply with the legal obligations to which the company is subject or deleted.
                    </p>
                    <p>
                        The data used to establish proof of a right or a contract, or kept for compliance with a legal obligation by the company are archived in accordance with the provisions in force.
                    </p>
                    <p>
                        The company takes into account the seasonality of the events it organizes.
                    </p>
                </div>
                <div id="donnees_transfert">
                    <h3 class="titre_paragraphe">8. Data transfer</h3>
                    <p>
                        For hosting and processing your data, the company favors means located on the territory of the European Union. If a data transfer to a third country to the European Union should nevertheless be considered, specific information will be delivered to you by the company.
                    </p>
                </div>
                <div id="donnees_modification">
                    <h3 class="titre_paragraphe">9. Modification of the privacy policy</h3>
                    <p>
                        Any modification by the company of this policy will be the subject of an update on the Site.
                    </p>
                    <p>
                        The User is invited to regularly consult this policy in order to be aware of any update or modification.
                    </p>
                    <p>
                        If any of the clauses of this policy is declared void or contrary to the regulations, it will be deemed unwritten but will not invalidate the other clauses of the policy.
                    </p>
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