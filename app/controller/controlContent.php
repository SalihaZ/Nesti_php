
<?php
$file = PATH_VIEW . 'content';
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
        $file .= "Article.php";
        break;
    case 'user':
        $file .= "User.php";
        break;
    case 'statistic':
        $file .= "Statistic.php";
        break;
    case 'deconnection': case 'connexion':
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
