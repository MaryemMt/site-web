<?php
$conn=new mysqli("localhost","root","","location de voiture") or die ('connection faild');

if(isset($_POST['sup'])){
    $id=$_POST['id_v'];
    
    $req="SELECT id from voiture where id=$id";
$res=$conn->query($req);
if ($conn->query($req)==true)
{   $req2="DELETE  FROM voiture WHERE id=$id";
    $res2=$conn->query($req2);
    if($res2==true){
      header("location:voiture à louer.php");
    }
}else{
    echo'
    <script>
    alert("suppression invalide ");
</script>';
}
}


?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>suppression</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
  
    <section>
        <div class="imgbx">
<img src="img/location2.jpg">
        </div>
        <div class="contentbx">
<div class="formbx">
<div class="imgbx">
            <img src="img/2.jpg">
        </div>
    <h2>Suppression</h2>
    <form action="" method="post">
        <div class="inputbx">
            <span>ID</span>
            <input type="text" name="id_v">
        </div> 
        
        <div class="inputbx">
            <input type="submit" value="supprimer" name="sup">
        </div>
        
    </form>

        </div>
        </div>
    </section>
</body>
</html>