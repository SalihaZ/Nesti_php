<?php

$mySession= new Session();
$mySession->disconnectUser();

header('Location:'. BASE_URL. 'connexion');
die();