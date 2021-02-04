
<?php
include('app/config.php');
$loc = filter_input(INPUT_GET, "loc");
$action  = filter_input(INPUT_GET, "action");
//controlleur de session >>
//include('app/controllerSession.php');//est ce que le user est déjà connectée ou pas

//include('app/');
switch ($loc) {
    case 'recipe':
      include('app/controller/controlRecipe.php');
        break;
    case 'article':
      include('app/controller/controlArticle.php');
        break;

      case 'user':
      include('app/controller/controlUser.php');
        break;

      case 'statistic':
      include('app/controller/controlStatistic.php');
        break;

      case 'connexion':
      include('app/controller/controlConnexion.php');
        break;

      case 'session':
      include('app/controller/controlSession.php');
        break;

      case 'deconnexion':
      include('app/controller/controlDeconnexion.php');
        break;

    default: 
    include('public/error/error404.html');
        break;
}
include('app/view/common/template.php');
  ?>
