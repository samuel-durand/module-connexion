<?php

include 'connexion.php'



?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>creation de compte</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="inscription.css">
    </head>
    <body>

        <!--header-->
        <header>
        <div class="menu">
            <div class="list">
                <ul>
                    <li><a href="menu.php">menu</a></li>
                    <li><a href="login.php">login</a></li>
                    <li><a href="inscription.php">inscription</a></li>
                </ul>
            </div>
        </div>
    </header>

    

        <!--formulaire-->
        <main>
        <form method="POST" action="" align="center">

            <label for="login">Login :</label><br>
            <input type="text" name="login" id="login" placeholder="pseudo" required="required"><br><br>

            <label for="nom">Nom :</label><br>
            <input type="text" name="nom" id="nom" placeholder="Nom" required="required"><br><br>

            <label for="prenom">Prénom :</label><br>
            <input type="text" name="prenom" id="prenom" placeholder="Prénom" required="required"><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" id="password" placeholder="password" required="required"><br><br>

            <label for="password1">confirmer votre mot de passe :</label><br>
            <input type="password" name="password1" id="password1" placeholder="confirmer password" required="required"><br><br>

            <input type="submit" value="S'inscrire" name="submit"><br>
            <?php if(isset($_POST['submit'])){
                    if($_POST['password']!=$_POST['password1']){
                        echo $message;
                    }
            }
    ?>
        </form> 
        </main>

        
          
    </body>
</html>