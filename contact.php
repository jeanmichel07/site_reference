<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>NL Technologie</title>
<!-- Stylesheets -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/style.css" rel="stylesheet">
<link href="css/responsive.css" rel="stylesheet">
<link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
<link rel="shortcut icon" href="images/favicon.png" type="image/x-icon">
<link rel="icon" href="images/favicon.png" type="image/x-icon">
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
    <style>
        ::placeholder {
            color: gainsboro;
            opacity: 0.3;
            font-size: 17px;
        }
    </style>
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
    <section class="page-title" style="background-image:url(images/background/contact.png">
    	<div class="auto-container">
        	<h1></h1>
            <ul class="page-breadcrumb">
            	<li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Contact</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->
    
    <!--Contact Section-->
    <section class="contact-section">
    	<div class="auto-container">
            <div class="sec-title-two">
                <h2>Renseingement</h2>
                <div class="text">Vous pouvez utiliser le formulaire de contact ci-dessous pour toute demande de
                renseingement.</div>
            </div>

        	<div class="row clearfix">
            	<!--Form Column-->
            	<div class="form-column col-md-6 col-sm-12 col-xs-12">
                	
                    <!--Contact Form-->
                    <div class="contact-form" >
                            <!--Form Group-->
                            <div class="form-group" >
                                <input style="font-weight: normal" type="text" id="name" name="nom" placeholder="Votre nom:" required>
                                <p class="error_anarana"></p>
                            </div>
                        	<!--Form Group-->
                            <div class="form-group">
                                <input style="font-weight: normal" type="email" id="mail" name="email" placeholder="Votre adresse email:" required>
                                <p class="error_email"></p>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <input style="font-weight: normal" type="text" id="titre" name="Titre" placeholder="Titre:" required>
                                <p class="error_titre"></p>
                            </div>
                            <!--Form Group-->
                            <div class="form-group">
                                <textarea style="font-weight: normal" name="message" id="message" placeholder="Votre message:" ></textarea>
                                <p class="error_message"></p>
                            </div>
                            <!--Form Group-->

                            <div class="form-group">
                                <button type="submit" class="theme-btn btn-style-two" onclick="addRecord()" data-aos="fade-down-right">Envoyer Message</button>
                            </div>


                    </div>
                    <!--Contact Form-->
                    <div id="viewmess" style="background-color: #4cae4c;visibility: hidden ">
                        <p><h3 style="color: #bce8f1" align="center" >Message envoyé</h3></p>
                    </div>
                    
                </div>
                <!--Info Column-->
                <div class="info-column col-md-6 col-sm-12 col-xs-12">
                	<div class="inner-column">
                    	<ul>
                        	<li data-aos="zoom-out-left"><span data-aos="zoom-out-left">Adresse:</span>Anjanahary II 137 <br>101 Antananarivo-Madagascar </li>
                            <li data-aos="zoom-out-left"><span data-aos="zoom-out-left" >Tel:</span>+261 34 58 880 22</li>
                            <li data-aos="zoom-out-left"><span data-aos="zoom-out-left">email:</span>nltechnology19@gmail.com</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    
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
<script src="js/validate.js"></script>
<script src="js/script.js"></script>
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    AOS.init();
</script>
<!--Google Map APi Key-->
<script src="http://maps.google.com/maps/api/js?key=AIzaSyBKS14AnP3HCIVlUpPKtGp7CbYuMtcXE2o"></script>
<script src="js/map-script.js"></script>
<!--End Google Map APi-->
<!--avoyer le message dans la base-->
        <script type="text/javascript">
            function test() {
                console.log("Merci")

            }
            function addRecord() {
                var name =$('#name').val();
                var mail =$('#mail').val();
                var titre =$('#titre').val();
                var message =$('#message').val();
                var status="KO"

                if(name===""){
                    $('#name').next('.error_anarana').fadeIn().text("Veuilez remplir votre nom").css("color","red");
                }
                else if (!name.match(/^[a-z]+$/i)){
                    $('#name').next('.error_anarana').fadeIn().text("Veuilez entrer un nom valide").css("color","red");
                }else if(name.length<3){
                    $('#name').next('.error_anarana').fadeIn().text("Veuilez entrer un nom plus de trois chaine").css("color","red");
                }
                else
                {
                    $('#name').next('.error_anarana').fadeOut().text("Veuilez remplir votre nom").css("color","red");
                }

                if(mail===""){
                    $('#mail').next('.error_email').fadeIn().text("Veuilez remplir votre email").css("color","red");
                }
                else if (!mail.match(/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,})$/i)){
                    $('#mail').next('.error_email').fadeIn().text("Veuilez entrer un mail valide").css("color","red");
                }


                else{
                    $('#mail').next('.error_email').fadeOut().text("Veuilez remplir votre email").css("color","red");
                }

                if(titre===""){
                    $('#titre').next('.error_titre').fadeIn().text("Veuilez remplir le titre").css("color","red");
                }else{
                    $('#titre').next('.error_titre').fadeOut().text("Veuilez remplir le titre").css("color","red");
                }

                if(message===""){
                    $('#message').next('.error_message').fadeIn().text("Veuilez remplir votre message").css("color","red");
                }
                else if(message.length<15){
                    $('#message').next('.error_message').fadeIn().text("Veuilez entrer plus de mùots").css("color","red");
                }
                else{
                    $('#message').next('.error_message').fadeOut().text("Veuilez remplir votre message").css("color","red");
                }

            $.ajax({
                url:"http://127.0.0.1:8000/api/create/visitor",
                type:"post",
                data:{
                    name:name,
                    email:mail,
                    titre:titre,
                    message:message
                },
                status:"OK"

            });
                if(status==="OK") {
                    $('#viewmess').css('visibility', 'visible');
                }
            }

        </script>

</body>
</html>