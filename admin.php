<?php
        $conn = mysqli_connect('localhost', 'root', '', 'moduleconnexion');
        if(!$conn) {
            echo "Connexion non établie.";
            exit;
        }
?>


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="">
    </head>
    <body>
        <form method="POST" action="" align="center">
            <input type="text" name="pseudo" placeholder="pseudo" autocomplete="off"><br>
            <br>
            <input type="password" name="mdp" placeholder="password">
            <br>
            <input type="submit" name="valider"><br>
        </form>
    </body>
</html>