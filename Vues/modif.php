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
        <div class="container" >
            <div class="row" >
                <div class="col-md-9 col-md-push-3 col-sm-12 col-xs-12" >
                    <div id="content" class="site-content" >
                        <main id="main">

                            <div class="page-grid" >
                                <?php
                                include'../controller/instance.user.php';
                                $us=$user->get_user($_GET['m']);
                                extract($us);
                                ?>
                                <form method="post" enctype="multipart/form-data" >
                                <!-- GRID 9 COLUMNS -->
                                <h2 class="section-header">Modifier l'utilisateur " <?php echo $login ?> "</h2>
                                <label>Login</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input type="text" class="form-control" style="width:350px;" placeholder="" autofocus name="login0" value="<?php echo $login ?>">
                                </div>
                                <br>
                                <label>Fonction</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <select name="type0" style="width:300px;" >
                                <option <?php if($type=='admin'){ ?> selected <?php } ?>value="Admin">Admin</option>
                                <option <?php if($type=='Chercheur'){ ?> selected <?php } ?>value="Chercheur">Chercheur</option>
                                <option <?php if($type=='enseignant'){ ?> selected <?php } ?>value="Enseignant">Enseignant</option>
                                <option <?php if($type=='Responsable de plateforme conception et test'){ ?> selected <?php } ?>value="Responsable de plateforme conception et test">Responsable de plateforme conception et test</option>
                                <option <?php if($type=='Responsable de plateforme salle blanche'){ ?> selected <?php } ?>value="Responsable de plateforme salle blanche">Responsable de plateforme salle blanche</option>
                                <option <?php if($type=='Responsable de plateforme microsystèmes et capteurs'){ ?> selected <?php } ?>value="Responsable de plateforme microsystèmes et capteurs">Responsable de plateforme microsystèmes et capteurs</option>
                                <option <?php if($type=='Responsable de plateforme caractérisation électrique'){ ?> selected <?php } ?>value="Responsable de plateforme caractérisation électrique">Responsable de plateforme caractérisation électrique</option>
                                <option <?php if($type=='Responsable de plateforme objets communicants'){ ?> selected <?php } ?>value="Responsable de plateforme objets communicants">Responsable de plateforme objets communicants</option>
                                <option <?php if($type=='Responsable de plateforme nanomonde'){ ?> selected <?php } ?>value="Responsable de plateforme nanomonde">Responsable de plateforme nanomonde</option>
                                <option <?php if($type=='Responsable de biotechnologies'){ ?> selected  <?php } ?>value="Responsable de biotechnologies">Responsable de biotechnologies</option>
                                <option <?php if($type=='Responsable de hyperfréquence et optique guidée'){ ?> selected <?php } ?>value="Responsable de hyperfréquence et optique guidée">Responsable de hyperfréquence et optique guidée</option>
                                </select>
                                </div><br>
                                <label>Ancien mot de passe</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                                <input type="text" class="form-control" style="width:350px;" placeholder="" autofocus  name="Amdp" readonly="true" value="<?php echo $motdepasse ?>">
                                </div><br>
                                <label>Nouveau mot de passe</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                                <input type="text" class="form-control" style="width:350px;" placeholder="" autofocus  name="Nmdp1">
                                </div><br>
                                <label>Retaper le nouveau mot de passe</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-shield"></i></span>
                                <input type="text" class="form-control" style="width:350px;" placeholder="" autofocus  name="Nmdp2">
                                </div>
                                <br>
                                &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="modif" class="btn btn-primary">Modifier</button>

                              </form>

                               <?php
                               if(isset($_POST['modif'])){
                               if($user->exist_user($_POST['login0'])| $_POST['login0']==$_GET['m']){
                                if ( (!empty($_POST['login0'])) && (!empty($_POST['Nmdp1'])) && (!empty($_POST['Nmdp2'])) && ($_POST['Nmdp1']==$_POST['Nmdp2'])  ) {
                               $user->modif_user1($_GET['m'],$_POST['login0'],$_POST['Nmdp1'],$_POST['type0']);  
                               header("location:users.php");
                                }
                               }
                               if($user->exist_user($_POST['login0'])==false && $_POST['login0']!=$_GET['m']){?>
                               <br>
                                <div class="alert alert-error alert-dismissible mb-30" style="width:350px;">
                                <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Ce login existe déjà
                                </div><!-- /alert -->
                               <?php
                               }
                               if(empty($_POST['login0'])){?>
                               <br>
                                <div class="alert alert-error alert-dismissible mb-30" style="width:350px;">
                                <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Taper le nouveau login
                                </div><!-- /alert -->
                               <?php
                               }
                               if(empty($_POST['Nmdp1'])){?>
                               <br>
                                <div class="alert alert-error alert-dismissible mb-30" style="width:350px;">
                                <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Taper le nouveau mot de passe
                                </div><!-- /alert -->
                               <?php
                               }
                               if(empty($_POST['Nmdp2']) && (!empty($_POST['Nmdp1']))){?>
                               <br>
                                <div class="alert alert-error alert-dismissible mb-30" style="width:350px;">
                                <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> Retaper le nouveau mot de passe
                                </div><!-- /alert -->
                               <?php
                               }
                               if($_POST['Nmdp1']!=$_POST['Nmdp2']){?>
                               <br>
                                <div class="alert alert-error alert-dismissible mb-30" style="width:350px;">
                                <i class="fa fa-times-circle"></i><span class="alert-title">Erreur!</span> les mots de passe saisis ne sont pas identiques
                                </div><!-- /alert -->
                               <?php
                               }
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
                                    <li  class="active"><a href="users.php" class="btn btn-gray fullwidth text-left">Utilisateurs</a></li>
                                    <li><a href="plats.php" class="btn btn-gray fullwidth text-left">Plateformes</a></li>
                                    <li><a href="acts.php" class="btn btn-gray fullwidth text-left">Actualités</a></li>
                                    <li><a href="chifs.php" class="btn btn-gray fullwidth text-left">Chiffres</a></li>   
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