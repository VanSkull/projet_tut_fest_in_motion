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
        
        <title>FEST'IN MOTION - Conditions générales de vente</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Accueil</a> // Conditions générales de vente</span>
        </section>
        
        <section id="corps_page">
            
            <section class="item_page titre_entete">
                <h2 id="titre_conditions_vente" class="titre_reglement">Conditions générales de vente</h2>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontal -->
            
            <section id="contenu_conditions_vente">
                <div id="presentation_agence">
                    <p>
                        Fest'In Motion<br/>
                        Société publique au capital de 12 065 euros<br/>
                        Siège social Avenue Pierre de Coubertin, 62100 Calais ;
                    </p>
                    <p>
                        N° de téléphone 01.23.45.67.89 ; Adresse du courrier électronique festinmotion@laposte.net<br/>
                        RCS Dunkerque n° J 322 159 951
                    </p>
                    <p>
                        N° individuel d'identification fiscal CS30329
                    </p>
                    <p>
                        Conditions générales de vente des produits vendus sur festinmotion.000webhostapp.com/
                    </p>
                    <p>
                        Date de dernière mise à jour 10/06/2020
                    </p>
                </div>
                <div id="vente_article1">
                    <h3 class="titre_article_vente">Article 1 - Objet</h3>
                    <p>
                        Les présentes conditions régissent les ventes par la société publique Fest'In Motion de places de spectacle.
                    </p>
                </div>
                <div id="vente_article2">
                    <h3 class="titre_article_vente">Article 2 - Prix</h3>
                    <p>
                        Les prix de nos produits sont indiqués en euros toutes taxes comprises (TVA et autres taxes applicables au jour de la commande), sauf indication contraire et hors frais de traitement et d'expédition. 
                    </p>
                    <p>
                        En cas de commande vers un pays autre que la France métropolitaine vous êtes l'importateur du ou des produits concernés. Des droits de douane ou autres taxes locales ou droits d'importation ou taxes d'état sont susceptibles d'être exigibles. Ces droits et sommes ne relèvent pas du ressort de la société publique Fest'In Motion. Ils seront à votre charge et relèvent de votre entière responsabilité, tant en termes de déclarations que de paiements aux autorités et organismes compétents de votre pays. Nous vous conseillons de vous renseigner sur ces aspects auprès de vos autorités locales.
                    </p>
                    <p>
                        Toutes les commandes quelle que soit leur origine sont payables en euros. 
                    </p>
                    <p>
                        La société publique Fest'In Motion se réserve le droit de modifier ses prix à tout moment, mais le produit sera facturé sur la base du tarif en vigueur au moment de la validation de la commande et sous réserve de disponibilité. 
                    </p>
                    <p>
                        Les produits demeurent la propriété de la société publique Fest'In Motion jusqu'au paiement complet du prix.
                    </p>
                    <p>
                        Attention : dès que vous prenez possession physiquement des produits commandés, les risques de perte ou d'endommagement des produits vous sont transférés. 
                    </p>
                </div>
                <div id="vente_article3">
                    <h3 class="titre_article_vente">Article 3 - Commandes</h3>
                    <p>
                        Vous pouvez passer commande :<br/>
                        <span class="possibilite_vente item_list">Sur Internet : <a href="inscription.php">festinmotion.000webhostapp.com/fr/inscription/</a></span><br/>
                        <span class="possibilite_vente item_list">Par téléphone au tarif de 0.10 € TTC / min du lundi au samedi de 07h00 à 21h00.</span>
                    </p>
                    <p>
                        Les informations contractuelles sont présentées en langue française et feront l'objet d'une confirmation au plus tard au moment de la validation de votre commande.
                    </p>
                    <p>
                        La société publique Fest'In Motion se réserve le droit de ne pas enregistrer un paiement, et de ne pas confirmer une commande pour quelque raison que ce soit, et plus particulièrement en cas de problème d'approvisionnement, ou en cas de difficulté concernant la commande reçue.
                    </p>
                </div>
                <div id="vente_article4">
                    <h3 class="titre_article_vente">Article 4 - Validation de votre commande</h3>
                    <p>
                        Toute commande figurant sur le site Internet <a href="index.php">festinmotion.000webhostapp.com/fr/</a> suppose l'adhésion aux présentes Conditions Générales. Toute confirmation de commande entraîne votre adhésion pleine et entière aux présentes conditions générales de vente, sans exception ni réserve.  
                    </p>
                    <p>
                        L'ensemble des données fournies et la confirmation enregistrée vaudront preuve de la transaction.
                    </p>
                    <p>
                        Vous déclarez en avoir parfaite connaissance.
                    </p>
                    <p>
                        La confirmation de commande vaudra signature et acceptation des opérations effectuées.
                    </p>
                    <p>
                        Un récapitulatif des informations de votre commande et des présentes Conditions Générales, vous sera communiqué en format PDF <em>via</em> l'adresse e-mail de confirmation de votre commande.
                    </p>
                </div>
                <div id="vente_article5">
                    <h3 class="titre_article_vente">Article 5 - Paiement</h3>
                    <p>
                        Le fait de valider votre commande implique pour vous l'obligation de payer le prix indiqué.
                    </p>
                    <p>
                        Le règlement de vos achats s'effectue par carte bancaire grâce au système sécurisé 3D Secure. 
                    </p>
                    <p>
                        Le débit de la carte n'est effectué qu'au moment de l'expédition de la commande. En cas de livraisons fractionnées, seuls les produits expédiés sont débités. 
                    </p>
                </div>
                <div id="vente_article6">
                    <h3 class="titre_article_vente">Article 6 - Rétractation</h3>
                    <p>
                        Conformément aux dispositions de l'article L.121-21 du Code de la Consommation, vous disposez d'un délai de rétractation de 14 jours à compter de la réception de vos produits pour exercer votre droit de rétraction sans avoir à justifier de motifs ni à payer de pénalité.
                    </p>
                    <p>
                        Les retours sont à effectuer dans leur état d'origine et complets (emballage, accessoires, notice). Dans ce cadre, votre responsabilité est engagée. Tout dommage subi par le produit à cette occasion peut être de nature à faire échec au droit de rétractation. 
                    </p>
                    <p>
                        Les frais de retour sont gratuits. 
                    </p>
                    <p>
                        En cas d'exercice du droit de rétractation, la société publique Fest'In Motion procédera au remboursement des sommes versées, dans un délai de 14 jours suivant la notification de votre demande et via le même moyen de paiement que celui utilisé lors de la commande.
                    </p>
                    <p id="titre_exception_retractation">EXCEPTIONS AU DROIT DE RÉTRACTATION</p>
                    <p>
                        Conformément aux dispositions de l'article L.121-21-8 du Code de la Consommation, le droit de rétractation ne s'applique pas à :<br/>
                        <span class="item_list exception_retractation">La fourniture de services pleinement exécutés avant la fin du délai de rétractation et dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</span>
                        <span class="item_list exception_retractation">La fourniture de biens ou de services dont le prix dépend de fluctuations sur le marché financier échappant au contrôle du professionnel et susceptibles de se produire pendant le délai de rétractation.</span>
                        <span class="item_list exception_retractation">La fourniture de biens confectionnés selon les spécifications du consommateur ou nettement personnalisés.</span>
                        <span class="item_list exception_retractation">La fourniture de biens susceptibles de se détériorer ou de se périmer rapidement.</span>
                        <span class="item_list exception_retractation">La fourniture de biens qui ont été descellés par le consommateur après la livraison et qui ne peuvent être renvoyés pour des raisons d'hygiène ou de protection de la santé.</span>
                        <span class="item_list exception_retractation">La fourniture de biens qui, après avoir été livrés et de par leur nature, sont mélangés de manière indissociable avec d'autres articles.</span>
                        <span class="item_list exception_retractation">La fourniture de boissons alcoolisées dont la livraison est différée au-delà de trente jours et dont la valeur convenue à la conclusion du contrat dépend de fluctuations sur le marché échappant au contrôle du professionnel.</span>
                        <span class="item_list exception_retractation">La fourniture d'enregistrements audio ou vidéo ou de logiciels informatiques lorsqu'ils ont été descellés par le consommateur après la livraison.</span>
                        <span class="item_list exception_retractation">La fourniture d'un journal, d'un périodique ou d'un magazine, sauf pour les contrats d'abonnement à ces publications.</span>
                        <span class="item_list exception_retractation">Les transactions conclues lors d'une enchère publique.</span>
                        <span class="item_list exception_retractation">La fourniture d'un contenu numérique non fourni sur un support matériel dont l'exécution a commencé après accord préalable exprès du consommateur et renoncement exprès à son droit de rétractation.</span>
                    </p>
                </div>
                <div id="vente_article7">
                    <h3 class="titre_article_vente">Article 7 - Disponibilité</h3>
                    <p>
                        Nos produits sont proposés tant qu'ils sont visibles sur le site <a href="index.php">festinmotion.000webhostapp.com/fr/</a> et dans la limite des stocks disponibles. Pour les produits non stockés, nos offres sont valables sous réserve de disponibilité chez nos fournisseurs.<br/>
                        En cas d'indisponibilité de produit après passation de votre commande, nous vous en informerons par mail. Votre commande sera automatiquement annulée et aucun débit bancaire ne sera effectué.
                    </p>
                    <p>
                        En outre, le site Internet <a href="index.php">festinmotion.000webhostapp.com/fr/</a> n'a pas vocation à vendre ses produits en quantités importantes. Par conséquent la société publique Fest'In Motion se réserve le droit de refuser les commandes de 8 articles identiques.
                    </p>
                </div>
                <div id="vente_article8">
                    <h3 class="titre_article_vente">Article 8 - Livraison</h3>
                    <p>
                        Les produits sont livrés à l'adresse de livraison indiquée au cours du processus de commande, dans le délai indiqué sur la page de validation de la commande.
                    </p>
                    <p>
                        En cas de retard d'expédition, un mail vous sera adressé pour vous informer d'une éventuelle conséquence sur le délai de livraison qui vous a été indiqué.
                    </p>
                    <p>
                        Conformément aux dispositions légales, en cas de retard de livraison, vous bénéficiez de la possibilité d'annuler la commande dans les conditions et modalités définies à l'article L 138-2 du Code de la Consommation. Si entre temps vous recevez le produit nous procéderons à son remboursement et aux frais d'acheminement dans les conditions de l'article L 138-3 du Code de la Consommation.
                    </p>
                    <p>
                        En cas de livraisons par un transporteur, la société publique Fest'In Motion ne peut être tenue pour responsable de retard de livraison dû exclusivement à une indisponibilité du client après plusieurs propositions de rendez-vous.
                    </p>
                </div>
                <div id="vente_article9">
                    <h3 class="titre_article_vente">Article 9 - Garantie</h3>
                    <p>
                        Tous nos produits bénéficient de la garantie légale de conformité et de la garantie des vices cachés, prévues par les articles 1641 et suivants du Code civil. En cas de non-conformité d'un produit vendu, il pourra être retourné, échangé ou remboursé.
                    </p>
                    <p>
                        Toutes les réclamations, demandes d'échange ou de remboursement doivent s'effectuer par mail dans le délai de 30 jours de la livraison.
                    </p>
                    <p>
                        Les produits doivent nous être retournés dans l'état dans lequel vous les avez reçus avec l'ensemble des éléments (accessoires, emballage, notice...). Les frais d'envoi vous seront remboursés sur la base du tarif facturé et les frais de retour vous seront remboursés sur présentation des justificatifs.
                    </p>
                    <p>
                        Les dispositions de cet Article ne vous empêchent pas de bénéficier du droit de rétractation prévu à l'article 6.
                    </p>
                </div>
                <div id="vente_article10">
                    <h3 class="titre_article_vente">Article 10 - Responsabilité</h3>
                    <p>
                        Les produits proposés sont conformes à la législation française en vigueur. La responsabilité de la société publique Fest'In Motion ne saurait être engagée en cas de non-respect de la législation du pays où le produit est livré. Il vous appartient de vérifier auprès des autorités locales les possibilités d'importation ou d'utilisation des produits ou services que vous envisagez de commander.
                    </p>
                    <p>
                        Par ailleurs, la société publique Fest'In Motion ne saurait être tenue pour responsable des dommages résultant d'une mauvaise utilisation du produit acheté.
                    </p>
                    <p>
                        Enfin la responsabilité de la société publique Fest'In Motion ne saurait être engagée pour tous les inconvénients ou dommages inhérents à l'utilisation du réseau Internet, notamment une rupture de service, une intrusion extérieure ou la présence de virus informatiques.
                    </p>
                </div>
                <div id="vente_article11">
                    <h3 class="titre_article_vente">Article 11 - Droit applicable en cas de litiges</h3>
                    <p>
                        La langue du présent contrat est la langue française. Les présentes conditions de vente sont soumises à la loi française. En cas de litige, les tribunaux français seront les seuls compétents.
                    </p>
                </div>
                <div id="vente_article12">
                    <h3 class="titre_article_vente">Article 12 - Propriété intellectuelle</h3>
                    <p>
                        Tous les éléments du site <a href="index.php">festinmotion.000webhostapp.com/fr/</a> sont et restent la propriété intellectuelle et exclusive de la société publique Fest'In Motion. Nul n'est autorisé à reproduire, exploiter, rediffuser, ou utiliser à quelques titres que ce soit, même partiellement, des éléments du site qu'ils soient logiciels, visuels ou sonores. Tout lien simple ou par hypertexte est strictement interdit sans un accord écrit exprès de la société publique Fest'In Motion.
                    </p>
                </div>
                <div id="vente_article13">
                    <h3 class="titre_article_vente">Article 13 - Données personnelles</h3>
                    <p>
                        La société publique Fest'In Motion se réserve le droit de collecter les informations nominatives et les données personnelles vous concernant. Elles sont nécessaires à la gestion de votre commande, ainsi qu'à l'amélioration des services et des informations que nous vous adressons.
                    </p>
                    <p>
                        Elles peuvent aussi être transmises aux sociétés qui contribuent à ces relations, telles que celles chargées de l'exécution des services et commandes pour leur gestion, exécution, traitement et paiement.
                    </p>
                    <p>
                        Ces informations et données sont également conservées à des fins de sécurité, afin de respecter les obligations légales et réglementaires.
                    </p>
                    <p>
                        Conformément à la loi du 6 janvier 1978, vous disposez d'un droit d'accès, de rectification et d'opposition aux informations nominatives et aux données personnelles vous concernant, directement sur le site Internet.
                    </p>
                </div>
                <div id="vente_article14">
                    <h3 class="titre_article_vente">Article 14 - Archivage Preuve</h3>
                    <p>
                        La société publique Fest'In Motion archivera les bons de commandes et les factures sur un support fiable et durable constituant une copie fidèle conformément aux dispositions de l'article 1348 du Code civil.
                    </p>
                    <p>
                        Les registres informatisés de la société publique Fest'In Motion seront considérés par toutes les parties concernées comme preuve des communications, commandes, paiements et transactions intervenus entre les parties.
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