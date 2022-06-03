<?php
$conn=new mysqli("localhost","root","","location de voiture");

$depart = $_POST["depart"];
$retour = $_POST["retour"];
$dateDepart = $_POST["dateD"];
$heureDepart = $_POST["heureD"];
$dateRetour = $_POST["dateR"];
$heureRetour = $_POST["heureD"];
$id=uniqid();
$req="INSERT INTO reservation(depart,retour,dateD,heureD,dateR,heureR) VALUES ('$depart', '$retour' ,'$dateDepart ', '$heureDepart' , '$dateRetour' , '$heureRetour');";

if ($conn -> query($req)===true)
{
  header("location:voiture à louer.php"); 
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>