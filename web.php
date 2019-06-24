<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>NL Technologie</title>
    <!-- Stylesheets -->
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link href="css/responsive.css" rel="stylesheet">

    <link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
    <link rel="icon" href="images/favicon.png" type="image/x-icon">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/slide.css">
    <!-- Responsive -->
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
    <!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
    <!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>
<style>
    .light div {
        position: relative;
    }
    .light div::before {
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 2;
        display: block;
        content: '';
        width: 0;
        height: 0;
        background: rgba(255,255,255,.2);
        border-radius: 100%;
        -webkit-transform: translate(-50%, -50%);
        transform: translate(-50%, -50%);
        opacity: 0;
    }
    .light div:hover::before {
        -webkit-animation: circle .75s;
        animation: circle .75s;
    }
    @-webkit-keyframes circle {
        0% {
            opacity: 1;
        }
        40% {
            opacity: 1;
        }
        100% {
            width: 200%;
            height: 200%;
            opacity: 0;
        }
    }
    @keyframes circle {
        0% {
            opacity: 1;
        }
        40% {
            opacity: 1;
        }
        100% {
            width: 200%;
            height: 200%;
            opacity: 0;
        }
    }
</style>
<body>

<div class="page-wrapper">

    <!-- Main Header-->
    <?php
    include('header.php');
    ?>
    <!--End Main Header -->
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/service/web/02.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Services Web</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <section>
        <div class="container-fluid">
            <div class="row" style="background:#34beaf; padding: 50px 50px">
                <div id="ninja-slider">
                    <div class="slider-inner">
                        <ul>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION.png" />
                                    <h3 style="color: #070718; text-shadow: 3px 2px 5px #FFFFFF;">Site vitrine</h3>
                                    <p>Présente l'entreprise ou la marque ainsi
                                        que son activité. La forme est libre et ce
                                        type de site possède généralement une
                                        mise en forme originale.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION12.png" />
                                    <h3 style="color: #3e5082; text-shadow: 3px 2px 5px #FFFFFF;">Site catalogue</h3>
                                    <p>Présente l'entreprise ou la marque
                                        ainsi que son activité et tous ses
                                        produits détaillés</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION13.png" />
                                    <h3 style="color: #fc7344; text-shadow: 3px 2px 5px #FFFFFF;">site informatif</h3>
                                    <p>Regroupe des données sur un sujet
                                        commun.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION14.png" />
                                    <h3 style="color: #e889af; text-shadow: 3px 2px 5px #FFFFFF;">site E-commerce</h3>
                                    <p>Boutique en ligne dynamique avec une gestion des contenu et
                                        l’intégration d’un paiement
                                        sécurisé.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION15.png" />
                                    <h3 style="color: #004079; text-shadow: 3px 2px 5px #FFFFFF;">site Institutionnel</h3>
                                    <p>Décrit une organisation, ses activités et ses valeurs. Le site institutionnel
                                        donne toutes les informations pratiques nécessaires à ses clients ou à ses bénéficiaires.
                                        Il permet également de mettre en relation les acteurs économiques comme les collectivités
                                        et les associations.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION16.png" />
                                    <h3 style="color: #4f8624; text-shadow: 3px 2px 5px #FFFFFF;">L'Intranet</h3>
                                    <p>Accessible uniquement par le personnel d'une même entreprise ou d'une direction,
                                        l’intranet met à disposition et partage des informations professionnelles.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/web/CREATION17.png" />
                                    <h3 style="color: #eef30b; text-shadow: 3px 2px 5px #FFFFFF;">Application Web</h3>
                                    <p>Une application web est un programme s’exécutant directement dans un navigateur web.
                                        Consultable en ligne, il n’est pas nécessaire d’installer un logiciel sur votre ordinateur,
                                        pour accéder à l’application il faut cependant avoir une connexion à Internet.</p>
                                </div>
                            </li>
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
                <p data-aos="fade-right" style="text-align: center; color: white;font-weight: bold">
                    Toutes les entreprises convoitent le site internet parfait, celui qui
                    fera augmenter leurs conversions et exploser leur popularité en ligne.<br>
                    Nous vous rassurons avec un peu d’investissement, il est possible de
                    concevoir un site web ou une application web à la hauteur de vos attentes !
                </p>
            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div  data-aos="fade-right"
                          data-aos-offset="300"
                          data-aos-easing="ease-in-sine" class="col-md-6">
                          <div class="light">
                            <div><img src="images/service/web/CREATION1.png"></div>
                            </div>  
                        
                    </div>
                    <div  class="col-md-6"">
                        <h2 data-aos="flip-right"
                            data-aos-easing="linear"
                            data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">Conception Site ou application Web</h2>
                        <p data-aos="fade-down"
                           data-aos-easing="linear"
                           data-aos-duration="1000" style="text-align: justify; margin-top: 10px;color: black">
                            Nous pouvons réaliser la conception de votre site ou application web c'est à dire
                        l’architecture interactionnelle, l’organisation des pages, l’arborescence et
                        la navigation dans un site web.
                        Nous pouvons donc tenir en compte ds contraintes spécifiques du support internet,
                        notamment en termes d'ergonmie, 'utilisabilité et d'accessibilité.
                        </p>
                        <p data-aos="fade-down"
                           data-aos-easing="linear"
                           data-aos-duration="1000" style="color: black">
                            - Maquette Site Web <br>
                           - Maquette Application Web
                        </p>
                        <div data-aos="fade-left"
                             style="text-align: center; margin-top: 20px">
                            <a  href="contact.php"><button class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row" style="background: #5bc0de; padding: 80px 80px ; ">
                 <div>
                    <div  class="col-md-6"">
                        <h2  data-aos="zoom-in"
                             data-aos-easing="linear"
                             data-aos-duration="700" style="font-size: 20px; text-align: center; color: #dfa60a; border-left: 6px solid #d2b871;background-color: lightgrey;font-weight: bold">Développement Site Web</h2>
                        <p data-aos="fade-down"
                           data-aos-easing="linear"
                           data-aos-duration="800" style="text-align: justify; margin-top: 10px; color: black">
                            Nous développons votre site web en fonction de votre activité et vos besoins
                            selon le cahier de charge.
                        </p>
                        <p data-aos="fade-up"
                           data-aos-anchor-placement="center-center"
                           data-aos-duration="700" style="color: black">
                            - Les sites vitrines<br>
                            - Les sites e-commerce<br>
                            - Les sites institutionnels<br>
                            - Les outils web (avec les intranets, extranets, Ged, RSE ...)<br>
                            - Les blogs
                        </p>
                        <div data-aos="zoom-in" style="text-align: center; margin-top: 20px">
                            <a href="contact.php"><button class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                        </div>
                    </div>
                    <div data-aos="flip-left"
                         data-aos-easing="ease-out-cubic"
                         data-aos-duration="2000" class="col-md-6"">
                        <div class="light">
                            <div><img src="images/service/web/CREATION2.png"></div>
                            </div>  
                    </div>
                 </div>
            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div data-aos="fade-right"
                         data-aos-offset="300"
                         data-aos-easing="ease-in-sine" class="col-md-6"">
                    <div class="light">
                            <div><img src="images/service/web/CREATION4.png"></div>
                            </div>  
                </div>
                <div  class="col-md-6"">
                    <h2 data-aos="zoom-in-left"
                        data-aos-easing="linear"
                        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold"">Développement application Web</h2>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="text-align: justify; margin-top: 10px; color: black;">
                    Une application web est un logiciel accessible depuis un navigateur web, pouvant fonctionner sur un ordinateur.
                     Nous pouvons vous fournir l'application web prsonnalisée qui correspond à vos besoin.
                    <p data-aos="fade-right"
                        data-aos-offset="300"
                        data-aos-easing="ease-in-sine" style="color: black;">
                        - Application Web statique / Application web dynamique <br>
                        - Application web de type e-shop ou e-commerce <br>
                        - Application web portail / Application web animée<br>
                        - Application web de type « content manager »
                    </p>
                    <div data-aos="zoom-in-left" style="text-align: center; margin-top: 20px">
                        <a href="contact.php"><button class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                    </div>
                </div>
            </div>
            </div>

        </div>
    </section>
    <!--End Services Section-->
<!--Call To Action Section-->
    <section class="call-to-action-section" style="background-image:url(images/background/1.jpg)">
        <div class="auto-container">
            <h2 data-aos="fade-up-right"> Nous sommes passionnés par notre travail <span  data-aos="fade-up-left" > une service à moindre coût </span></h2>
            <div class="number-box clearfix">
                <div class="pull-left">
                    <div data-aos="fade-down-right" class="number">+261 34 58 880 22</div>
                </div>
                <div class="pull-right">
                    <a href="contact.php" class="theme-btn btn-style-three" data-aos="fade-down-left" >Contact</a>
                </div>
            </div>
        </div>
    </section>
    <!--End Call To Action Section-->
    <!--Main Footer-->
    <?php
    include('footer.php');
    ?>
    <!--End Main Footer-->

</div>
<!--End pagewrapper-->

<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target="html"><span class="fa fa-arrow-up"></span></div>

<script src="js/jquery.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/jquery.fancybox.pack.js"></script>
<script src="js/jquery.fancybox-media.js"></script>
<script src="js/owl.js"></script>
<script src="js/wow.js"></script>
<script src="js/appear.js"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<script type="text/javascript" src="js/slide.js"></script>
</body>
</html>