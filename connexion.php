<?php

session_start();
//$mysqli = new mysqli("localhost","root","","moduleconnexion",3307);
$mysqli = new mysqli("localhost:3306", "samuel1", "9U!ok81z4", "samuel-durand_moduleconnexion");



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


// plesk connect




 

?>


