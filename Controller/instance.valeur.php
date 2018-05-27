<?php
include'../model/valeurs.class.php';

$valeur=new valeurs();
@$valeur->type=$_POST['type'];
@$valeur->texte=$_POST['texte'];


?>