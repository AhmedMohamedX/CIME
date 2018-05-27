<?php
include'../model/contacts.class.php';

$contact=new contacts();
@$contact->nom=$_POST['nom'];
@$contact->fonction=$_POST['fonction'];
@$contact->mail=$_POST['mail'];
@$contact->linkedin=$_POST['linkedin'];
@$contact->texte=$_POST['texte'];
@$contact->photo=$_FILES['photo']['name'];


?>