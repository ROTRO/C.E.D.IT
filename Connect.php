<?php
try {
$bdd= new PDO("mysql:host=localhost; dbname=127_0_0_1", 'root', '');
echo "Connection success: ";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }
 ?>
