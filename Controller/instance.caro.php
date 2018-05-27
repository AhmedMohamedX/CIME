<?php
include'../model/caros.class.php';

$caro=new caros();
@$caro->ordre=$_POST['ordre'];
@$caro->nom=$_FILES['nom']['name'];


?>