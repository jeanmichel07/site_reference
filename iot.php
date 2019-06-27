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
    <section class="page-title" style="background-image:url(images/service/iot/4.jpg)">
        <div class="auto-container">
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Services IOT</li>
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
                                    <img src="images/service/iot/1.png" />
                                    <h3 style="color:#00A8FF ; text-shadow: 3px 2px 5px #FFFFFF;">IOT</h3>
                                    <p>Internet of things, Internet des objets, ou plus simplement: les objets connectés</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/iot/a.png" />
                                    <h3 style="color: #c11a38; text-shadow: 3px 2px 5px #FFFFFF;">Mesure Via des Capteurs</h3>
                                    <p>Une nouvelle génération d'outil qui vous permet de collecter des données sur le terrain environnant...</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/iot/b.png" />
                                    <h3 style="color: #a3c33a; text-shadow: 3px 2px 5px #FFFFFF;">Collecte et stockage de la data</h3>
                                    <p>... directement sauvegardées et n'attendent plus qu'à être consultées et partagées</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/iot/c.png" />
                                    <h3 style="color: #0796a4; text-shadow: 3px 2px 5px #FFFFFF;">Analyse Big DATA et Modélisation</h3>
                                    <p>Vous pourrez même les analyser en les croisant avec d'autres données dans la Big Data</p>
                                </div>
                            </li>
                            <li>
                                <div class="content">
                                    <img src="images/service/iot/d.png" />
                                    <h3 style="color: #e45205; text-shadow: 3px 2px 5px #FFFFFF;">Opérations et Actions Associes</h3>
                                    <p>Et déclenchez des interventions si besoin</p>
                                </div>
                            </li>
                        </ul>
                        <div class="fs-icon" title="Expand/Close"></div>
                    </div>
                </div>
                <p data-aos="fade-right" style="text-align: center; color: white; margin-bottom: 70px;font-weight: bold">
                   Des Objets connectés sont développés par les experts de la Team NL Technologie. Ils accompagnent tous 
                    les métiers de l'entreprise pour concevoir et déployer l'IOT.
                </p>
            </div>
            <div class="row" style="background:#f8f8f8;padding: 70px 70px">
                <div class="col-md-12">
                    <div  data-aos="fade-right"
                          data-aos-offset="300"
                          data-aos-easing="ease-in-sine" class="col-md-6">
                          <div class="light">
                            <div><img src="images/service/iot/iot3.png"></div>
                            </div>  
                        
                    </div>
                    <div  class="col-md-6"">
                    <h2 data-aos="flip-right"
                        data-aos-easing="linear"
                        data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">IOT: Internet Of Things ou Internet des Objets</h2>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="text-align: justify; margin-top: 10px;color: black">
                        Le temps est maintenant à l'extension des réseaux Internets vers tous les appareils qui nous entoure. Des échanges de données numériques entre les objets du monde physique
                        Ces objets connectés à internet peuvent qui prendre la forme de n’importe quel objet quotidien et 
                        vont pourtant révolutionner votre mode de vie.
                    </p>
                    <p data-aos="fade-down"
                       data-aos-easing="linear"
                       data-aos-duration="1000" style="color: black">
                        - IOT s'adapte à vos besoin <br>
                        - IOT s'adapte à votre environnement
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
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">Fonctionnalités de l'IOT</h2>
                <p data-aos="fade-down"
                   data-aos-easing="linear"
                   data-aos-duration="800" style="text-align: justify; margin-top: 10px; color: black">
                   Un objet connecté est un objet intelligent c’est-à-dire capable de communicer de machine 
                    à machine sans avoir besoin d’un humain comme intermédiaire.
                    <br>
                </p>
                <p data-aos="fade-down"
                   data-aos-easing="linear"
                   data-aos-duration="1000" style="color: black">
                    - IOT est la passerelle entre le monde physique et le monde virtuelle.
                </p>
                
            </div>
            <div data-aos="flip-left"
                 data-aos-easing="ease-out-cubic"
                 data-aos-duration="2000" class="col-md-6"">
            <div class="light">
                            <div><img src="images/service/iot/iot1.png"></div>
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
                            <div><img src="images/service/iot/iot2.png"></div>
                            </div> 
        </div>
        <div  class="col-md-6"">
        <h2 data-aos="zoom-in-left"
            data-aos-easing="linear"
            data-aos-duration="700" style="font-size: 20px; text-align: center; color: #FFFFFF; border-left:
                        6px solid #FFFFFF;background-color: #d2b871;font-weight: bold">Avantages de l'IOT pour l'entreprise</h2>
        <p data-aos="fade-down"
           data-aos-easing="linear"
           data-aos-duration="1000" style="text-align: justify; margin-top: 10px; color: black;">
            En effet, en entreprise, l’IoT peut être utilisé pour automatiser et superviser des tâches manuelles
            répétitives:<br>
            - éclairage,<br>
            - climatisation,<br>
            - température de l’eau,<br>
            - etc.<br>
            Et ce n’est pas là ses seuls usages. L’IoT constitue un levier puissant pour :
        <p data-aos="flip-left"
           data-aos-easing="ease-out-cubic"
           data-aos-duration="2000" style="color: black;">
            - réduire ses coûts de maintenance<br>
            - réduire ses stocks pour « coller » strictement à la demande<br>
            - augmenter ses ventes<br>
            - mieux connaître ses clients<br>
            - fidéliser ses clients
        </p>
        
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