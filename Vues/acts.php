<?php
session_start();
if(empty($_SESSION['login'])){
header("location:index.php");
}
if($_SESSION['type']!='admin'){
header("location:index.php");
}
?>
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

    <title>CIME</title>
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
    <div class="top-header">
        <div class="container">
            <div class="top-left">
            <img src="img/logo1.png" alt="logo" />
            </div><!-- /top-left -->
            <div class="top-right">
                <ul class="info-header">
                    <li><i class="icon icon-globe"></i>Langue: Français</li>
                    <li><i class="fa fa-users"></i><?php echo $_SESSION['login']?></li>
                    
                    <li><form  method="post"><button type="submit" name="dcnx" class="btn btn-primary">Se déconnecter</button></form></li>

                </ul><!-- /info-header -->
            </div><!-- /top-right -->
        </div><!-- /container -->
    </div><!-- /top-header -->
</header><!-- /header -->
<!-- END / HEADER 3 -->

<div id="page-wrap">
    <!-- CONTENT -->
    <section class="section bg-white pt-70 pb-60">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-md-push-3 col-sm-12 col-xs-12">
                    <div id="content" class="site-content">
                        <main id="main">

                            <div class="page-grid">
                                <form method="post" enctype="multipart/form-data" >
                                <h2 class="section-header">ajouter une actualité</h2>
                                <label>Titre</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bar-chart"></i></span>
                                <input type="text" class="form-control" style="width:300px;" placeholder="" autofocus name="titre1" required>
                                </div>
                                <br>
                                <label>Date</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-bar-chart"></i></span>

                                <input type="date" class="form-control" style="width:300px;" placeholder=""   name="date1" required>
                                </div><br>
                                <label>Texte</label> 
                                <div class="input-group">
                                <textarea name="texte1" rows="40" cols="100" minlength="50" required></textarea>
                                </div>
                                
                                <label>Photo</label> 
                                <div class="input-group">
                                <input type="file" class="form-control" style="width:350px;" placeholder=""   name="photo1" required>
                                </div>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="ajt" class="btn btn-primary">Ajouter</button>

                              </form>
                              <br><br>

                               <h2 class="section-header">liste des Actualités</h2>
                                <?php
                                include'../controller/instance.actua.php';
                                $acts=$actua->get_actuas();
                                if(!empty ($acts)){
                                foreach ($acts as $lines ) {
                                    extract($lines);
                                ?>
                                    <li>
                                <?php echo $titre?> <br>
                                Texte: <?php echo substr($texte, 0, 150)?>.....<br>
                                <?php echo $date ?><br> <a href="?cle=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer cette actualité?')) return false">supprimer</a> <a href="modifact.php?m=<?php echo $id  ?>">modifier</a>
                                <br><br>
                                <?php }
                                if(isset($_GET['cle'])){
                                if($actua->supp_act($_GET['cle'])){
                                    $fichier = 'img/actuas/'.$photo;
                                    unlink( $fichier ); 
                                    header("location:acts.php");
                                }
                                }
                                ?>
                                </li>
                                <?php
                                } else echo 'Pas des actualités';
                                if(isset($_POST['ajt'])){
                                if($actua->ajt_act($_POST['titre1'],$_POST['texte1'],$_POST['date1'],$_FILES['photo1']['name'])){
                                copy($_FILES['photo1']['tmp_name'],'img/actuas/'.$_FILES['photo1']['name']);
                                header("location:acts.php");
                                    }
                                    else
                                        echo "<script>alert(\"insert echoueé\")</script>";
                                }
                                     ?>




                            </div><!-- /page-grid -->
                        </main>
                    </div><!-- /site-content -->
                </div><!-- /col -->

                <div class="col-md-3 col-md-pull-9 col-sm-12 col-xs-12">
                    <div id="sidebar" class="sidebar">
                        <div id="widget-area">
                            <aside class="widget widget_linklist">
                                <ul>
                                    <li><a href="acc.php" class="btn btn-gray fullwidth text-left">votre Profil</a></li>
                                    <li><a href="res.php" class="btn btn-gray fullwidth text-left">Réservations</a></li> 
                                    <li><a href="cong.php" class="btn btn-gray fullwidth text-left">Congés</a></li>
                                    <?php if($_SESSION['type']=='admin'){?>
                                    <li><a href="users.php" class="btn btn-gray fullwidth text-left">Utilisateurs</a></li>
                                    <li><a href="plats.php" class="btn btn-gray fullwidth text-left">Plateformes</a></li>
                                    <li  class="active"><a href="acts.php" class="btn btn-gray fullwidth text-left">Actualités</a></li>
                                    <li><a href="chifs.php" class="btn btn-gray fullwidth text-left">Chifres</a></li>   
                                    <li><a href="conts.php" class="btn btn-gray fullwidth text-left">Contacts</a></li> 
                                    <li><a href="f.php" class="btn btn-gray fullwidth text-left">FAQ</a></li> 
                                    <li><a href="his.php" class="btn btn-gray fullwidth text-left">Historique</a></li>    
                                    <li><a href="infs.php" class="btn btn-gray fullwidth text-left">Informations</a></li>     
                                    <li><a href="parts.php" class="btn btn-gray fullwidth text-left">Partenaires</a></li> 
                                    <li><a href="forms.php" class="btn btn-gray fullwidth text-left">Formations</a></li>
                                    <li><a href="tarfs.php" class="btn btn-gray fullwidth text-left">tarifs</a></li>
                                    <li><a href="tems.php" class="btn btn-gray fullwidth text-left">Témoignages</a></li>
                                    <li><a href="vals.php" class="btn btn-gray fullwidth text-left">Valeurs</a></li> 
                                    <li><a href="car.php" class="btn btn-gray fullwidth text-left">Carousel</a></li>  
                                    <?php }?> 
                                    <?php if($_SESSION['type']!='admin' && $_SESSION['type']!='chercheur' && $_SESSION['type']!='enseignant'){?>
                                    <li><a href="eqps.php" class="btn btn-gray fullwidth text-left">equipements</a></li>
                                    <?php }?>
                                    <?php if($_SESSION['type']!='admin' && $_SESSION['type']!='chercheur'){?>
                                    <li><a href="docx.php" class="btn btn-gray fullwidth text-left">Documents</a></li>   
                                    <?php } ?>
                                    <?php if($_SESSION['type']!='admin'){?>
                                    <li><a href="plans.php" class="btn btn-gray fullwidth text-left">Plannings</a></li>   
                                    <?php } ?>       

                                </ul>
                            </aside><!-- /widget_linklist -->

                        </div><!-- /widget-area -->
                    </div><!-- /sidebar -->
                </div><!-- /col -->
            </div><!-- /row -->
        </div><!-- /container -->
    </section>
    <!-- END / CONTENT -->

    <!-- FOOTER -->
    <footer id="footer" class="footer bg-dark">

        <div class="foot-credit">
            <div class="container">
                            <ul>

                    <li><form  method="post"><button type="submit" name="dcnx" class="btn btn-primary">Se déconnecter</button></form></li>
                </ul>
                <p>CIME &copy; 2016 By MedAHMED. All rights Reserved</p>
            </div><!-- /container -->
        </div><!-- /foot-credit -->
    </footer>
    <!-- END / FOOTER -->
</div><!-- /page-wrap -->
<?php
if (isset($_POST['dcnx'])) {
session_destroy();
header("location:index.php");
}

?>

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