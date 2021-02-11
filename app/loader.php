<?php
include 'app/config.php';
//include '/'//fonctions , gestion url

include PATH_MODEL . 'Connection.php';

function my_autoloader($class)
{
    echo ("chargement de la classe " . $class);

    

    if (substr($class, 0, 5) == "Model") {
        include PATH_MODEL . $class . '.php';
    } else {
        include 'app/entity/' . $class . '.php';
    }

}

spl_autoload_register('my_autoloader');
