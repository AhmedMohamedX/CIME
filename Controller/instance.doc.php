<?php
include'../model/docs.class.php';

$doc=new docs();
@$doc->nom=$_POST['nom'];
@$doc->plateforme=$_POST['plateforme'];
@$doc->fichier=$_FILES['fichier']['name'];


?>