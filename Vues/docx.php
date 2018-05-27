<?php
session_start();
if(empty($_SESSION['login'])){
header("location:index.php");
}
if($_SESSION['type']=='admin'){
header("location:index.php");
}
if($_SESSION['type']=='chercheur'){
header("location:index.php");
}
if($_SESSION['type']=='enseignant'){
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
                                <!-- GRID 9 COLUMNS -->
                                 <h2 class="section-header">ajouter un document</h2>
                                <label>Nom</label> 
                                <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-users"></i></span>
                                <input type="text" class="form-control" style="width:300px;" placeholder="" autofocus name="nom1" required>
                                </div>
                                <br>

                                <label>Fichier</label> 
                                <div class="input-group">
                                <input type="file" class="form-control" style="width:340px;" placeholder=""   name="photo1" required>
                                </div><br>
                                &nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button type="submit" name="ajt" class="btn btn-primary">Ajouter</button>

                              </form>
                              <br><br>

                                <?php
                                include'../controller/instance.doc.php';
                                $type=$_SESSION['type'];
                                if(isset($_POST['ajt'])){
                                    if($type=='responsable plateforme conception et test'){
                                        $plat2='conception';
                                    }
                                    if($type=='Responsable de plateforme salle blanche'){
                                        $plat2='SB';
                                    }
                                    if($type=='Responsable de plateforme microsystèmes et capteurs'){
                                        $plat2='micro';
                                    }
                                    if($type=='Responsable de plateforme caractérisation électrique'){
                                        $plat2='carac';
                                    }
                                    if($type=='Responsable de plateforme objets communicants'){
                                        $plat2='ob';
                                    }
                                    if($type=='Responsable de plateforme nanomonde'){
                                        $plat2='nano';
                                    }
                                    if($type=='Responsable de biotechnologies'){
                                        $plat2='bio';
                                    }
                                    if($type=='Responsable de hyperfréquence et optique guidée'){
                                        $plat2='hyper';
                                    }




                                if($doc->ajt_doc($_POST['nom1'],$plat2,$_FILES['photo1']['name'])){ 
                                    if ($plat2=='conception') {
                                copy($_FILES['photo1']['tmp_name'],'documents/conception/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='SB') {
                                copy($_FILES['photo1']['tmp_name'],'documents/SB/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='micro') {
                                copy($_FILES['photo1']['tmp_name'],'documents/micro/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='carac') {
                                copy($_FILES['photo1']['tmp_name'],'documents/carac/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='ob') {
                                copy($_FILES['photo1']['tmp_name'],'documents/objets/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='nano') {
                                copy($_FILES['photo1']['tmp_name'],'documents/nano/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='bio') {
                                copy($_FILES['photo1']['tmp_name'],'documents/bio/'.$_FILES['photo1']['name']);
                                    }
                                    if ($plat2=='hyper') {
                                copy($_FILES['photo1']['tmp_name'],'documents/hyper/'.$_FILES['photo1']['name']);
                                    
                                    }
                                header("location:docx.php");
                                    }
                                }
                                     ?>
                                     <?php if($type=='responsable plateforme conception et test'){ ?>
                                <h2 class="section-header">Liste des documents plateforme conception</h2>
                                <?php
                                $equips=$doc->aff_docs('conception');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle'])){
                                if($doc->supp_doc($_GET['cle'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de plateforme salle blanche'){ ?>
                                <h2 class="section-header">Liste des documents plateforme salle blanche</h2>
                                <?php
                                $equips=$doc->aff_docs('SB');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle1=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle1'])){
                                if($doc->supp_doc($_GET['cle1'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                 <?php if($type=='Responsable de plateforme microsystèmes et capteurs'){ ?>
                                <h2 class="section-header">Liste des documents plateforme Microsystèmes et capteurs</h2>
                                <?php
                                $equips=$doc->aff_docs('micro');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle2=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle2'])){
                                if($doc->supp_doc($_GET['cle2'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de plateforme caractérisation électrique'){ ?>
                                <h2 class="section-header">Liste des documents plateforme Caractérisation électrique</h2>
                                <?php
                                $equips=$doc->aff_docs('carac');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle3=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle3'])){
                                if($doc->supp_doc($_GET['cle3'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de plateforme objets communicants'){ ?>
                                <h2 class="section-header">Liste des documents plateforme Objets communicants</h2>
                                <?php
                                $equips=$doc->aff_docs('ob');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle4=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle4'])){
                                if($doc->supp_doc($_GET['cle4'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de plateforme nanomonde'){ ?>
                                <h2 class="section-header">Liste des documents plateforme nanomonde</h2>
                                <?php
                                $equips=$doc->aff_docs('nano');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle5=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle5'])){
                                if($doc->supp_doc($_GET['cle5'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de biotechnologies'){ ?>
                                <h2 class="section-header">Liste des documents plateforme biotechnologies</h2>
                                <?php
                                $equips=$doc->aff_docs('bio');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle6=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle6'])){
                                if($doc->supp_doc($_GET['cle6'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
                                ?><br>
                                <?php if($type=='Responsable de hyperfréquence et optique guidée'){ ?>
                                <h2 class="section-header">Liste des documents plateforme Hyperfréquence et optique guidée</h2>
                                <?php
                                $equips=$doc->aff_docs('hyper');
                                if(!empty ($equips)){
                                foreach ($equips as $lines ) {
                                extract($lines);
                                ?><li><?php
                                echo $nom; ?> <br>
                                <a href="?cle7=<?php echo $id   ?>" onClick="if(!confirm('voulez vous supprimer ce document?')) return false">supprimer</a> <a href="modifdoc1.php?m=<?php echo $id  ?>">modifier</a>
                                </li><?php
                                if(isset($_GET['cle7'])){
                                if($doc->supp_doc($_GET['cle7'])){
                                header("location:docx.php");
                                }
                                }
                                } } }
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
                                    <?php if($_SESSION['type']=='admin'){?>
                                    <li><a href="res.php" class="btn btn-gray fullwidth text-left">Réservations</a></li> 
                                    <li><a href="users.php" class="btn btn-gray fullwidth text-left">Utilisateurs</a></li>
                                    <li><a href="plats.php" class="btn btn-gray fullwidth text-left">Plateformes</a></li>
                                    <li><a href="acts.php" class="btn btn-gray fullwidth text-left">Actualités</a></li>
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
                                    <?php }?> 
                                    <?php if($_SESSION['type']!='admin' && $_SESSION['type']!='chercheur' && $_SESSION['type']!='enseignant'){?>
                                    <li><a href="eqps.php" class="btn btn-gray fullwidth text-left">equipements</a></li>
                                    <?php }?>
                                    <?php if($_SESSION['type']!='admin' && $_SESSION['type']!='chercheur'){?>
                                    <li  class="active"><a href="docx.php" class="btn btn-gray fullwidth text-left">Documents</a></li>   
                                     <li><a href="res1.php" class="btn btn-gray fullwidth text-left">Réservations</a></li>
                                     <li><a href="cong1.php" class="btn btn-gray fullwidth text-left">Congés</a></li>
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