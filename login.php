<?php
include 'connexion.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Connexion</title>
</head>
<body>
    <?php include 'header.php';?>

    <main>
        <form action="" method="get">
            <label for="login">Login :</label><br>
            <input type="text" name="login" class="champ" id="login" required="required"><br><br>

            <label for="password">Mot de passe :</label><br>
            <input type="password" name="password" class="champ" id="password" required="required"><br><br>

            <input type="submit" value="Valider" name="submit">
        </form>
    </main>
    <?php include 'footer.php'; ?>
</body>
</html>