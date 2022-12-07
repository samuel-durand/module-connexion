<?php
include 'connexion.php'

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <title>Connexion</title>
</head>
<body>
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

    <main>
        <form action="" method="get" align="center" >
            <label for="login">Login :</label><br>
            <input type="text" name="login" class="champ" id="login" placeholder="Login" required="required"><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" class="champ" id="password" placeholder="password" required="required"><br><br>

            <input type="submit" value="Valider" name="submit">
        </form>
    </main>
</body>
</html>
