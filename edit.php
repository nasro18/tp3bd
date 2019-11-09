<?php
require 'connexion.php';
$reqt = $bd->prepare("UPDATE etudiante set nom=:nom, prenom=:prenom, email=:email, phone=:phone WHERE id=:id LIMIT 1");

$reqt->bindValue(':id',$_POST['id'], PDO::PARAM_INT);
$reqt->bindValue(':nom',$_POST['nom'], PDO::PARAM_STR);
$reqt->bindValue(':prenom',$_POST['prenom'], PDO::PARAM_STR);
$reqt->bindValue(':email',$_POST['email'], PDO::PARAM_STR);
$reqt->bindValue(':phone',$_POST['phone'], PDO::PARAM_STR);

$exe = $reqt->execute();
header ('Location:index1.php');
?>