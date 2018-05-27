<?php
include'../model/users.class.php';

$user=new users();
@$user->login=$_POST['login'];
@$user->motdepasse=$_POST['motdepasse'];
@$user->type=$_POST['type'];


?>