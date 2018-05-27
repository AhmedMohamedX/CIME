<?php
include'../model/plans.class.php';

$plan=new plans();
@$plan->nom=$_POST['nom'];
@$plan->plateforme=$_POST['plateforme'];
@$plan->fichier=$_FILES['fichier']['name'];


?>