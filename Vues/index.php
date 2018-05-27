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

    <title>CIME | PAGE D'ACCUEIL</title>
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

<!-- HEADER 1 -->
<header id="header" class="header head1">
    <div class="searchbar searchbar-light">
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

    <div class="main-header main-header-1 bd-b-alpha">
        <div class="container">
            <!-- LOGO -->
            <div class="logo">
                <a href="index.php"><img src="img/logo_white_txt.png" alt="logo" /></a>
            </div><!-- /#logo -->
            <!-- END / LOGO -->

            <!-- MOBILE MENU -->
            <div class="mobile-nav-menu" data-menu-number="1">
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
<!-- END / HEADER 1 -->

<div id="page-wrap">
    <!-- HOME MEDIA -->
    <section id="home-media" class="section pt-0 pb-0" data-home-media="760">
        <div class="tp-banner-container">
            <div class="tp-banner" >
                <ul>
                    <!-- SLIDE 1  -->
                     <?php
                        include'../controller/instance.caro.php';
                        $car=$caro->get_caro('1');
                        extract($car);
                        if (!empty($car)) {

                        ?>

                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="img/slider/thumb/thumb1.jpg"  data-saveperformance="on" data-title="Slider 1">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/dummy.png"  alt="slidebg1" data-lazyload="img/slider/<?php echo $nom ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->
                       
                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 lfl tp-resizeme rs-parallaxlevel-0 tp-headline"
                            data-x="center"
                            data-y="300"
                            data-speed="500"
                            data-start="1350"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Nous sommes plus qu'un centre
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 lfr tp-resizeme rs-parallaxlevel-0 tp-headline-3"
                            data-x="center"
                            data-y="370"
                            data-speed="500"
                            data-start="1650"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Nous sommes le futur
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption grey_heavy_72 fade tp-resizeme rs-parallaxlevel-0"
                            data-x="center"
                            data-y="440"
                            data-speed="500"
                            data-start="2550"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;"><a href='about-us.php' class='btn btn-primary'>Qui sommes nous</a>
                        </div>
                        <?php } ?>

                    <!-- SLIDE 2 -->
                     <?php
                        $car1=$caro->get_caro('2');
                        extract($car1);
                        if (!empty($car1)) {
                        ?>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="img/slider/thumb/thumb-1.jpg"  data-saveperformance="on"  data-title="Slider 2">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/dummy.png"  alt="slidebg1" data-lazyload="img/slider/<?php echo $nom ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 sfb tp-resizeme rs-parallaxlevel-0 tp-headline"
                            data-x="left"
                            data-y="280"
                            data-hoffset="15"
                            data-speed="500"
                            data-start="1050"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">L'avenir du microélectronique
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 sfb tp-resizeme rs-parallaxlevel-0 tp-description"
                            data-x="left"
                            data-y="340"
                            data-hoffset="15"
                            data-speed="500"
                            data-start="1350"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Une mutualisation des moyens opérationnels et un soutien pour l'innovation pédagogique et scientifique.
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption grey_heavy_72 sfb tp-resizeme rs-parallaxlevel-0 tp-description"
                            data-x="left"
                            data-y="380"
                            data-hoffset="15"
                            data-speed="500"
                            data-start="1350"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption grey_heavy_72 sfl tp-resizeme rs-parallaxlevel-0"
                            data-x="left"
                            data-y="440"
                            data-hoffset="15"
                            data-speed="500"
                            data-start="2050"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;"><a href='about-us.php' class='btn btn-primary mr-10'>Qui sommes nous</a> <a href='core-value.php' class='btn btn-transparent'>Nos valeurs</a>
                        </div>
                    </li>
                    <?php } ?>
                    <!-- SLIDE 3 -->
                     <?php
                        $car2=$caro->get_caro('3');
                        extract($car2);
                        if (!empty($car2)) {
                        ?>
                    <li data-transition="random" data-slotamount="7" data-masterspeed="500" data-thumb="img/slider/thumb/thumb-1.jpg"  data-saveperformance="on"  data-title="Slider 3">
                        <!-- MAIN IMAGE -->
                        <img src="img/slider/dummy.png"  alt="slidebg1" data-lazyload="img/slider/<?php echo $nom ?>" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">
                        <!-- LAYERS -->

                        <!-- LAYER NR. 1 -->
                        <div class="tp-caption grey_heavy_72 sfb tp-resizeme rs-parallaxlevel-0 tp-headline-3"
                            data-x="center"
                            data-y="280"
                            data-speed="500"
                            data-start="1050"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Nous sommes plus qu'un centre - Nous sommes le futur
                        </div>

                        <!-- LAYER NR. 2 -->
                        <div class="tp-caption grey_heavy_72 sfb tp-resizeme rs-parallaxlevel-0 tp-headline-2"
                            data-x="center"
                            data-y="350"
                            data-speed="500"
                            data-start="1350"
                            data-easing="Power3.easeInOut"
                            data-splitin="lines"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;">Bienvenue au CIME
                        </div>

                        <!-- LAYER NR. 3 -->
                        <div class="tp-caption grey_heavy_72 sfl tp-resizeme rs-parallaxlevel-0"
                            data-x="center"
                            data-y="430"
                            data-hoffset="-100"
                            data-speed="500"
                            data-start="2050"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;"><a href='about-us.php' class='btn btn-primary'>Qui sommes nous</a>
                        </div>

                        <!-- LAYER NR. 4 -->
                        <div class="tp-caption grey_heavy_72 sfr tp-resizeme rs-parallaxlevel-0"
                            data-x="center"
                            data-y="430"
                            data-hoffset="83"
                            data-speed="500"
                            data-start="2050"
                            data-easing="Power3.easeInOut"
                            data-splitin="none"
                            data-splitout="none"
                            data-elementdelay="0.1"
                            data-endelementdelay="0.1"
                            style="z-index: 99; max-width: auto; max-height: auto; white-space: nowrap;"><a href='core-value.php' class='btn btn-transparent'>Nos valeurs</a>
                        </div>
                    </li>
                    <?php } ?>
                </ul>
                <div class="tp-bannertimer"></div>
            </div><!-- /tp-banner -->
        </div><!-- /tp-banner-container -->
    </section>
    <!-- END / HOME MEDIA -->

    <!-- ABOUT -->
    <section class="section bg-white bd-b pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-lg-9 col-lg-push-3 col-sm-12 col-xs-12">
                    <h2 class="section-header big">Qui sommes nous?</h2>
                    <p>Le CIME Nanotech fait partie d'un réseau national de 12 centres de formation regroupés au sein de la Coordination Nationale de Formation en Microélectronique (CNFM). </p>

                    <div class="divider pt-30 pb-40"></div>

                    <div class="row">
                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <h3 class="h5 text-uppercase mb-20"><a href="work4col.php">Microélectronique</a></h3>
                            <div class="post-thumbnail hover-link">
                                <img src="img/service/1.png" alt="" />
                                <a href="work4col.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!--/ post-thumbnail -->
                            <div class="mb-30">
                                <p>Cette plateforme regroupe les équipements de la caractérisation électrique de composants intégrés.</p>
                            </div>
                        </div><!-- /col -->

                        <div class="col-lg-4 col-sm-6 col-xs-12">
                            <h3 class="h5 text-uppercase mb-20"><a href="work4col.php">Biotechnologies</a></h3>
                            <div class="post-thumbnail hover-link">
                                <img src="img/service/2.png" alt="" />
                                <a href="work4col.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!--/ post-thumbnail -->
                            <div class="mb-30">
                                <p>Cette plateforme permet d’enseigner les techniques et les travaux pratiquesde base des biotechnologies.</p>
                            </div>
                        </div><!-- /col -->

                        <div class="col-lg-4 col-sm-12 col-xs-12">
                            <h3 class="h5 text-uppercase mb-20"><a href="work4col.php">Nanotechnologies</a></h3>
                            <div class="post-thumbnail hover-link">
                                <img src="img/service/3.png" alt="" />
                                <a href="work4col.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!--/ post-thumbnail -->
                            <div class="mb-30">
                                <p>L’objectif est de familiariser les étudiants aux techniques de la nano caractérisation en champ proche.</p>
                            </div>
                        </div><!-- /col -->
                    </div><!-- /row -->
                </div><!-- /col -->

                <div class="col-lg-3 col-lg-pull-9 col-sm-12 col-xs-12">
                    <div class="sidebar sidebar-2">
                        <aside class="widget widget_about">
                            <h3 class="widget-title h5">CIME Nanotech</h3>
                            <p>Une mutualisation des moyens opérationnels et un soutien pour l'innovation pédagogique et scientifique. </p>
                        </aside><!-- /widget_about -->

                        <aside class="widget widget_contact">
                            <h3 class="widget-title h5">Contacts</h3>
                            <ul>
                            <?php
                             include'../controller/instance.info.php';
                             $infos=$info->aff_infos();
                             extract($infos);
                             ?>
                                <li><i class="fa fa-map-marker"></i><?php echo $adresse ?></li>
                                <li><i class="icon icon-phone"></i><?php echo $telF ?></li>
                                <li><i class="icon icon-paper-plane"></i><a href="mailto:<?php echo $mail ?>">infos@grenoble-inp.fr</a></li>
                                <li><i class="fa fa-mobile"></i><?php echo $telP ?></li>
                                <li><i class="icon icon-clock"></i><?php echo $horaires ?></li>
                            </ul>
                        </aside><!-- /widget_contact -->
                    </div><!-- sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / ABOUT -->

    <!-- TESTIMONIAL - CLIENT -->
    <section class="section bg-gray bd-b pt-70 pb-70">
        <div class="container">
            <div class="row">
                <div class="col-sm-6 col-xs-12">
                    <h2 class="section-header">Témoignages</h2>
                    <div class="testimonial testimonial-slider" data-number-slide="1">
                    <?php
                        include'../controller/instance.temoig.php';
                        $temoigs=$tem->get_temoig();
                        if(!empty ($temoigs)){
                        foreach ($temoigs as $lines ) {
                            extract($lines);
                            ?>
                        <div class="item">
                            <div class="testimonial-status white"><?php echo $texte?></div>
                            <div class="testimonial-author clearfix">
                                <img src="img/contacts/<?php echo $photo?>" alt="" class="img-circle" />
                                <h5 class="text-uppercase text-right"><?php echo $nom?></h5>
                                <p class=" text-right"><?php echo $fonction?></p>
                            </div><!-- /testimonial-author -->
                        </div><!-- /item -->
                        <?php } }?>
                    </div><!-- /testimonial -->
                </div><!-- /col -->

                <div class="col-sm-6 col-xs-12">
                    <h2 class="section-header">Formations</h2>
                    <div class="row">
                     <?php
                        include'../controller/instance.formation.php';
                        $forma=$formations->aff_formations();
                        if(!empty ($forma)){
                        foreach ($forma as $lines ) {
                            extract($lines);
                            ?>
                        <div class="col-lg-4 col-md-6 col-xs-12 mb-30">
                            <div class="client-logo">
                                <img src="img/client/<?php echo $logo?>" alt="" />
                            </div><!-- /client-logo -->
                        </div><!-- /col -->
                    <?php }}?>  
                    </div><!-- /row -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / TESTIMONIAL - CLIENT -->

    <!-- ICON BOX -->
    <section class="section bg-white pt-50 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-lg-push-4 col-sm-6 col-xs-12">
                    <div class="cortana-icon">
                        <i class="fa fa-anchor"></i>
                        <h5 class="text-uppercase">Intégrité</h5>
                         <?php
                         include'../controller/instance.valeur.php';
                         $val=$valeur->aff_valeur('Intégrité');
                         extract($val);
                         ?>
                        <p><?php echo $texte ?></p>
                    </div><!-- /cortana-icon -->

                    <div class="cortana-icon">
                        <i class="fa fa-users"></i>
                        <h5 class="text-uppercase">Personnel</h5>
                        <?php
                        $val1=$valeur->aff_valeur('Personnel');
                        extract($val1);
                        ?>
                        <p><?php echo $texte ?></p>
                    </div><!-- /cortana-icon -->
                </div><!-- /col -->

                <div class="col-lg-4 col-lg-push-4 col-sm-6 col-xs-12">
                    <div class="cortana-icon">
                        <i class="fa fa-eye"></i>
                        <h5 class="text-uppercase">Vision</h5>
                        <?php
                        $val2=$valeur->aff_valeur('Vision');
                        extract($val2);
                        ?>
                        <p><?php echo $texte ?></p>
                    </div><!-- /cortana-icon -->

                    <div class="cortana-icon">
                        <i class="fa fa-shield"></i>
                        <h5 class="text-uppercase">Sécurité</h5>
                        <?php
                        $val5=$valeur->aff_valeur('Sécurité');
                        extract($val5);
                        ?>
                        <p><?php echo $texte ?></p>
                    </div><!-- /cortana-icon -->
                </div><!-- /col -->

                <div class="col-lg-4 col-lg-pull-8 col-sm-12 col-xs-12">
                    <img src="img/prof.jpg" alt="" />
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / ICON BOX -->

    <!-- PORTFOLIO 1 -->
    <section class="section bg-parallax pt-60 pb-60" data-background="img/bg/portfolio.jpg">
        <div class="bg-overlay-black bg-overlay-7"></div>
        <div class="container">
            <h2 class="section-header big" data-section-center="991">Nos plateformes</h2>
            <!-- FILTER -->
            <ul class="portfolio-selector filters" data-portfolio-type="991">
                <li><a href="#" data-filter="*">Tout</a></li>
                <li><a href="#" data-filter=".office">Conception</a></li>
                <li><a href="#" data-filter=".building">électronique</a></li>
                <li><a href="#" data-filter=".museum">Nano</a></li>
                <li><a href="#" data-filter=".urban">Objets</a></li>
                <li><a href="#" data-filter=".house">Micro</a></li>
            </ul><!-- /portfolio-selector -->
            <!-- END / FILTER -->

            <div class="isotope-grid-wrapper" data-isotope-column="4" data-column-gap="30" data-column-md="3" data-column-sm="2" data-column-xs="1" data-column-tn="1">
                <div class="isotope-grid-row">
                    <div class="isotope-grid">
                        <div class="grid-sizer"></div>
                        <!-- <div class="gutter-sizer"></div> -->

                        <div class="portfolio-item office">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/1big.jpg" alt="" />
                                <a href="conception.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="conception.php">Conception et test</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item building">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/2big.jpg" alt="" />
                                <a href="salleB.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="salleB.php">Salle blanche</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item museum">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/3big.jpg" alt="" />
                                <a href="Micro.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="Micro.php">Microsystémes et capteurs</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item building">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/4big.jpg" alt="" />
                                <a href="Carac.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="Carac.php">Caractérisation électrique</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item urban">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/7big.jpg" alt="" />
                                <a href="Objects.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="Objects.php">Objets communicants</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item museum">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/5big.jpg" alt="" />
                                <a href="Nanomonde.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="Nanomonde.php">Nanomonde</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item urban">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/6big.jpg" alt="" />
                                <a href="biotechnologies.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="biotechnologies.php">Biotechnologies</a></h5>
                        </div><!-- /portfolio-item -->

                        <div class="portfolio-item house">
                            <div class="portfolio-media hover-link">
                                <img src="img/portfolio/8big.jpg" alt="" />
                                <a href="Hyper.php" class="overlay"><i class="fa fa-link"></i></a>
                            </div><!-- /hover-link -->
                            <h5 class="text-uppercase text-center"><a href="Hyper.php">Hyperfréquence et optique guidée</a></h5>
                        </div><!-- /portfolio-item -->
                    </div><!-- /isotope-grid -->
                </div><!-- /isotope-grid-row -->
            </div><!-- /isotope-grid-wrapper -->
        </div><!-- /container -->
    </section>
    <!-- END / PORTFOLIO 1 -->

    

    <!-- NEWS -->
    <section class="section bg-gray bd-b pt-60 pb-20">
        <div class="container">
            <h2 class="section-header">Actualités</h2>
            <div class="row">
                <?php
                include'../controller/instance.actua.php';
                $i=1;
                $actuas=$actua->get_actuas();
                if(!empty ($actuas)){
                foreach ($actuas as $lines ) {
                extract($lines);
                ?>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <article class="post post-style-2">
                        <div class="post-thumbnail hover-link">
                            <img src="img/actuas/<?php echo $photo ?>" alt="" />
                            <a href="actua.php?id=<?php echo $id ?>" class="overlay"><i class="fa fa-link"></i></a>
                        </div><!--/ post-thumbnail -->

                        <header class="entry-header">
                            <h2 class="entry-title h5" data-number-line="2"><a href="actua.php?id=<?php echo $id ?>"><?php echo $titre ?></a></h2>
                        </header>

                        <div class="entry-content">
                            <p data-number-line="4"><p>  <?php echo substr($texte, 0, 130) ?>...<a href="actua.php?id=<?php echo $id ?>" class="more-link">Lire la suite</a></p> </p>
                        </div><!-- /entry-content -->

                        <footer class="entry-footer">
                            <span class="posted-on"><i class="fa fa-calendar"></i><?php echo $date ?></span>
                        </footer>
                    </article><!-- /post -->
                </div><!-- /col -->
            <?php 
            $i++;
            if ($i>3) {
            break;
            }
            }} ?>
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / NEWS -->
    <!-- COUNTER 1 -->
    <section class="section bg-white bd-b pb-50">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter">
                        <?php
                        include'../controller/instance.chiffre.php';
                        $val=$chiffre->aff_chiffre('Heures');
                        extract($val);
                        ?>
                        <p class="count-number"><?php echo $valeur ?></p>
                        <h3>Heures</h3>
                    </div><!-- /counter -->
                </div><!-- /col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter">
                        <?php
                        $val1=$chiffre->aff_chiffre('Etudiants');
                        extract($val1);
                        ?>
                        <p class="count-number"><?php echo $valeur ?></p>
                        <h3>Etudiants</h3>
                    </div><!-- /counter -->
                </div><!-- /col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter">
                        <?php
                        $val2=$chiffre->aff_chiffre('Chercheurs');
                        extract($val2);
                        ?>
                        <p class="count-number"><?php echo $valeur ?></p>
                        <h3>Chercheurs</h3>
                    </div><!-- /counter -->
                </div><!-- /col -->
                <div class="col-md-3 col-sm-6 col-xs-12">
                    <div class="counter">
                        <?php
                        $val3=$chiffre->aff_chiffre('Formations');
                        extract($val3);
                        ?>
                        <p class="count-number"><?php echo $valeur ?></p>
                        <h3>Formations</h3>
                    </div><!-- /counter -->
                </div><!-- /col -->
            </div><!-- /row -->

            <div class="divider"></div>
                <div class="client-slider">
                <?php
                include'../controller/instance.part.php';
                $i=1;
                $prts=$part->aff_parts_all();
                if(!empty ($prts)){
                foreach ($prts as $lines ) {
                extract($lines);
                ?>
                <div class="client-logo">
                    <a href="<?php echo $lien ?>"  target="blank"><img src="img/client/<?php echo $logo ?>" alt=""  /></a>
                </div><!-- /client-logo -->
                <?php } } ?>
            </div><!-- /client-slider -->
        </div><!-- /container -->
        </div><!-- /container -->
        <div class="stat-trigger"></div>
    </section>
    <!-- END / COUNTER 1 -->

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
                            @session_start();
                            include'../controller/instance.user.php';
                            if(isset($_POST['cnx'])){
                                if(!empty($_POST['login']) && !empty($_POST['motdepasse'])){
                                $res=$user->valide_user($_POST['login'],$_POST['motdepasse']);
                                    if(!empty($res)){
                                    extract($res);
                                    $_SESSION['login']=$login;
                                    $_SESSION['motdepasse']=$motdepasse;
                                    $_SESSION['type']=$type;
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