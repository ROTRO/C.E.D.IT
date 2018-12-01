
<?php 
require 'connexion.php';
    $id=$_POST['id'];
    $name=$_POST['First'];
    $last=$_POST['Last'];
    $email=$_POST['email'];
    $phone=$_POST['Phone'];

    
  $bdd->exec("UPDATE `etudiant` SET `first_name`=$name,`last_name`=$last,`email`=$email,`phone`=$phone WHERE `id` = $id");
    header('location:Affichage.php');

    ?>