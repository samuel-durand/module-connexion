<?php

        $link = mysqli_connect('localhost', 'nadia', '*moduleconnexion*', 'nadia-hazem_moduleconnexion');

        if(!$link) {
            echo "Connexion non établie.";
            exit;
        }
?>