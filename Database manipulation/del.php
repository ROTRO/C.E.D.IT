<?php 
require 'connexion.php';
   
    $name=$_POST['First'];
   

    
  $bdd->exec("DELETE FROM `etudiant` WHERE `etudiant`.`id` = $name");
    header('location:Affichage.php');

    ?>