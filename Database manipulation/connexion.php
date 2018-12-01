<?php
  try 
{   
       $bdd = new PDO('mysql:host=localhost;dbname=dsi21_gr1;charset=utf8', 'root', ''); 
 } 
catch (Exception $e) 
{           
    die('Erreur : ' . $e->getMessage()); 
} 
?>