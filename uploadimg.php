<?php
session_start();
try {
$bdd= new PDO("mysql:host=localhost; dbname=127_0_0_1", 'root', '');
echo "Connection success: ";
}
catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

$targetDir = "uploads/";
$fileName = basename($_FILES["file"]["name"]);
$targetFilePath = $targetDir . $fileName;
$name=$_SESSION['nom'];
$cin=$_SESSION['cin'];
echo $_SESSION['nom'];
$fileType = pathinfo($targetFilePath,PATHINFO_EXTENSION);
if(isset($_POST["submit"]) && !empty($_FILES["file"]["name"])){
    // Allow certain file formats
    $allowTypes = array('jpg','png','jpeg','gif','pdf');
    if(in_array($fileType, $allowTypes)){
        // Upload file to server
        //if(move_uploaded_file($_FILES["file"]["name"], $targetFilePath)){
            // Insert image file name into database
            $insert = $bdd->exec("UPDATE `student` SET `file_name`='$fileName' WHERE `fname_s`='$name' ");

            if($insert){
                $statusMsg = "The file ".$fileName. " has been uploaded successfully.";
                header('location:student.php');
            }else{
                $statusMsg = "File upload failed, please try again.";

            }
        //}else{
          //  $statusMsg = "Sorry, there was an error uploading your file.";
        //}
    }else{
        $statusMsg = 'Sorry, only JPG, JPEG, PNG, GIF, & PDF files are allowed to upload.';
    }
}else{
    $statusMsg = 'Please select a file to upload.';
}

// Display status message
echo $statusMsg;
 ?>
