<?php
include'../model/equips.class.php';

$equip=new equips();
@$equip->nom=$_POST['nom'];
@$equip->plateforme=$_POST['plateforme'];
@$equip->version=$_POST['version'];
@$equip->photo=$_FILES['photo']['name'];


?>