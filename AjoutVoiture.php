<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ajout voiture</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <section>
        <div class="imgbx">
<img  src="img/location2.jpg">
        </div>
        <div class="contentbx">
<div class="formbx">
<div class="imgbx">
            <img src="img/2.jpg">
        </div>
    <h2>Ajout voiture</h2>
    <form action="AJOUT.php" method="post" enctype="multipart/form-data">
        <div class="inputbx">
            <span>Marque</span>
            <input type="text" name="marque">
        </div> 
        <div class="inputbx">
            <span>Plaque</span>
            <input type="text" name="plaque" >
        </div> 
        
        <div class="inputbx">
            <span>Image</span>
            <input type="file" name="img"  /><br/>
        </div>
        <div class="inputbx">
            <span>Prix</span>
            <input type="text" name="prix">
        </div>

        <div class="inputbx">
            <span>Disponibilité</span>
            <input type="text" name="disponibilité">
        </div>

        <!--<div class="inputbx">
                        <span>choisissez une image</span><br>
                    </div>
                    <input type="file" name="image" /><br/>
        </div>-->
       
        <div class="inputbx" style=".inputbx input[type="submit"]{
  background: #eb0b0b9c;
  color: #fff;
  outline: none;
  border: none;
  font-weight: 500;
  cursor: pointer; 
  
}">
                        <input type="submit" value="Ajouter" name=""><br>
                    </div>
    </form>

      
    </section>
</body>
</html>