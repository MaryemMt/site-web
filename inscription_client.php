<?php


$conn=new mysqli("localhost","root","","location de voiture");
$cin = $_POST["cin"];
$pseudo = $_POST["pseudo"];
$tel = $_POST["tel"];
$email = $_POST["email"];
$ville = $_POST["ville"];
$password = $_POST["pwd"];

$req="INSERT INTO  client(cin,pseudo,tel,email,ville,pwd)
VALUES ( $cin, '$pseudo' ,$tel, '$email' , '$ville' , '$password');";
if ($conn -> query($req)===true)
{
    
    header("location:page-client.html"); 
}


?>
