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
<style>
    .gallery {
        -webkit-column-count: 3;
        -moz-column-count: 3;
        column-count: 3;
        -webkit-column-width: 33%;
        -moz-column-width: 33%;
        column-width: 33%;
        margin: 30px 30px 20px 30px;

    }
    .desc
    {
        color: #00000a;
        font-family: "Roboto", sans-serif;
        font-size: 20px;
    }
    .gallery .pics {
        -webkit-transition: all 350ms ease;
        transition: all 350ms ease; }
    .gallery .animation {
        -webkit-transform: scale(1);
        -ms-transform: scale(1);
        transform: scale(1); }
    .gallery img{
        width: 400px;
        height: auto;
        -webkit-transition: .3s ease-in-out;
        transition: .3s ease-in-out;
    }
    .gallery img:hover{
        width: 450px;
    }
    .gallery center{
        font-size: 20px;
        text-align: center;
        color: #ffffff;
        font-weight: bold;
        background: #d2b871;
        text-decoration: none;
    }
    @media (max-width: 450px) {
        .gallery {
            -webkit-column-count: 1;
            -moz-column-count: 1;
            column-count: 1;
            -webkit-column-width: 100%;
            -moz-column-width: 100%;
            column-width: 100%;
        }
    }

    @media (max-width: 400px) {
        .btn.filter {
            padding-left: 1.1rem;
            padding-right: 1.1rem;
        }
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
    <section class="page-title" style="background-image:url(images/background/recrutement.png)">
        <div class="auto-container">
            <h1></h1>
            <ul class="page-breadcrumb">
                <li style="font-weight: bold; font-size: 20px; text-shadow: 1px 2px 5px #000000 "><a href="index.php">Accueil</a></li>
                <li>Recrutement</li>
            </ul>
        </div>
    </section>
    <!--End Page Title-->

    <!--Gallery Section-->
    <hr>     
    <div class="gallery" id="gallery">

        <div class="col-md-4 col-lg-4 col-xs-12 col-sm-12">
            
        </div>
    </div>
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
    var xrh=new XMLHttpRequest();
    xrh.open('GET','/back/public/index.php/api/read/recrutement');
    xrh.onreadystatechange=function () {
        if (this.readyState === 4 && this.status === 200) {

            var arr=JSON.parse(xrh.response);

            for(var i=0;i<arr.length;i++) {
                document.getElementById("gallery").innerHTML +=
                    '<div class="mb-3 pics animation all 2">' +
                    '  <a href="Recrutement-detail.php?idRec='+arr[i].id+'">' +
                    '    <img width="100%" height="95px" src="/back/public/uploads/'+arr[i].image +'" alt="post">' +
                    '  </a>' +
                    '</div>'

                    // '                            <img src="http://127.0.0.1:8000/uploads/'+arr[i].image +'" alt="post">' +



            }
        }
    };

    $(function() {
        var selectedClass = "";
        $(".filter").click(function(){
            selectedClass = $(this).attr("data-rel");
            $("#gallery").fadeTo(100, 0.1);
            $("#gallery div").not("."+selectedClass).fadeOut().removeClass('animation');
            setTimeout(function() {
                $("."+selectedClass).fadeIn().addClass('animation');
                $("#gallery").fadeTo(300, 1);
            }, 300);
        });
    });
    xrh.send()

</script>
</body>
</html>


