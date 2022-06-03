<?php
session_start();
if(!isset($_SESSION['user']))
    header('Location:signin.php');
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bonjour!</title>
    <link rel="stylesheet" href="signin.css">
</head>
<body> 
    <h1>Bonjour ! <?php echo $_SESSION['user']; ?></h1>
    <a href="deconnexion.php" class="btn btn-danger btn-lg">Déconnexion</a>
</body>
</html>