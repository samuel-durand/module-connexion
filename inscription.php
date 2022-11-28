<?php

$bdd = new PDO('mysql:host=localhost;dbname=moduleconnexion', 'root', '');
if(isset($_POST['envoi'])){
    if(!empty($_POST['login']) AND !empty($_POST['password']));
    $pseudo = htmlspecialchars($_POST['login']);
    $mdp = sha1($_POST['password']);
    $insertUser = $bdd->prepare('INSERT INTO utilisateurs(prenom, password)VALUES(?, ?)');
    $insertUser->execute(array($prenom, $password));
}



?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>creation de compte</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="style.css">
    </head>
    <body>

        <!--formulaire-->
        <div>
            <table>
            <form method="POST" action="" align="center">
            <label for="pseudo">pseudo</label>
            <input type="text" name="prenom" autocomplete="off">
            <br>
            <label for="pseudo">password</label>
            <input type="password" name="password" autocomplete="off">
            <br>
            <input type="submit" name="envoie">
            </table>
            </form>
        </div>
          
    </body>
</html>