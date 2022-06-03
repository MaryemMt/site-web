<?php
$conn=new mysqli("localhost","root","","location de voiture");

$marque = $_POST["marque"];
$plaque = $_POST["plaque"];
$img = $_FILES["img"]["name"];
$prix = $_POST["prix"];
$path = "assets/img/cars/".$img;
$disponibilité = $_POST["disponibilité"];

$id=uniqid();
$req="INSERT INTO voiture(marque,plaque,img,prix,disponibilité) VALUES ('$marque', '$plaque' ,'$path ', $prix , '$disponibilité')";
if ($conn -> query($req)===true)
{
    header("location:page-admin.html"); 
}else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


?>