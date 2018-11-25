<?php
try {
$bdd= new PDO("mysql:host=localhost; dbname=Questions", 'root', '');
echo "Connection success: ";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>
