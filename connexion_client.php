<?php
session_start();
$conn = new mysqli("localhost", "root", "", "location de voiture");
$email=$_POST["email"];

$sql="SELECT email
      from  client
      where '$email'=email";

$result1=$conn->query($sql) ;
 if ($result1->num_rows > 0) {
    header("location:page-client.html");

      } 
?>