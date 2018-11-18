<?php
try {
$bdd= new PDO("mysql:host=localhost; dbname=Questions", 'root', '');

}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>
