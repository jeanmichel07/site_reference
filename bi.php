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
    <section class="page-title" style="background-image:url(images/service/bi/BI.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Services BI</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <section>
        <div class="container-fluid">
            <div class="row" style="background:#34beaf;padding: 50px 50px ">
                <div id="ninja-slider">
                    <div class="slider-inner">
                        <ul>
                            <li>
                                <div class="content">
                                    <img src="images/service/bi/1.png" />
                                    <h3 style="color:#fbc72e ; text-shadow: 3px 2px 5px #FFFFFF;">Collecte des données</h3>
                                    <p>collecte des données pour mieux gérer l'entreprise</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/bi/2.png" />
                                    <h3 style="color: #e00f78; text-shadow: 3px 2px 5px #FFFFFF;">consolide vos taches</h3>
                                    <p>Bi rend plus stable l'organisation de votre entreprise</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/bi/3.png" />
                                    <h3 style="color: #272b69; text-shadow: 3px 2px 5px #FFFFFF;">restitue tous les travaux</h3>
                                    <p>BI reconstitue avec une manière rapide, souple et pertinente les travaux dans l'entreprise </p>
                                </div>
                            </li>
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
                <p data-aos="fade-right" style="text-align: center; color: white; margin-bottom: 70px;font-weight: bold">
                    La BI est l'ensemble des moyens, des outils et méthodes qui permettent de collecter, intégrer,
                    distribuer et de restituer les informations en vue d'offrir une aide à la décision
                </p>
            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div  data-aos="fade-right"
                          data-aos-offset="300"
                          data-aos-easing="ease-in-sine" class="col-md-6">
                        <div class="light">
                            <div><img src="images/service/bi/bi1.jpg"></div>
                        </div>
                    </div>
                    <div  class="col-md-6"">
                    <h2 data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold"">BI: BUSINESS INTELIGENCE</h2>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="text-align: justify; margin-top: 10px;color: black">
                        Le Business Intelligence (BI) n’est pas une nouvelle technologie. Il s’agit plutôt d’une solution complète d’analyse des données pour les entreprises, qui comprend le traitement analytique en ligne, l’exploration de données, de processus, la gestion de la performance, l’analyse comparative, prédictive
                        et le reporting le plus important.
                    </p>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="color: black; text-align: justify">
                        Les petites entreprises comme les grandes entreprises font face aux mêmes défis: comment obtenir
                        de meilleures informations à partir des données volumineuses, améliorer l’expérience client et optimiser la productivité des employés et un budget plus serré. Par conséquent, un outil d’aide à la décision automatisé et facile à utiliser est d’une grande importance pour les entreprises afin de donner un sens aux grandes données complexes.
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
                     data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">CARACTERISTIQUE DU BUSINESS INTELIGENCE</h2>
                <p  style="text-align: justify; margin-top: 10px; color:#000000;">
                    <div data-aos="fade-right">Analyse ad hoc</div>
                    <div data-aos="fade-left">Requête ad hoc</div>
                    <div data-aos="fade-right">Rapports ad hoc</div> 
                    <div data-aos="fade-left">Benchmarking Budgétisation et prévision</div> 
                    <div data-aos="fade-right">Tableau de bord</div>
                    <div data-aos="fade-left">L’analyse des données </div> 
                    <div data-aos="fade-right">Visualisation de données</div> 
                    <div data-aos="fade-left">Indicateurs de performance clés OLAP</div> 
                    <div data-aos="fade-right">Indicateurs de performance</div> 
                    <div data-aos="fade-left">Analyses prédictives</div> 
                    <div data-aos="fade-right">Analyse de rentabilité </div>
                    <div data-aos="fade-left">Planification stratégique</div> 
                    <div data-aos="fade-right">Indicateurs de tendance</div>

                </p>
                <div data-aos="zoom-in" style="text-align: center; margin-top: 20px">
                    <a href="contact.php"><button class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                </div>
            </div>
            <div data-aos="flip-left"
                 data-aos-easing="ease-out-cubic"
                 data-aos-duration="2000" class="col-md-6">
            <div class="light">
                <div><img src="images/service/bi/bi2.png"></div>
            </div>     
            
        </div>
</div>
</div>
<div class="row" style="background: #f8f8f8;padding: 70px 70px">
    <div class="col-md-12">
        <div data-aos="fade-right"
             data-aos-offset="300"
             data-aos-easing="ease-in-sine" class="col-md-6"">
             <div class="light">
                <div><img src="images/service/bi/BI3.png"></div>
            </div>  
    </div>
    <div  class="col-md-6"">
    <h2 data-aos="zoom-in-left"
        data-aos-easing="linear"
        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">OUTILS DE BUSINESS INTELLIGENCE</h2>
    <p data-aos="fade-down"
       data-aos-easing="linear"
       data-aos-duration="1000" style="text-align: justify; margin-top: 10px; color: black;">
        - TDomo,<br>
        - Microsoft Power BI,<br>
        - Google Data Studio 360,<br>
        - MicroStrategy Analytics,<br>
        - Qlik, <br>
        - Tableau de synthèse.
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