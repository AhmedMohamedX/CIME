<?php
include'../model/actuas.class.php';

$actua=new actuas();
@$actua->date=$_POST['date'];
@$actua->texte=$_POST['texte'];
@$actua->titre=$_POST['titre'];
@$actua->photo=$_FILES['photo']['name'];


?>