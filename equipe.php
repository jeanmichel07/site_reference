<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NL Technologie</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="plugins/revolution/css/settings.css" rel="stylesheet" type="text/css"><!-- REVOLUTION SETTINGS STYLES -->
<link href="plugins/revolution/css/layers.css" rel="stylesheet" type="text/css"><!-- REVOLUTION LAYERS STYLES -->
<link href="plugins/revolution/css/navigation.css" rel="stylesheet" type="text/css"><!-- REVOLUTION NAVIGATION STYLES -->
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">

<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper">
    
    <!-- Preloader -->
    <div class="preloader"></div>
    
    <!-- Main Header-->
    <?php
        include('header.php');
    ?>
    <!--End Main Header -->
    
    <!--Page Title-->
    <section class="page-title" style="background-image:url(images/background/8.jpg)">
        <div class="auto-container">
            <h1></h1>
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="../index.php">Accueil</a></li>
                <li>Equipe</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Team Section-->
    <section class="advisor-section team-page-section">
        <div class="auto-container">
            <!--Sec Title Two-->
            <div class="sec-title-two">
                <h2>Equipe</h2>
                <div class="text">Nous mettons à votre disposition une équipe qui
                va vous accompagner dans l’identification de vos
                besoins.
                </br>
                Notre équipe prend en charge tout ou partie des
                étapes de la mise en place d’un projet de
                digitalisation: choix du support, conception,
                espace d’administration, développement
                d’application, production des contenus,
                déploiement et formation des équipes.</div>
            </div>
            
            <div class="row clearfix">
            
                <!--Team Block Two-->
                
                <div class="container" id="demo">

                </div>

                <script>
                    var xrh=new XMLHttpRequest();
                    xrh.open('GET','http://127.0.0.1:8000/api/read/equipe');
                    xrh.onreadystatechange=function () {
                        if (this.readyState === 4 && this.status === 200) {

                            var arr=JSON.parse(xrh.response);

                            for(var i=0;i<arr.length;i++) {
                                document.getElementById("demo").innerHTML += 
                                '<div class="team-block-two col-lg-3 col-md-4 col-sm-6 col-xs-12"><div class="inner-box"><div class="image"><img src="http://127.0.0.1:8000/uploads/'+arr[i].image +'" width="175px" height="200px"><div class="overlay-box"><div class="content"><h3>' + arr[i].nom + '</h3><div class="designation">' + arr[i].poste+'</div><ul class="social-icon-three"><li><a href="#"><span class="fa fa-facebook"></span></a></li><li><a href="#"><span class="fa fa-linkedin"></span></a></li><li><a href="#"><span class="fa fa-twitter"></span></a></li><li><a href="#"><span class="fa fa-google-plus"></span></a></li></ul></div></div></div><div class="lower-box"><h3>'
                                    + arr[i].nom +'</br>'+ arr[i].poste+'</h3> </div></div>'
                            }
                        }
                    };
                    xrh.send()

                </script>
            </div>
            
        </div>
    </section>
    <!--End Team Section-->
    
   
    
    <!--Main Footer-->
    <?php
        include('footer.php');
    ?>
    <!--End Main Footer-->
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
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
</body>
</html>
