<?php
include'../model/temoig.class.php';

$tem=new tem();
@$tem->nom=$_POST['nom'];
@$tem->texte=$_POST['texte'];
@$tem->fonction=$_POST['fonction'];
@$tem->photo=$_FILES['photo']['name'];


?>