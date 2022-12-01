<?php

session_start();
$mysqli = new mysqli("localhost","root","","moduleconnexion");



if(isset($_GET['submit'])){
    $result = mysqli_query($mysqli,"SELECT * FROM `utilisateurs` WHERE `login`='".$_GET['login']."' and `password`='".$_GET['password']."'; ");
    $row = $result->fetch_all();
    if($row==true){
        $_SESSION['login'] = $_GET['login'];
        $_SESSION['password'] = $_GET['password'];
        header('Location: menu.php');
        
    }
}
 

?>


