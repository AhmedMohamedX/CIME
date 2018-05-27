<?php
include'../model/faqs.class.php';

$faq=new faqs();
@$faq->question=$_POST['question'];
@$faq->réponse=$_POST['reponse'];


?>