<?php
include 'connexion.php';

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="menu.css">

    
    
    <title>menu</title>
</head>
<body>
     <?php include 'header.php' ?>
        <button ><?php echo "<a href='login.php'<button>deconnexion</button></a>"; ?></button>
    </header>
    
    <section>
    <h1><?php echo "Bienvenue dans votre compte ".'<span>'.$_SESSION['login'].'</span>'; ?></h1>

    </section>

    <?php include 'footer.php'; ?>


</body>
</html>