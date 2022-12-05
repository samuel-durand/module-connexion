<?php

$mysqli = mysqli_connect("localhost","root","","moduleconnexion");

        if(!$link) {
            echo "Connexion non établie.";
            exit;
        }
?>