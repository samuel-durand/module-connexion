<?php

$mysqli = new mysqli("localhost:3306", "samuel1", "9U!ok81z4", "samuel-durand_moduleconnexion");

        if(!$mysqli) {
            echo "Connexion non établie.";
            exit;
        }
?>