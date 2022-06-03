<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>s'authentifier</title>
    <link rel="stylesheet" href="details.css">
</head>
<body>
    <section>
    <div class="imgbx">
<img src="img/location2.jpg">
        </div>
        <div class="contentbx">
<div class="formbx">
    
    <h2>connexion</h2>
    <form action="connexion_client.php" method="post">
        <div class="inputbx">
            <span>Email</span>
            <input type="text" name="email">
        </div>
        <div class="inputbx">
            <span>mot de passe</span>
            <input type="password" name="password">
        </div>
        <div class="remember">
          <label> <input type="checkbox" name=""> Remember me</label>  
        </div>
        <div class="inputbx">
            <input type="submit" value="s'identifier" name=""><!--<a href="page-client.html"> s'identifier</a>-->
        </div>
        <div class="inputbx">
            <p>vous n'avez pas de compte ?<a href="signup_client.php">S''inscrire'</a></p>
        </div>
    </form>

        </div>
        </div>
    </section>
</body>
</html>