<?php
try {
$bdd= new PDO("mysql:host=localhost; dbname=student", 'root', '');
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>