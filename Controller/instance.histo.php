<?php
include'../model/histos.class.php';

$histo=new histos();
@$histo->titre=$_POST['titre'];
@$histo->texte=$_POST['texte'];
@$histo->date=$_POST['date'];
@$histo->photo=$_FILES['photo']['name'];


?>