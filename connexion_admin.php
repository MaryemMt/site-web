<?php
session_start();
$conn = new mysqli("localhost", "root", "", "location de voiture");
$userName=$_POST["userName"];

$sql="SELECT userName
      from  admin
      where '$userName'=userName";

$result1=$conn->query($sql) ;
 if ($result1->num_rows > 0) {
        header("location:page-admin.html");
      } 
?>