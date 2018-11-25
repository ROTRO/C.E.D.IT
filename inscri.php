<?php
$cin = $sn = $nom = $prenom = $email = $tel = $login = $password = "";

try {
$bdd= new PDO("mysql:host=localhost; dbname=127_0_0_1", 'root', '');
echo "Connection success: ";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    $cin=$_POST["CIN"];
    $sn=$_POST["snumber"];
    $nom=$_POST["nom"];
    $prenom=$_POST["prenom"];
    $email=$_POST["email"];
    $tel=$_POST["tel"];
    $login=$_POST["login"];
    $password=$_POST["password"];






    try {



      $sql =("INSERT INTO `student`(`cin`,`num_s`, `fname_s`, `lname_s`, `email`, `tel_s`, `login_s`, `pw_s`) VALUES ($cin,'$sn','$nom','$prenom','$email','$tel','$login','$password')");
        $bdd->exec($sql);
        var_dump($bdd->exec($sql));
        echo "New record created successfully";
        header('location:home.html');

        }
        catch(PDOException $e)
            {
            echo "Connection failed: " . $e->getMessage();
         }
        

?>
