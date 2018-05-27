<?php
include'../model/tarifs.class.php';

$tarif=new tarifs();
@$tarif->nom=$_POST['nom'];
@$tarif->type=$_POST['type'];
@$tarif->nbrsalles=$_POST['nbrsalles'];
@$tarif->nbrheures=$_POST['nbrheures'];
@$tarif->nbrprojets=$_POST['nbrprojets'];
@$tarif->nbrenseignants=$_POST['nbrenseignants'];
@$tarif->tarif=$_POST['tarif'];


?>