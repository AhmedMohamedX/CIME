<!DOCTYPE html>
<!--[if IE 7 ]> <html class="ie ie7"> <![endif]-->
<!--[if IE 8 ]> <html class="ie ie8"> <![endif]-->
<!--[if IE 9 ]> <html class="ie ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="" lang="en"> <!--<![endif]-->
<head>
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

    <title>CIME | Objets communicants</title>
</head>

<!--[if IE 7]> <body class="ie7 lt-ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 8]> <body class="ie8 lt-ie9 lt-ie10"> <![endif]-->
<!--[if IE 9]> <body class="ie9 lt-ie10"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <body> <!--<![endif]-->

<!-- PRELOAD -->
<div id="preload" class="preload">
    <div class="flat"></div>
    <div class="square"></div>
    <div class="square-2"></div>
    <div class="square-3"></div>
    <div class="square-4"></div>
</div>
<!-- /END PRELOAD -->

<!-- HEADER 3 -->
<header class="header head3">
    <div class="searchbar">
        <div class="container">
            <div class="input-group">
                <span class="input-group-addon"><i class="fa fa-search"></i></span>
                <form method="POST">
                <input type="text" name="s" value="" placeholder="rechercher" required />
                <input type="hidden" name="ok" >
                </form>
                 <?php if (isset($_POST['ok'])) {
                 session_start();
                 $search = $_POST['s']; 
                  if (strlen($search)>2) {
                 $_SESSION['search']=$search;
                 header("location:rechgen.php");           
                 }else{
                     ?>  <?php
                     echo "mot clé trop court";
                 }
                 }
                 ?>
                <span class="input-group-btn"><button type="button" class="btn-close"></button></span>
            </div><!-- /input-group -->
        </div><!-- /container -->
    </div><!-- /searchbar -->

    <div class="top-header">
        <div class="container">
            <div class="top-left">
            </div><!-- /top-left -->
            <div class="top-right">
                <ul class="info-header">
                    <?php
                        include'../controller/instance.info.php';
                        $infos=$info->aff_infos();
                        extract($infos);
                        ?>
                    <li><i class="icon icon-globe"></i>Langue: Français</li>
                    <li><i class="icon icon-phone"></i><?php echo $telP ?></li>
                    <li><i class="icon icon-clock"></i><?php echo $horaires ?></li>
                </ul><!-- /info-header -->
            </div><!-- /top-right -->
        </div><!-- /container -->
    </div><!-- /top-header -->

    <div class="main-header main-header-3">
        <div class="container">
            <!-- LOGO -->
            <div class="logo">
                <a href="index.php"><img src="img/logo1.png" alt="logo" /></a>
            </div><!-- /#logo -->
            <!-- END / LOGO -->

            <!-- MOBILE MENU -->
            <div class="mobile-nav-menu" data-menu-number="3">
                <span class="icon">&nbsp;</span>
            </div><!-- /mobile-nav-menu -->
            <!-- /END MOBILE MENU -->

            <!-- SEARCH BUTTON -->
            <div class="search-btn"><span class="fa fa-search"></span></div>
            <!-- END / SEARCH BUTTON -->

            <!-- NAVIGATION -->
            <nav class="navigation nav1" data-menu-type="1199">
                <ul class="nav text-uppercase">
                   <li><a href="index.php">Accueil</a></li>
                    <li class="menu-item-has-children">
                        <a href="#">
                            Présentation
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                           
                            </li>
                            <li><a href="about-us.php">Introduction</a></li>
                            <li><a href="history.php">Historique</a></li>
                            <li><a href="certification.php">Formations</a></li>
                            <li><a href="pricing.php">Tarifs</a></li>
                        </ul>
                    </li>
                    <li class="menu-item-has-children">
                        <a href="work4col.php">
                            Plateformes
                            <span class="fa fa-angle-down"></span>
                        </a>
                        <ul class="sub-menu">
                            <li><a href="conception.php">Conception et test</a></li>
                            <li><a href="salleB.php">Salle blanche</a></li>
                            <li><a href="Micro.php">Microsystèmes et capteurs</a></li>
                            <li><a href="Carac.php">Caractérisation électrique</a></li>
                            <li><a href="Objects.php">Objets communicants</a></li>
                            <li><a href="Nanomonde.php">Nanomonde</a></li>
                            <li><a href="Biotechnologies.php">Biotechnologies</a></li>
                            <li><a href="Hyper.php">Hyperfréquence et optique guidée</a></li>
                        </ul>
                    </li>
                    <li><a href="news.php?cle=1">Actualités</a></li>
                    <li><a href="partner.php">Partenaires</a></li>
                    <li><a href="our-leaders.php">Annuaire</a></li>
                    <li><a href="contact.php">Contactez-nous</a></li>
                </ul><!-- /nav -->
            </nav>
            <!-- END / NAVIGATION -->
        </div><!-- /container -->
    </div><!-- /main-header -->
