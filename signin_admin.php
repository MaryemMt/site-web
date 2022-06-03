<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Authentification</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <section>
    <div class="imgbx">
<img src="img/location2.jpg">
        </div>
        <div class="contentbx">
<div class="formbx">
    
    <h2>Connexion</h2>
    <form action="connexion_admin.php" method="post">
    <div class="inputbx">
          
        <div class="inputbx">
            <span>User Name</span>
            <input type="text" name="userName" >
        </div> 
        <div class="inputbx">
            <span>mot de passe</span>
            <input type="password" name="pwd">
        </div>
        
        <div class="remember">
          <label> <input type="checkbox" name=""> Remember me</label>  
        </div>
        <div class="inputbx">
            <input type="submit" value="s'identifier" name="">
        </div>
       <!-- <div class="inputbx">
            <p>vous n'avez pas de compte ?<a href="signup_admin.php">S'inscrire</a></p>
        </div>-->
    </form>

        </div>
        </div>
    </section>
</body>
</html>