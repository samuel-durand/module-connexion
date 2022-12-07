<?php include 'header.php'; ?>
<?php // pour sécuriser la page admin à partir de la base d'adresse       
    if (!$_SESSION ['loginOK']) {  // si la session n'est pas ouverte
        header('Location: connexion.php');
    }else if ($user != 'admin') { // si l'utilisateur n'est pas admin
        header('Location: login.php');
    }
?>
<?php $request = $mysqli->query("SELECT * from `utilisateurs`;");?> <!-- requête pour récupérer les données de la table utilisateurs -->


<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/styles.css" />
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