</header><!-- /header -->
<!-- END / HEADER 3 -->

<div id="page-wrap">
    <!-- SUB HEADER -->
    <section id="sub-header" class="section bg-parallax pt-0 pb-0" data-background="img/bg/demo.jpg">
        <div class="bg-overlay-black bg-overlay-5"></div>
        <div class="container">
            <div class="sub-wrapper">
                <h1>Objets communicants</h1>
                <h2 class="h4">L'éducation est l'arme la plus puissante qu'on puisse utiliser pour changer le monde.</h2>

                <div class="breadcrumb-container clearfix">
                    <span>Vous êtes ici: </span>
                    <ul class="breadcrumb">
                        <li><a href="index.php">Accueil</a></li>
                        <li><a href="work4col.php">Plateformes</a></li>
                        <li>Objets communicants</li>
                        <li><a href="objects.php">Présentation</a></li>
                    </ul>
                </div><!-- /breadcrumb -->
            </div><!-- /sub-wrapper -->
        </div><!-- /container -->
    </section>
    <!-- END / SUB HEADER -->

    <!-- CONTENT -->
    <section class="section bg-white pt-70 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">
                            <h2 class="section-header">Objets communicants</h2>
                            <div class="work-slider mb-20">
                                <img src="img/work/ob1.jpg" alt="" />
                                <img src="img/work/ob2.jpg" alt="" />
                                <img src="img/work/ob3.jpg" alt="" />
                                <img src="img/work/ob4.jpg" alt="" />
                                <img src="img/work/ob5.jpg" alt="" />
                            </div><!-- /work-slider -->

                            <div class="work-item-slider-wrapper">
                                <div class="work-item-slider">
                                    <a href="#"><img src="img/work/thumb/ob1.jpg" alt="" /></a>
                                    <a href="#"><img src="img/work/thumb/ob2.jpg" alt="" /></a>
                                    <a href="#"><img src="img/work/thumb/ob3.jpg" alt="" /></a>
                                    <a href="#"><img src="img/work/thumb/ob4.jpg" alt="" /></a>
                                    <a href="#"><img src="img/work/thumb/ob5.jpg" alt="" /></a>
                                </div><!-- /work-slider -->
                            </div><!-- /work-item-slider-wrapper -->

                            <div class="divider pt-20"></div>

                            <div class="page-grid">
                                <!-- GRID 9 COLUMNS -->
                                <div class="page-content col-8">
                                    <h2 class="section-header">Présentation</h2>
                                    <p>La plateforme technologique « Objets communicants et applications communicantes embarquées » est une structure pédagogique unique sur la région. Elle offre aux étudiants la possibilité d’expérimenter les technologies récentes qui seront largement présentes dans les objets communicants du futur. Elle vise à mettre à la disposition des formateurs et des étudiants des équipements permettant la mise en oeuvre pratique des technologies, méthodes et compétences théoriques clés dans le domaine des télécommunications :</p>
                                    <br />
                                    <p>Systèmes embarqués (applications communicantes), communications numériques, les réseaux (administration, routage, distribution), les systèmes sur puce/circuits et traitement du signal et des images... La plateforme dispose de 22 postes de travail montés en réseau avec bornes WiFi.</p>
                                </div><!-- /page-content -->    
                            </div><!-- /page-grid -->
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_linklist">
                                <ul>
                                    <li class="active"><a href="objects.php" class="btn btn-gray fullwidth text-left">Présentation</a></li>
                                    <li><a href="obE.php" class="btn btn-gray fullwidth text-left">Enseignement</a></li>
                                    <li><a href="obR.php" class="btn btn-gray fullwidth text-left">Réservations</a></li>
                                    <li><a href="obP.php" class="btn btn-gray fullwidth text-left">Plannings</a></li>
                                    <li><a href="obEq.php" class="btn btn-gray fullwidth text-left">Equipements</a></li>   
                                </ul>
                            </aside><!-- /widget_linklist -->


                            <aside class="widget widget_contact">
                                <h3 class="widget-title">Contacts</h3>
                                <ul>
                                    <li><i class="fa fa-map-marker"></i><?php echo $adresse ?></li>
                                <li><i class="icon icon-phone"></i><?php echo $telF ?></li>
                                <li><i class="icon icon-paper-plane"></i><a href="mailto:<?php echo $mail ?>">infos@grenoble-inp.fr</a></li>
                                <li><i class="fa fa-mobile"></i><?php echo $telP ?></li>
                                <li><i class="icon icon-clock"></i><?php echo $horaires ?></li>
                                </ul>
                            </aside><!-- /widget_contact -->
                        </div><!-- /widget-area -->
                    </div><!-- /sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / CONTENT -->

    <!-- FOOTER -->
    <footer id="footer" class="footer bg-dark">
        <div class="foot-widget">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_about">
                            <div class="logo">
                                <a href="index.php"><img src="img/logo_white_txt.png" alt="logo" /></a>
                            </div><!-- /#logo -->
                            <p>Une mutualisation des moyens opérationnels, un soutien pour l'innovation pédagogique et scientifique et un contact permanent avec les entreprises.</p>
                        </aside><!-- /widget_about -->
                    </div><!-- /col -->

                    <div class="col-md-3 col-md-push-6 col-sm-6 col-xs-12">
                        <aside class="widget widget_subscribe">
                            <h3 class="widget-title h4">Connexion</h3>
                            <form  method="post">
                                <input type="text" name="login" value="" placeholder="Utilisateur" class="black mb-30">
                                <input type="password" name="motdepasse" value="" placeholder="Mot de passe" class="black mb-30">
                                <button type="submit" name="cnx"class="btn btn-primary">Se connecter</button>
                            </form>
                            <?php
                            include'../controller/instance.user.php';
                            if(isset($_POST['cnx'])){
                                if(!empty($_POST['login']) && !empty($_POST['motdepasse'])){
                                $res=$user->valide_user($_POST['login'],$_POST['motdepasse']);
                                    if(!empty($res)){
                                    session_start();
                                    extract($res);
                                    $_SESSION['login']=$login;
                                    $_SESSION['motdepasse']=$motdepasse;
                                    $_SESSION['type']=$type;
                                    echo $nom;
                                    header("location:acc.php");
                                }else 
                                echo "<script>alert(\"ce compte n'éxiste pas\")</script>";

                            }
                            if(empty($_POST['login'])){?>
                             <div class="alert alert-error alert-dismissible mb-30">
                             <button type="button" class="btn-remove"></button>
                             <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Taper ton login
                             </div>
                            <?php
                            }
                            if(empty($_POST['motdepasse'])){?>
                             <div class="alert alert-error alert-dismissible mb-30">
                             <button type="button" class="btn-remove"></button>
                             <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Taper ton mot de passe
                             </div>
                            <?php

                            }}

                            ?>
                        </aside><!-- /widget_subscribe -->
                    </div><!-- /col -->

                    <div class="clearfix hidden-lg hidden-md hidden-xs"></div>

                    <div class="col-md-3 col-md-pull-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_contact">
                            <h3 class="widget-title h4">Contacts</h3>
                            <ul>
                                <li><i class="fa fa-map-marker"></i><?php echo $adresse ?></li>
                                <li><i class="icon icon-phone"></i><?php echo $telF ?></li>
                                <li><i class="icon icon-paper-plane"></i><a href="mailto:<?php echo $mail ?>">infos@grenoble-inp.fr</a></li>
                                <li><i class="fa fa-mobile"></i><?php echo $telP ?></li>
                                <li><i class="icon icon-clock"></i><?php echo $horaires ?></li>
                            </ul>
                        </aside><!-- /widget_contact -->
                    </div><!-- /col -->

                    <div class="col-md-3 col-md-pull-3 col-sm-6 col-xs-12">
                        <aside class="widget widget_infomation">
                            <h3 class="widget-title h4">Informations</h3>
                            <ul class="list-style">
                                <li><a href="history.php">Historique de CIME</a></li>
                                <li><a href="work4col.php">Nos plateformes</a></li>
                                <li><a href="partner.php">Nos partenaires</a></li>
                                <li><a href="core-value.php">Nos valeurs</a></li>
                                <li><a href="our-leaders.php">Annuaire</a></li>
                                <li><a href="faqs.php">F.A.Q</a></li>
                            </ul>
                        </aside><!-- /widget_infomation -->
                    </div><!-- /col -->
                </div><!-- /row -->
            </div><!-- /container -->
        </div><!-- /foot-widget -->

        <div class="foot-credit">
            <div class="container">
                <ul>
                    <li><a href="index.php">Accueil</a></li>
                    <li><a href="about-us.php">Historique</a></li>
                    <li><a href="work4col.php">Plateformes</li>
                    <li><a href="our-leaders.php">Annuaire</a></li>
                    <li><a href="news.php?cle=1">Actualités</a></li>
                    <li><a href="contact.php">Contactez-nous</a></li>
                </ul>
                <p>CIME &copy; 2016 By MedAHMED. All rights Reserved</p>
            </div><!-- /container -->
        </div><!-- /foot-credit -->
    </footer>
    <!-- END / FOOTER -->
</div><!-- /page-wrap -->

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