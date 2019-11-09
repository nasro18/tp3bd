<?php
   include 'connexion.php';

   
    

    $req= $bd->prepare('INSERT INTO etudiante VALUES (NULL, :nom, :prenom, :email, :phone)');
     
    $req->bindValue(':nom',$_POST['nom'], PDO ::PARAM_STR);
    $req->bindValue(':prenom',$_POST['prenom'], PDO ::PARAM_STR);
    $req->bindValue(':email',$_POST['email'], PDO ::PARAM_STR);
    $req->bindValue(':phone',$_POST['phone'], PDO ::PARAM_STR);

    $exe = $req->execute();


  ?>


