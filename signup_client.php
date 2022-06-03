<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inscription</title>
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
            <img src="img/location2.jpg">
        </div>
    <h2>inscription</h2>
    <form action="inscription_client.php" method="post">
        <div class="inputbx">
            <span>Ncin</span>
            <input type="text" name="cin">
        </div> 
        <div class="inputbx">
            <span>pseudo</span>
            <input type="text" name="pseudo" >
        </div> 
        
        <div class="inputbx">
            <span>N°téléphone</span>
            <input type="text" name="tel">
        </div>
        <div class="inputbx">
            <span>Email</span>
            <input type="text" name="email">
        </div>

        <div class="inputbx">
            <span>ville</span>
            <input type="text" name="ville">
        </div>
        
        <div class="inputbx">
            <span>mot de passe</span>
            <input type="password" name="pwd">
        </div>
        
        <div class="inputbx">
            <input type="submit" value="s'inscrire" name="">
        </div>
        
    </form>

        </div>
        </div>
    </section>
</body>
</html>