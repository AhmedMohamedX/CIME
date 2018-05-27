<?php
include'../model/infos.class.php';

$info=new infos();
@$info->adresse=$_POST['adresse'];
@$info->telF=$_POST['telF'];
@$info->mail=$_POST['mail'];
@$info->telP=$_POST['telP'];
@$info->horaires=$_POST['horaires'];

?>