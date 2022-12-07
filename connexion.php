<?php



//$mysqli =mysqli_connect("localhost:3306","root","","moduleconnexion");
$mysqli = new mysqli("localhost:3306", "samuel1", "9U!ok81z4", "samuel-durand_moduleconnexion");



session_start();
if(isset($_GET['submit'])){
    $result = mysqli_query($mysqli,"SELECT * FROM `utilisateurs` WHERE `login`='".$_GET['login']."' and `password`='".$_GET['password']."'; ");
    $row = $result->fetch_all();
    if($row==true){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['password'] = $_GET['password'];
        header('Location: menu.php');
        
    }
}

if(isset($_POST['submit'])){
    if($_POST['password']==$_POST['password1']){
        $result = mysqli_query($mysqli,"INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('".$_POST['login']."','".$_POST['nom']."','".$_POST['prenom']."','".$_POST['password']."');");
        
    }
}

if (isset($_POST['submit'])) {

    if ($_POST['password'] == $_POST['verify-password']) {
        $requete = mysqli_query($mysqli, "INSERT INTO utilisateurs (`login`,`nom`,`prenom`,`password`) VALUES ('" . $_POST['login'] . "','" . $_POST['nom'] . "','" . $_POST['prenom'] . "','" . $_POST['password'] . "');");
        // echo "OK";
        header('Location: login.php');
    } else {
        echo "Les mots de passe ne sont pas identiques !";
    }
}


// plesk connect




 

?>


