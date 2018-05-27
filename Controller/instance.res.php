<?php
include'../model/res.class.php';

$res=new res();
@$res->ecole=$_POST['ecole'];
@$res->anne=$_POST['annee'];
@$res->option=$_POST['option'];
@$res->plateforme=$_POST['plateforme'];
@$res->nbre=$_POST['nbre'];
@$res->intitule=$_POST['intitule'];
@$res->dated=$_POST['dated'];
@$res->datef=$_POST['datef'];
@$res->tranches=$_POST['tranches'];
@$res->encadre=$_POST['encadre'];
@$res->encadrer=$_POST['encadrer'];
@$res->complete=$_POST['complete'];
@$res->completer=$_POST['completer'];
@$res->demandeur=$_POST['demandeur'];
@$res->date=$_POST['date'];
@$res->statut=$_POST['statut'];
?>