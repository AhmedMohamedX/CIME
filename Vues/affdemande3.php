<?php
session_start();
if(empty($_SESSION['login'])){
header("location:index.php");
}
if($_SESSION['type']!='chercheur'){
header("location:index.php");
}
?>
<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="" lang="en"> <!--<![endif]-->
<head>
<script language="Javascript">
function imprimer(){window.print();}
</script>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <meta name="format-detection" content="telephone=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <!-- GOOGLE FONT -->
    <link href='https://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Playfair+Display:400,700,400italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,600,700' rel='stylesheet' type='text/css'>

    <!-- CSS LIBRARY -->
    <!-- Bootstrap -->
    <link type="text/css" href="css/lib/bootstrap.min.css" rel="stylesheet">
    <link type="text/css" href="css/lib/jquery.bootstrap-touchspin.min.css" rel="stylesheet">

    <!-- Font Icon -->
    <link type="text/css" href="css/lib/font-awesome.min.css" rel="stylesheet">
    <link type="text/css" href="css/lib/cortana.css" rel="stylesheet">

    <!-- Revolution Slider -->
    <link type="text/css" href="rs-plugin/css/settings.css" rel="stylesheet">
    <!-- Owl Carousel -->
    <link type="text/css" href="css/lib/owl.carousel.css" rel="stylesheet">

    <!-- Select into div -->
    <link type="text/css" href="css/lib/select2.min.css" rel="stylesheet">

    <!-- Magnific Popup -->
    <link type="text/css" href="css/lib/magnific-popup.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link type="text/css" href="css/style.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <title>CIME</title>
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->


<div id="page-wrap">
    <!-- CONTENT -->
           <div class="container">


                    <div id="content" class="site-content">
                        <main id="main">

                            <div class="page-grid">
                            <hr>
                            <img src="img/logo1.png" alt="logo" align="left" /><br> <h5>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;centre interuniversitaire de microelectronique et nanotechnologies</h5><br><HR><br>

                               <?php
                               include'../controller/instance.res.php';
                                $l=$res->aff_demande1($_GET['m']);
                                    if(!empty ($l)){
                                    extract($l);
                                    if($plateforme=='conception'){
                                        $plat2='conception et test';
                                    }
                                    if($plateforme=='sb'){
                                        $plat2='salle blanche';
                                    }
                                    if($plateforme=='micro'){
                                        $plat2='microsystèmes et capteurs';
                                    }
                                    if($plateforme=='carac'){
                                        $plat2='caractérisation électrique';
                                    }
                                    if($plateforme=='ob'){
                                        $plat2='objets communicants';
                                    }
                                    if($plateforme=='nano'){
                                        $plat2='nanomonde';
                                    }
                                    if($plateforme=='bio'){
                                        $plat2='biotechnologies';
                                    }
                                    if($plateforme=='hyper'){
                                        $plat2='hyperfréquence et optique guidée';
                                    }
                                ?>
                                <h2 class="section-header" align="center">demande de réservation </h2>
                               <h2 class="section-header">demande par " <?php echo $demandeur ?> "</h2>

<p>
                                Login de saisisseur : <?php echo $demandeur?><br><br>
                                Ecole ou université : <?php echo $ecole?><br><br>
                                Année d’études : <?php echo $annee?><br><br>
                                Option ou spécialité : <?php echo $option?><br><br>
                                Plateforme utilisée : <?php echo $plat2?><br><br>
                                Nombre d’étudiants au total dans le TP : <?php echo $nbre?><br><br>
                                Intitulé des travaux pratiques ou projet : <?php echo $intitule?><br><br>
                                Date de début des TP : <?php echo $dated?><br><br>
                                Date de fin des TP : <?php echo $datef?><br><br>
                                Tranches horaires dans la semaine : <?php echo $tranches?><br><br>
                                Les étudiants travaillent-ils en dehors des séances encadrées ? : <?php echo $encadre?><br><br>
                                <?php if ($encadre=='oui') { ?>
                                <br><br><br><br>Estimation du nombre d’heures par étudiant : <?php echo $encadrer?><br><br>
                                <?php } ?>
                                Le TP conduit-il à la conception complète d’un circuit intégré ? : <?php echo $encadre?><br><br>
                                <?php if ($complete=='oui') { ?>
                                Type : <?php echo $completer?><br><br><br><br><br><br><br><br>
                                <?php } ?>
                                <h5 align="right">Fait le . . / . . / . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <h5 align="right">à . . . . . . . . . . . . . . . . &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h5>
                                <h5 align="right">Signature de responsable</h5><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>


</p>



                                <br><br>
                                <input name="B1" onclick="imprimer()" type="button" value="Imprimer">
                                <?php 


                                }  ?>


                            </div><!-- /page-grid -->
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">

                        </div><!-- /widget-area -->
                    </div><!-- /sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / CONTENT -->



<!-- JQUERY -->
    <script type="text/javascript" src="js/lib/jquery-1.11.3.min.js"></script>

    <!-- Bootstrap -->
    <script type="text/javascript" src="js/lib/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/lib/jquery.bootstrap-touchspin.min.js"></script>

    <!-- Revolution Slider -->
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.tools.min.js"></script>
    <script type="text/javascript" src="rs-plugin/js/jquery.themepunch.revolution.min.js"></script>
    <!-- Owl Carousel -->
    <script type="text/javascript" src="js/lib/owl.carousel.min.js"></script>
    <!-- Overflow Text -->
    <script type="text/javascript" src="js/lib/overflow-text.js"></script>

    <!-- Easing -->
    <script type="text/javascript" src="js/lib/jquery.easing.min.js"></script>

    <!-- Select to div -->
    <script type="text/javascript" src="js/lib/select2.min.js"></script>

    <!-- Parallax -->
    <script type="text/javascript" src="js/lib/jquery.parallax-1.1.3.js"></script>

    <!-- Waypoint -->
    <script type="text/javascript" src="js/lib/waypoints.min.js"></script>

    <!-- Count To -->
    <script type="text/javascript" src="js/lib/jquery.countTo.js"></script>

    <!-- Magnific Popup -->
    <script type="text/javascript" src="js/lib/jquery.magnific-popup.min.js"></script>

    <!-- Image Loaded -->
    <script type="text/javascript" src="js/lib/imagesloaded.pkgd.min.js"></script>

    <!-- Isotope -->
    <script type="text/javascript" src="js/lib/isotope.pkgd.min.js"></script>

    
    <!-- Custom jQuery -->
    <script type="text/javascript" src="js/scripts.js"></script>
</body>
</html>