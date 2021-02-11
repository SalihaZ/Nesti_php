
<?php
session_start(); // obligatoire pour acceder au tableau global

include 'app/loader.php';

$loc = filter_input(INPUT_GET, "loc");

if (!$loc) {
    $loc = "recipe";

}

$action = filter_input(INPUT_GET, "action");
$mySession = new Session();

if ($mySession->isConnectUser()) {

    echo ('Je suis connecté');

} else {

    echo ('Je ne suis pas connecté');
}

//include('app/');
$file = PATH_CTRL . 'control';
switch ($loc) {

    case 'recipe':
        $file .= 'Recipe.php';
        //include('app/controller/controlRecipe.php');
        break;
    case 'article':
        $file .= 'Article.php';
        //include('app/controller/controlArticle.php');
        break;

    case 'user':
        $file .= 'User.php';
        //include('app/controller/controlUser.php');
        break;

    case 'statistic':
        $file .= 'Statistic.php';
        // include('app/controller/controlStatistic.php');
        break;

    case 'connexion':
        $file .= 'Connexion.php';
        //include('app/controller/controlConnexion.php');
        break;

    case 'logout':
        $file .= 'Deconnexion.php';
        //include 'app/controller/controlDeconnexion.php';
        break;
    case 'profile':
        $file .= 'Profile.php';
        //include 'app/controller/controlProfile.php';
        break;

    default:
        header("Location:" . BASE_URL . "/public/error/error404.html");
        die();
        break;
};

include $file;

include PATH_COMMON . 'template.php';
?>
