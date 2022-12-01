<?php

$mysqli = mysqli_connect("localhost","root","","moduleconnexion");
$message = "Les mots de passes ne sont pas identiques !";

if(isset($_POST['submit'])){
    if($_POST['password']==$_POST['password1']){
        $result = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('".$_POST['login']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['password']."');");
        
    }
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
        <link rel="stylesheet" href="CSS/inscription.css">
    </head>
    <body>

        <!--header-->
        <header>
        <a>TEST</a>    
        </header>

        <!--formulaire-->
        <div class="form">
        <form method="POST" action="" align="center">

            <label for="login">Login :</label><br>
            <input type="text" name="login" id="login" required="required"><br><br>

            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom" required="required"><br><br>

            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" id="prenom" required="required"><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password" required="required"><br><br>

            <label for="password1">confirmer votre mot de passe :</label><br>
            <input type="password" name="password1" id="password1" required="required"><br><br>

            <input type="submit" value="S'inscrire" name="submit"><br>
            <input type="submit" value="envoyer">
            <?php if(isset($_POST['submit'])){
                    if($_POST['password']!=$_POST['password1']){
                        echo $message;
                    }
            }
    ?>
        </form> 
        </div>
          
    </body>
</html>