<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="details.css">
</head>

<body>
    <section>
        <div class="imgbx">
            <img src="img/location2.jpg">
        </div>
        <div class="contentbx">
            <div class="formbx">
                <?php
        if(isset($_GET['reg_err']))
        {
            $err = htmlspecialchars($_GET['reg_err']);
            switch($err)
            {
                case 'success':
                    ?>
                <div class="alert alert-success">
                    <strong>Succès</strong>inscription réussie !
                </div>
                <?php
                break;

                case 'password':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> mot de passe différent
                </div>
                <?php
                break;

                case 'email':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email non valide
                </div>
                <?php
                break;

                case 'email_length':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> email trop long
                </div>
                <?php 
                break;

                case 'pseudo_length':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> pseudo trop long
                </div>
                <?php 
                case 'already':
                ?>
                <div class="alert alert-danger">
                    <strong>Erreur</strong> compte deja existant
                </div>
                <?php 

            }
        }
        ?>
                <h2>Réservation</h2>
                <form action="reservation.php" method="post">
                    <div class="inputbx">
                        <span>Départ</span>
                        <input type="text" name="depart">
                    </div>
                    <div class="inputbx">
                        <span>Retour</span>
                        <input type="text" name="retour">
                    </div>

                    <div class="inputbx">
                        <span>Date de départ</span>
                        <input type="date" name="dateD">
                    </div>
                    <div class="inputbx">
                        <span>Heure de départ</span>
                        <input type="text" name="heureD">
                    </div>

                    <div class="inputbx">
                        <span>Date de Retour </span>
                        <input type="date" name="dateR">
                    </div>

                    <div class="inputbx">
                        <span>Heure de retour </span>
                        <input type="text" name="heureR">
                    </div>
        <br> 
                    <div class="inputbx">
                        <input type="submit" value="Réserver" name=""><br>
                        <br>
                        <input type="reset" value="Réinitialiser" name="">
                    </div>

                </form>

            </div>
        </div>
    </section>
</body>

</html>