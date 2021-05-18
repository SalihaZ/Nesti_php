<?php

/**
 * @var mixed $mySession
 */
$mySession->disconnectUser();
$message = "Déconnexion réussie";
$color="green";
header('Location:'. BASE_URL. 'connexion');// redirection vers la page connexion
die();