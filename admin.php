<?php
session_start();
if(isset($_POST['valider'])){
    if(!empty($_POST['pseudo']) AND !empty($_POST['mdp'])){
        $pseudo_par_defaut = "admin";
        $mdp_par_default = "admin";

        $pseudo_saisi = htmlspecialchars($_POST['pseudo']);
        $mdp_saisi = htmlspecialchars($_POST['mdp']);
        
        if($pseudo_saisi == $pseudo_par_defaut AND $mdp_saisi == $mdp_par_default){
            $_SESSION['mdp'] = $mdp_saisi;
            header('Location: inscription.php');

        }else{
            echo "veuiller";
        }
        }else{
            echo "mdp faux";
        }

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