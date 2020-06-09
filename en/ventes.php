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
        
        <title>FEST'IN MOTION - Terms of Sales</title>
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
            <span id="chemin" class="item_page"><a href="index.php"><img src="../images/home.png" alt="Icône accueil" id="icon_accueil"/> Home</a> // Terms of Sales</span>
        </section>
        
        <section id="corps_page">
            
            <section class="item_page titre_entete">
                <h2 id="titre_conditions_vente" class="titre_reglement">Terms of Sales</h2>
            </section>
            
            <div id="trait"><hr></div>
            <!-- Ligne horizontal -->
            
            <section id="contenu_conditions_vente">
                <div id="presentation_agence">
                    <p>
                        Fest'In Motion<br/>
                        Public company with a capital of 12,065 euros<br/>
                        Headquarters Avenue Pierre de Coubertin, 62100 Calais;
                    </p>
                    <p>
                        Telephone number 01.23.45.67.89 ; E-mail address festinmotion@laposte.net<br/>
                        RCS Dunkirk n ° J 322 159 951
                    </p>
                    <p>
                        Individual tax identification number CS30329
                    </p>
                    <p>
                        General conditions of sale of products sold on festinmotion.000webhostapp.com/
                    </p>
                    <p>
                        Date of last update 10/06/2020
                    </p>
                </div>
                <div id="vente_article1">
                    <h3 class="titre_article_vente">Article 1 - Object</h3>
                    <p>
                        These conditions govern the sales by the public company Fest'In Motion of show seats.
                    </p>
                </div>
                <div id="vente_article2">
                    <h3 class="titre_article_vente">Article 2 - Price</h3>
                    <p>
                        The prices of our products are indicated in euros all taxes included (VAT and other taxes applicable on the day of the order), unless otherwise indicated and excluding processing and shipping costs. 
                    </p>
                    <p>
                        In the case of an order to a country other than mainland France, you are the importer of the product (s) concerned. Customs duties or other local taxes or import duties or state taxes may be payable. These rights and sums do not fall within the competence of the public company Fest'In Motion. They will be at your expense and are your sole responsibility, both in terms of declarations and payments to the competent authorities and bodies in your country. We advise you to find out about these aspects from your local authorities.
                    </p>
                    <p>
                        All orders, whatever their origin, are payable in euros.
                    </p>
                    <p>
                        The public company Fest'In Motion reserves the right to modify its prices at any time, but the product will be invoiced on the basis of the tariff in force at the time of the validation of the order and subject to availability.
                    </p>
                    <p>
                        The products remain the property of the public company Fest'In Motion until full payment of the price.
                    </p>
                    <p>
                        Warning : as soon as you take physical possession of the products ordered, the risk of loss or damage to the products is transferred to you. 
                    </p>
                </div>
                <div id="vente_article3">
                    <h3 class="titre_article_vente">Article 3 - Orders</h3>
                    <p>
                        You can order :<br/>
                        <span class="possibilite_vente item_list">On the Internet : <a href="inscription.php">festinmotion.000webhostapp.com/en/inscription/</a></span><br/>
                        <span class="possibilite_vente item_list">By phone at a rate of 0.10 € TTC / min from Monday to Saturday from 07:00 to 21:00.</span>
                    </p>
                    <p>
                        The contractual information is presented in French and will be confirmed at the latest when confirming your order.
                    </p>
                    <p>
                        The public company Fest'In Motion reserves the right not to record a payment, and not to confirm an order for any reason whatsoever, and more particularly in the event of a supply problem, or in the event of a difficulty concerning the order received.
                    </p>
                </div>
                <div id="vente_article4">
                    <h3 class="titre_article_vente">Article 4 - Validation of your order</h3>
                    <p>
                        Any order appearing on the website <a href="index.php">festinmotion.000webhostapp.com/fr/</a> implies acceptance of these General Conditions. Any order confirmation entails your full acceptance of these general conditions of sale, without exception or reservation.  
                    </p>
                    <p>
                        All the data provided and the confirmation recorded will constitute proof of the transaction.
                    </p>
                    <p>
                        You declare that you are fully aware of it.
                    </p>
                    <p>
                        The order confirmation will be worth signature and acceptance of the operations carried out.
                    </p>
                    <p>
                        A summary of your order information and these General Conditions will be sent to you in PDF format <em> via </em> the email address confirming your order.
                    </p>
                </div>
                <div id="vente_article5">
                    <h3 class="titre_article_vente">Article 5 - Payment</h3>
                    <p>
                        The fact of validating your order implies for you the obligation to pay the indicated price.
                    </p>
                    <p>
                        Payment for your purchases is made by bank card using the 3D Secure secure system.
                    </p>
                    <p>
                        The debit of the card is made only at the time of dispatch of the order. In case of split deliveries, only the products shipped are debited.
                    </p>
                </div>
                <div id="vente_article6">
                    <h3 class="titre_article_vente">Article 6 - Withdrawal</h3>
                    <p>
                        In accordance with the provisions of article L.121-21 of the Consumer Code, you have a withdrawal period of 14 days from the receipt of your products to exercise your right of withdrawal without having to justify reasons or to pay penalty.
                    </p>
                    <p>
                        Returns must be made in their original condition and complete (packaging, accessories, instructions). In this context, your responsibility is engaged. Any damage suffered by the product on this occasion may be such as to defeat the right of withdrawal.
                    </p>
                    <p>
                        Return costs are free. 
                    </p>
                    <p>
                        In the event of exercise of the right of withdrawal, the public company Fest'In Motion will reimburse the sums paid, within 14 days of the notification of your request and via the same means of payment as that used when ordering .
                    </p>
                    <p id="titre_exception_retractation">EXCEPTIONS TO THE RIGHT OF WITHDRAWAL</p>
                    <p>
                        In accordance with the provisions of article L.121-21-8 of the Consumer Code, the right of withdrawal does not apply to :<br/>
                        <span class="item_list exception_retractation">The provision of services fully executed before the end of the withdrawal period and whose execution started after the express prior agreement of the consumer and express waiver of his right of withdrawal.</span>
                        <span class="item_list exception_retractation">The supply of goods or services whose price depends on fluctuations on the financial market beyond the control of the professional and likely to occur during the withdrawal period.</span>
                        <span class="item_list exception_retractation">The supply of goods made according to the consumer's specifications or clearly personalized.</span>
                        <span class="item_list exception_retractation">The supply of goods likely to deteriorate or expire quickly.</span>
                        <span class="item_list exception_retractation">The supply of goods which have been unsealed by the consumer after delivery and which cannot be returned for reasons of hygiene or health protection.</span>
                        <span class="item_list exception_retractation">The supply of goods which, after having been delivered and by their nature, are inseparably mixed with other articles.</span>
                        <span class="item_list exception_retractation">The supply of alcoholic beverages whose delivery is deferred beyond thirty days and whose value agreed at the conclusion of the contract depends on fluctuations on the market beyond the control of the professional.</span>
                        <span class="item_list exception_retractation">The supply of audio or video recordings or computer software when they have been unsealed by the consumer after delivery.</span>
                        <span class="item_list exception_retractation">The supply of a newspaper, periodical or magazine, except for subscription contracts to these publications.</span>
                        <span class="item_list exception_retractation">Transactions concluded during a public auction.</span>
                        <span class="item_list exception_retractation">The supply of digital content not supplied on a material medium, the execution of which has started after the express prior agreement of the consumer and express waiver of his right of withdrawal.</span>
                    </p>
                </div>
                <div id="vente_article7">
                    <h3 class="titre_article_vente">Article 7 - Availability</h3>
                    <p>
                        Our products are offered as long as they are visible on the site <a href="index.php">festinmotion.000webhostapp.com/en/</a> and while stocks last. For non-stocked products, our offers are valid subject to availability from our suppliers.<br/>
                        In case of unavailability of product after placing your order, we will notify you by email. Your order will be automatically canceled and no bank debit will be made.
                    </p>
                    <p>
                        In addition, the website <a href="index.php">festinmotion.000webhostapp.com/en/</a> is not intended to sell its products in large quantities. Consequently, the public company Fest'In Motion reserves the right to refuse orders for 8 identical items.
                    </p>
                </div>
                <div id="vente_article8">
                    <h3 class="titre_article_vente">Article 8 - Delivery</h3>
                    <p>
                        The products are delivered to the delivery address indicated during the ordering process, within the period indicated on the validation page of the order.
                    </p>
                    <p>
                        In the event of delay in shipment, an email will be sent to you to inform you of a possible consequence on the delivery time which has been indicated to you.
                    </p>
                    <p>
                        In accordance with legal provisions, in the event of late delivery, you have the possibility of canceling the order under the terms and conditions defined in article L 138-2 of the Consumer Code. If in the meantime you receive the product, we will reimburse it and transport costs under the conditions of article L 138-3 of the Consumer Code.
                    </p>
                    <p>
                        In the event of deliveries by a carrier, the public company Fest'In Motion cannot be held responsible for late delivery due exclusively to the unavailability of the customer after several proposals for meetings.
                    </p>
                </div>
                <div id="vente_article9">
                    <h3 class="titre_article_vente">Article 9 - Guarantee</h3>
                    <p>
                        All our products benefit from the legal guarantee of conformity and the guarantee of hidden defects, provided for in articles 1641 and following of the Civil Code. In the event of non-conformity of a product sold, it may be returned, exchanged or refunded.
                    </p>
                    <p>
                        All complaints, requests for exchange or reimbursement must be made by email within 30 days of delivery.
                    </p>
                    <p>
                        The products must be returned to us in the condition in which you received them with all of the elements (accessories, packaging, instructions ...). Shipping costs will be reimbursed to you on the basis of the invoiced rate and return costs will be reimbursed upon presentation of supporting documents.
                    </p>
                    <p>
                        The provisions of this Article do not prevent you from benefiting from the right of withdrawal provided for in Article 6.
                    </p>
                </div>
                <div id="vente_article10">
                    <h3 class="titre_article_vente">Article 10 - Responsibility</h3>
                    <p>
                        The products offered comply with current French legislation. The responsibility of the public company Fest'In Motion cannot be engaged in the event of non-compliance with the legislation of the country where the product is delivered. It is your responsibility to check with local authorities the possibilities of importing or using the products or services that you plan to order.
                    </p>
                    <p>
                        In addition, the public company Fest'In Motion cannot be held liable for damages resulting from improper use of the product purchased.
                    </p>
                    <p>
                        Finally, the responsibility of the public company Fest'In Motion cannot be engaged for any inconvenience or damage inherent in the use of the Internet, in particular a break in service, an external intrusion or the presence of computer viruses.
                    </p>
                </div>
                <div id="vente_article11">
                    <h3 class="titre_article_vente">Article 11 - Applicable law in case of disputes</h3>
                    <p>
                        The language of this contract is French. These conditions of sale are subject to French law. In the event of a dispute, the French courts will have sole jurisdiction.
                    </p>
                </div>
                <div id="vente_article12">
                    <h3 class="titre_article_vente">Article 12 - Intellectual property</h3>
                    <p>
                        All elements of the site <a href="index.php">festinmotion.000webhostapp.com/en/</a> are and remain the intellectual and exclusive property of the public company Fest'In Motion. No one is authorized to reproduce, exploit, redistribute, or use for any purpose whatsoever, even partially, elements of the site whether software, visual or audio. Any simple link or hypertext is strictly prohibited without the express written agreement of the public company Fest'In Motion.
                    </p>
                </div>
                <div id="vente_article13">
                    <h3 class="titre_article_vente">Article 13 - Personal data</h3>
                    <p>
                        The public company Fest'In Motion reserves the right to collect nominative information and personal data concerning you. They are necessary for the management of your order, as well as for the improvement of the services and information that we send to you.
                    </p>
                    <p>
                        They can also be sent to companies that contribute to these relationships, such as those responsible for the execution of services and orders for their management, execution, processing and payment.
                    </p>
                    <p>
                        This information and data is also kept for security purposes, in order to comply with legal and regulatory obligations.
                    </p>
                    <p>
                        In accordance with the law of January 6, 1978, you have the right to access, rectify and oppose personal information and personal data concerning you, directly on the website.
                    </p>
                </div>
                <div id="vente_article14">
                    <h3 class="titre_article_vente">Article 14 - Evidence Archiving</h3>
                    <p>
                        The public company Fest'In Motion will archive purchase orders and invoices on a reliable and durable medium constituting a faithful copy in accordance with the provisions of article 1348 of the Civil Code.
                    </p>
                    <p>
                        The computerized registers of the public company Fest'In Motion will be considered by all parties concerned as proof of communications, orders, payments and transactions between the parties.
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