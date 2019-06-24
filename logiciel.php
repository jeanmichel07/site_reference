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
    <section class="page-title" style="background-image:url(images/service/log/logiciel.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Services Logiciel</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    <section>
        <div class="container-fluid">
            <div class="row" style="background:#34beaf;padding: 50px 50px">
                <div id="ninja-slider">
                    <div class="slider-inner">
                        <ul>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/1.png" />
                                    <h3 style="color: #698f96; text-shadow: 3px 2px 5px #FFFFFF;">Adapté</h3>
                                    <p>Votre logiciel spécifique est adapté à votre organisation et à vos contraintes
                                        métiers sans avoir un surplus de fonctionnalités qui ne vous servent pas.
                                        Une étude de vos besoins est réalisée avant toute proposition de développement spécifique.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/2.png" />
                                    <h3 style="color: #ffc83e; text-shadow: 3px 2px 5px #FFFFFF;">Simple</h3>
                                    <p>L’utilisation de votre logiciel est alors simplifiée avec une interface épurée et claire.
                                        Chaque utilisateur a accès aux fonctionnalités qui le concernent grâce à une gestion des
                                        droits par utilisateur ou groupe d'utilisateurs.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/3.png" />
                                    <h3 style="color: #fc611f; text-shadow: 3px 2px 5px #FFFFFF;">Evolutif</h3>
                                    <p>En plus de la maintenance corrective, nous pouvons mettre en place une maintenance
                                        évolutive (contrat TMA) en fonction des besoins de votre entreprise afin de vous
                                        accompagner tout au long de la croissance de votre entreprise et de répondre à ses nouveaux besoins.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/4.png" />
                                    <h3 style="color: #bc5228; text-shadow: 3px 2px 5px #FFFFFF;">Valorisant</h3>
                                    <p>Grâce à cette nouvelle solution logicielle, vous valorisez votre entreprise et votre
                                        savoir-faire à travers un échange de connaissances au sein de toute votre entreprise.
                                        Tout est centralisé depuis un outil unique.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/5.png" />
                                    <h3 style="color: #3d8cae; text-shadow: 3px 2px 5px #FFFFFF;">Optimisé</h3>
                                    <p>Notre équipe est à l’écoute de vos utilisateurs, impliqués dès la conception du logiciel,
                                        permettant de rentrer dans le coeur de votre activité et d’avoir une meilleure compréhension
                                        de votre métier et donc de vos besoins.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/6.png" />
                                    <h3 style="color: #cf403e; text-shadow: 3px 2px 5px #FFFFFF;">Approprié</h3>
                                    <p>Puisqu’ils sont engagés dès le début dans le projet, les utilisateurs ont une meilleure
                                        appropriation du logiciel. Chacun est porteur d'idées et les utilisateurs sont les
                                        mieux placés pour donner leur avis.
                                    </p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/log/7.png" />
                                    <h3 style="color: #fdd03c; text-shadow: 3px 2px 5px #FFFFFF;">Rentable</h3>
                                    <p>Le retour sur investissement d’un développement logiciel spécifique se calcule sur
                                        le long terme par un gain de temps et de productivité notable au sein de votre
                                        organisation. Le logiciel sur mesure est même souvent plus économique à terme
                                        car vous n'avez plus de licences généralement onéreuses à renouveler chaque année pour chaque utilisateur.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
                <p data-aos="fade-right" style="text-align: center; color: white; margin-bottom: 70px;font-weight: bold">
                    NL Technologie vous propose sa solution informatique adapté entièrement à votre activité et façon de travailler!
                </p>
            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div  data-aos="fade-right"
                          data-aos-offset="300"
                          data-aos-easing="ease-in-sine" class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                          <div class="light">
                            <div><img src="images/service/log/8.png"></div>
                            </div>   
                        
                    </div>
                    <div  class="col-md-6 col-lg-6 col-xs-12 col-sm-12">
                    <h2 data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">Logiciel sur mesure</h2>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="text-align: justify; margin-top: 10px;color: black">
                        C'est un logiciel ergonomique et évolutif et qui se développe avec votre activité.
                        Donc il rend simple ce qui est compliqué.<br> Des fonctionnalités adaptées pour votre métier avec une
                        interface moins complexe favorisant ainsi gain de temps et de productivité
                    </p>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="color: black">
                        - Adapté à vos procédures <br>
                        - Un respect de vos contraintes métiers <br>
                        - Une solution évolutive selon vos besoins : 100 % sur mesure !
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
                     data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left: 6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">Avantage pour votre entreprise</h2>
                <p data-aos="fade-down"
                   data-aos-easing="linear"
                   data-aos-duration="800" style="text-align: justify; margin-top: 10px; color: black">
                    Chaque société est unique! Et chaque entrepreneur dévellope des idées et stratégies uniques!<br>
                    Vos avantages en utilisant un logiciel sur mesure:
                </p>
                <p data-aos="fade-right"
                   data-aos-offset="300"
                   data-aos-easing="ease-in-sine" style="color: black">
                    - Gagnez du temps en productivité <br>
                    - Réduisez vos dépenses <br>
                    - Vos taches seront automatisées <br>
                    - Votre logiciel évoluera avec votre entreprise <br>
                    - Vous pouvez envisager de monétiser ou revendre cette solution logicielle<br>
                    - Vous devenez propriétaire de votre logiciel pour disposer d’un avantage concurrentiel.
                </p>
                <div data-aos="zoom-in" style="text-align: center; margin-top: 20px">
                    <a href="contact.php"><button class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                </div>
            </div>
            <div data-aos="flip-left"
                 data-aos-easing="ease-out-cubic"
                 data-aos-duration="2000" class="col-md-6"">
            <div class="light">
                            <div><img src="images/service/log/9.png"></div>
                            </div>
        </div>
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