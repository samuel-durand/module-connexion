<?php

include 'connexion.php';



?>


<!DOCTYPE html>

<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>creation de compte</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" href="./css/styles.css" />
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
                    <li><a href="deconnexion.php">deconnexion</a></li>
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
            <input type="password" name="verify-password" id="password1" placeholder="confirmer password" required="required"><br><br>

            <input type="submit" value="S'inscrire" name="submit"><br>
<<<<<<< HEAD
=======
            
>>>>>>> 2ed6f1b656850fd4c87046e34923a59fb7b086b6
        </form> 
        </main>


        <footer>
            <div>
                <ul>
                    <li><a href="https://github.com/samuel-durand/module-connexion" target="_blank">github</a></li>
                </ul>
            </div>
        </footer>

        
          
    </body>
</html>