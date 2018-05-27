<?php
include'../model/chiffres.class.php';

$chiffre=new chiffres();
@$chiffre->type=$_POST['type'];
@$chiffre->valeur=$_POST['valeur'];


?>