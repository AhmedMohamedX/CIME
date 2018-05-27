<?php
include'../model/formations.class.php';

$formations=new formations();
@$formations->nom=$_POST['nom'];
@$formations->texte=$_POST['texte'];
@$formations->logo=$_FILES['logo']['name'];


?>