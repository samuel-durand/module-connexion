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

    
    
    <title>menu</title>
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
    
    <section>
    <h1><?php echo "Bienvenue dans votre compte ".'<span>'.$_SESSION['login'].'</span>'; ?></h1>

    </section>

    <?php include 'footer.php'; ?>


</body>
</html>


