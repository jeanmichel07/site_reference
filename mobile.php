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
    <section class="page-title" style="background-image:url(images/service/mob/mobile.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Services Mobile</li>
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
                                    <img src="images/service/mob/0.png" />
                                    <h3 style="color: #f48020; text-shadow: 3px 2px 5px #FFFFFF;">UNE EXPÉRIENCE CLIENT OPTIMISÉE</h3>
                                    <p>une grande partie de vos clients seront
                                        susceptibles de favoriser la navigation sur application
                                        mobile à une navigation web</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/mob/3.png" />
                                    <h3 style="color: #a0b742; text-shadow: 3px 2px 5px #FFFFFF;">UN GAIN EN VISIBILITÉ</h3>
                                    <p>Avoir une application fait gagner en visibilité, et améliore l’image de marque.
                                        C’est l’occasion pour une entreprise de mettre en avant son activité,
                                        et de proposer de nouveaux services.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/mob/4.png" />
                                    <h3 style="color: #e5615f; text-shadow: 3px 2px 5px #FFFFFF;"> UN OUTIL DE FIDÉLISATION</h3>
                                    <p>Il est donc beaucoup plus facile d’informer vos clients, d’interagir, de rester
                                        à leur disposition et rendre possible l’envoi de notifications</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/mob/2.png" />
                                    <h3 style="color: #002339; text-shadow: 3px 2px 5px #FFFFFF;">UN OUTIL DE GESTION CLIENT OPTIMISEE</h3>
                                    <p>Il permet à l’entreprise de gérer ses rendez-vous clients à distance, et aux clients
                                        de prendre rendez-vous à partir de plusieurs supports : ordinateur, tablette,
                                        smartphone… Votre entreprise reste ainsi accessible partout, 24/7.</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/mob/5.png" />
                                    <h3 style="color: #dfa60a; text-shadow: 3px 2px 5px #FFFFFF;">UN ENGAGEMENT CLIENT PLUS FORT</h3>
                                    <p>L'application mobile offre la possibilité d’établir un lien privilégié avec vos clients.
                                        Sachez donc qu’il faut faire de la satisfaction client sa priorité, et l’application mobile
                                        est l’outil le mieux placé pour cela.
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
                <p data-aos="fade-right" style="text-align: center; color: white; margin-bottom: 70px;font-weight: bold">
                    Toutes les entreprises convoitent le site internet parfait, celui qui
                    fera augmenter leurs conversions et exploser leur popularité en ligne.<br>
                    Nous vous rassurons avec un bon d’investissement, il est possible de
                    concevoir un site web ou une application web à la hauteur de vos attentes !
                </p>

            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div  data-aos="fade-right"
                          data-aos-offset="300"
                          data-aos-easing="ease-in-sine" class="col-md-6">
                          <div class="light">
                <div><img src="images/service/mob/11.png"></div>
            </div> 
                        
                    </div>
                    <div  class="col-md-6"">
                    <h2 data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">DEVELOPPEMENT D'APPLICATION MOBILES</h2>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="text-align: justify; margin-top: 10px;color: black">
                        Les technologies de l'information et de la communication ont été la révolution la plus importante
                        et innovante qui a marqué ces dernières décennies. En effet, cela est symbolisé par l’apparition
                        des différents appareils de haute technologie tels que les Smartphones et les tablettes.
                    </p>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="color: black; text-align: justify">
                        Dans ce domaine il y a trois types de developpement mobile
                        le mobile Native,hybride et Web apps.
                    </p>
                    <div data-aos="fade-left"
                         style="text-align: center; margin-top: 20px">
                        <a  href="contact.php"><button  class="theme-btn btn-style-two" style="text-align: center">DEMANDEZ UN DEVIS</button></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row" style="background: #5bc0de; padding: 80px 80px ; ">
            <div class="container">
             
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                    <div class="card" style="width: 35rem;">
                        <img data-aos="fade-right"
                             data-aos-offset="300"
                             data-aos-easing="ease-in-sine"
                             src="images/service/mob/6.png" class="card-img-top" alt="...">
                        <div class="card-body" data-aos="flip-left" style="margin-top: 10px">

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">
                                    
                                    <p class="text-info">
                                        <span class="badge badge-primary badge-pill">1</span>
                                         &nbsp;&nbsp; Accès facile pour tous les smartphones.
                                     </p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"> <span class="badge badge-primary badge-pill">2</span>&nbsp;&nbsp;Rapidité, fiabilité responsive, optimisée.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">3</span>&nbsp;&nbsp;Meilleure résolution, Performance et qualité.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">4</span>&nbsp;&nbsp;Accès direct en hors connexion Internet</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                

                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
                    <div class="card" style="width: 35rem;">
                        <img data-aos="fade-down"
                             data-aos-offset="300"
                             data-aos-easing="ease-in-sine"
                             src="images/service/mob/8.png"src="..." class="card-img-top" alt="...">
                        <div class="card-body" data-aos="flip-up" style="margin-top: 10px">

                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">1</span>&nbsp;&nbsp;Temps de développement court et simple.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                   

                                    <p class="text-info">  <span class="badge badge-primary badge-pill">2</span>&nbsp;&nbsp;Simplicité de développement.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">3</span>&nbsp;&nbsp;  Mise en place plus simple et publication plus rapide.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"> <span class="badge badge-primary badge-pill">4</span>&nbsp;&nbsp;Fonctionnalité simple.</p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

               
                <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">

                    <div class="card " style="width: 35rem;">
                        <img data-aos="fade-left"
                             data-aos-offset="300"
                             data-aos-easing="ease-in-sine"
                             src="images/service/mob/7.png" class="card-img-top" alt="...">
                        <div class="card-body" data-aos="flip-right" style="margin-top: 10px">


                            <ul class="list-group">
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">1</span>&nbsp;&nbsp;Moins chère.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"><span class="badge badge-primary badge-pill">2</span>&nbsp;&nbsp;Facile à Développer.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info"> <span class="badge badge-primary badge-pill">3</span>&nbsp;&nbsp;Compatible environnement iOS, Android,etc.</p>
                                </li>
                                <li class="list-group-item d-flex justify-content-between align-items-center">

                                    

                                    <p class="text-info">  <span class="badge badge-primary badge-pill">4</span>&nbsp;&nbsp;Animations attractives.</p>
                                </li>
                            </ul>


                        </div>
                    </div>
                </div>
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