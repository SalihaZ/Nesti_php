
<?php
$file = PATH_VIEW . 'content';
/**
 * @var string $loc
 * @var string $action
 */
switch ($loc) {
    case 'recipe':

        switch ($action) {
            case 'edit':
                $file .= 'RecipeEdit.php'; // $file=$file. equiv à $file.=
                break;
            case 'create':
                $file .= "RecipeCreate.php";
                break;

            default:
                $file .= "Recipe.php";
                break;
        }
        break;
    case 'article':
        switch ($action) {
            case 'edit':
                $file .= 'ArticleEdition.php'; // $file=$file. equiv à $file.=
                break;
            case 'import':
                $file .= "ArticleImport.php";
                break;
            case 'order':
                $file .= "ArticleOrder.php";
                break;
            default:
                $file .= "Article.php";
                break;
        }

        break;
    case 'user':
        switch ($action) {
            case 'edit':
                $file .= 'UserEdit.php'; // $file=$file. equiv à $file.=
                break;
            case 'create':
                $file .= "UserCreate.php";
                break;

            default:
                $file .= "User.php";
                break;
        }
        break;
        break;
    case 'statistic':
        $file .= "Statistic.php";
        break;
    case 'deconnection':case 'connexion':
        $file .= "Session.php";
        break;
    case 'profile':
        $file .= "Profile.php";
        break;
    default:

        include 'public/error/error404.html';
        break;
}
include $file;
?>
