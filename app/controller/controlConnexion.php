<?php
//récuperer les informations
$post_login = filter_input(INPUT_POST, "login"); //
$post_psw = filter_input(INPUT_POST, "password");

if ($post_login != false && $post_psw != false) { //afficher le login et psw si le formulaire est envoyé

    var_dump($post_login);
    var_dump($post_psw);

    if ($post_psw == "toto") {
        $connection = new Session();
        $connection->connectUser(1);
        header('Location:' . BASE_URL . 'recipe');
        die();
    }

}
# Ici faire une requetes pour verifier le mot de passe pour connexion