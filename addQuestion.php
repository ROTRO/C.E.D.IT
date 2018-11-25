<?php
require 'Connect.php';

$question=$_POST["Q"];

$A1=$_POST['A1']; $A2=$_POST['A2']; $A3=$_POST['A3']; $A4=$_POST['A4'];
try{

$bdd->exec("INSERT INTO questions (Question) VALUES ('$question')");
echo '<br> inserted';}
catch(PDOException $e)
    {
    echo $sql . "<br>" . $e->getMessage();
  }

$sql = "SELECT CQ FROM questions WHERE Question = '$question'";

$result = $bdd->query($sql);
$row = $result->fetch();
$question=$row['CQ'];

$request1 =("INSERT INTO `answers`(`Answers`, `CC`) VALUES ('$A1',$question)");
$request2 =("INSERT INTO `answers`(`Answers`, `CC`) VALUES ('$A2',$question)");
$request3 =("INSERT INTO `answers`(`Answers`, `CC`) VALUES ('$A3',$question)");
$request4 =("INSERT INTO `answers`(`Answers`, `CC`) VALUES ('$A4',$question)");
var_dump($bdd->exec($request1));
$bdd->exec($request1);
$bdd->exec($request2);
$bdd->exec($request3);
$bdd->exec($request4);
header('location:add question.PHP');
  ?>
