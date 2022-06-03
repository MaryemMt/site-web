<!DOCTYPE html>
<html lang="en">

<?php 
session_start(); 
require 'connection.php';
$conn = Connect();
?> 
<head>
    <style>
        .style{
            background:#F0FFFF;
            
            border-radius: 100px;
   height:600px;
   width:550px;
  display:inline-block;
 
        }
        </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nos voitures</title>
    <link rel="stylesheet" href="nos voiture.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.4/css/fontawesome.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.8.1/slick-theme.min.css">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>

<body>
    <section class=" header " id="header ">
        <div class="nav-bar ">
            <div class="logo ">

                <a href="# "> Location voiture
            </div>
            <div class="menu " >
                <ul>             
                <li> 
                         <a href="page.html" calss="active ">acceuil</a>
                </li>

                <li>
                    <a href="voiture à louer.php"> nos voitures </a>
                </li>
                <li>
                    <a href="# ">contactez-nous</a>
                </li>
                <li><a href="# "><i class="fa fa-user-circle "></i>client</a>
                    <div class="liste ">
                        <ul>
                            <li> <a href="signin_client.php">S'identifier</a></li>
                            <li> <a href="signup_client.php">S'inscrire</a></li>
                        </ul>
                    </div>
                </li>
                <li><a href="# "><i class="fa fa-user-circle "></i>admin</a>
                    <div class="liste ">
                        <ul>
                            <li> <a href="signin_admin.php">S'identifier</a></li>
                        </ul>
                    </div>
                </li>
                </ul>
            </div>

            <div class="social-media ">
                <ul>
                    <li>
                        <a href="# "><i class="fa fa-facebook "></i></a>
                    </li>
                    <li>
                        <a href="# "><i class="fa fa-twitter "></i></a>
                    </li>
                    <li>
                        <a href="# "><i class="fa fa-instagram "></i></a>
                    </li>
                </ul>
            </div>
        </div>
</section>
<section>

<div id="sec2" style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">Available Cars</h3>
<!-- <br> -->
        <section class="menu-content">
        <?php
                 $sql1 = "SELECT * FROM voiture WHERE disponibilité='yes'";
                 $result1 = mysqli_query($conn,$sql1);
 
                 if(mysqli_num_rows($result1) > 0) {
                     while($row1 = mysqli_fetch_assoc($result1)){
                         $id = $row1["id"];
                         $marque = $row1["marque"];
                         $plaque = $row1["plaque"];
                         $img = $row1["img"];
                         $prix = $row1["prix"];
                         $disponibilité = $row1["disponibilité"];
                ?>
                <div class="style">
            <!-- <div class="row"> -->
                <!-- <div class="col-md-4"> -->
                    <?php
                
                echo"<img class='card-img-top' class='img' src=".$img." alt='Card image cap'>";
                ?>
                 <a  style="text-decoration:none;" href="details.php?id=<?php echo($id) ?>" >
                    <!-- </div>
                </div>
            </div> -->
            
            
            <!-- <div class="sub-menu"> -->
                <h5><b> <?php echo $marque; ?> </b></h5>
                <h6> AC Fare: <?php echo ("marque :" . $marque . " "); ?></h6>
            <h6> AC Fare: <?php echo ("prix :" . $prix . " ."); ?></h6>
             <!-- <h6> Non-AC Fare:--> <?php 
                
                // echo ("Rs. " . $non_ac_price . "/km & Rs." . $non_ac_price_per_day . "/day"); ?> </h6>
                

            
            </div>

            </a>
    
            <?php }}
            else {
                ?>
<h1> No cars available :( </h1>
                <?php
            }
            
            ?>                                   
                    
</section>


<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>


</html>