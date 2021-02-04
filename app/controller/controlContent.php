
<?php

switch ($loc) {
    case 'recipe':

        switch ($action) {
            case 'edit':
                include(PATH_VIEW. "/contentRecipeEdit.php");
                break;
            case 'create':
                include(PATH_VIEW. "/contentRecipeCreate.php");
                break;

            default:
                include(PATH_VIEW."/contentRecipe.php");
                break;
        }
    case 'article':
        include(PATH_VIEW."/contentArticle.php");
        break;
    case 'user':
        include(PATH_VIEW."/contentUser.php");
        break;
    case 'statistic':
        include(PATH_VIEW."/ContentStatistic.php");
        break;
    default:
        header("Location:".BASE_URL."/public/error/error404.html");
        break;
    }
      
  ?>
