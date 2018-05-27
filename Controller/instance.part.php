<?php
include'../model/parts.class.php';

$part=new parts();
@$part->lien=$_POST['lien'];
@$part->type=$_POST['type'];
@$part->logo=$_FILES['logo']['name'];


?>