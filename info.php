<?php

@$nom = $_POST["nom"];
@$prenom = $_POST["prenom"];
@$pseudo = $_POST["login"];
@$password = $_POST["password"];
@$passwordConf = $_POST["passconf"];
@$pass_crypt = md5($_POST["password"]);


?>
