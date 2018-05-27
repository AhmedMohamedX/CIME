<?php
include'../model/cong.class.php';

$cong=new cong();
@$cong->nom=$_POST['nom'];
@$cong->prenom=$_POST['prenom'];
@$cong->fonction=$_POST['fonction'];
@$cong->responsable=$_POST['responsable'];
@$cong->dated=$_POST['dated'];
@$cong->datef=$_POST['datef'];
@$cong->etat=$_POST['etat'];
@$cong->demandeur=$_POST['demandeur'];
@$cong->date=$_POST['date'];
?>