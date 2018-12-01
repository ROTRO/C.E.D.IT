	<?php 
require 'connexion.php';
   
    $name=$_POST['First'];
    $last=$_POST['Last'];
    $email=$_POST['email'];
    $phone=$_POST['Phone'];

    
  $bdd->exec("INSERT INTO `etudiant`(`first_name`, `last_name`, `email`, `phone`) VALUES ('$name','$last','$email','$phone')");
    header('location:Affichage.php');

    ?>