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
<!-- Responsive -->
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
<!--[if lt IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.3/html5shiv.js"></script><![endif]-->
<!--[if lt IE 9]><script src="js/respond.js"></script><![endif]-->
</head>

<body>

<div class="page-wrapper" align="center" >
 	
    <!-- Preloader -->
    <div class="preloader"></div>
 	
    <!-- Main Header-->
      <?php
        include('header.php');
    ?><!--End Main Header-->
    
    <!--Page Title-->
    <section class="page-title"  style="background-image:url(images/background/recrutement.png)">
    	<div class="auto-container">
        	<h1></h1>
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Details de Recrutement </li>
            </ul>


         </div>


    </section>
    <hr>
    <div class="container">

        <div id="image" align="center">

        </div>
        <hr>

        <div id="poste"  align="left">

        </div>
        <hr>

        <div id="profil"  align="left">

        </div>
        <hr>

        <div id="mission"  align="left">

        </div>

        <div id="autre"  align="left">

        </div>
        <br><br>


    </div>

    <!--End Page Title-->
    
    <!--Gallery Single Section-->

    <!--End Gallery Section-->

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
<script src="js/mixitup.js"></script>
<script src="js/script.js"></script>

<script>


    var impt=new XMLHttpRequest();
      impt.open('GET','/back/public/index.php/api/show/recrut/<?php echo $_GET['idRec']; ?>');
      impt.onreadystatechange=function () {
            if (this.readyState === 4 && this.status === 200) {

            var arr=JSON.parse(impt.response);
                document.getElementById('image').innerHTML='<img width="1150px" height="200px" src="/back/public/uploads/'+arr[0]['image'] +'" alt="post">'
                document.getElementById('poste').innerHTML='<b> <h3><strong class="text-info">Poste :</strong> </h3>'+arr[0]['post']+'</b>'
                document.getElementById('profil').innerHTML='<b> <h3><strong class="text-info">Profile Requis :</strong></h3>'+arr[0]['profile']+'</b>'
                document.getElementById('mission').innerHTML='<b> <h3><strong class="text-info">Mission :</strong></h3>'+arr[0]['mission']+'  </b>'
                document.getElementById('autre').innerHTML='<b> <h3><strong class="text-info">Autre :</strong></h3>'+arr[0]['autre']+'  </b>'


        }
    };
      impt.send()
</script>
</body>
</html>