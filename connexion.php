<?php

session_start();
//$mysqli = new mysqli("localhost","root","","moduleconnexion",3307);



if(isset($_GET['submit'])){
    $result = mysqli_query($mysqli,"SELECT * FROM `utilisateurs` WHERE `login`='".$_GET['login']."' and `password`='".$_GET['password']."'; ");
    $row = $result->fetch_all();
    if($row==true){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['password'] = $_GET['password'];
        header('Location: menu.php');
        
    }
}

// plesk connect


$mysqli = new mysqli("localhost","samuel1","9U!ok81z4","samuel-durand_moduleconnexion",3306)


 

?>


