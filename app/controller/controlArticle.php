<?php

$model = new ModelArticle(); //créer model pour article

# Récupérer la variable action filter input pour l'afficher dans l'url

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera affichée dans l'url

switch ($action) {
    case 'create':
        echo ("larticle a bien été créé");
        break;
    case 'edit':
        echo ("edition d'un article");
        $id_extern = filter_input(INPUT_GET, 'id'); // .htaccess
        if ($id_extern > 0) {
            $article = $model->readOne($id_extern);
        } else {
            echo 'article introuvable';
        }
        break;
    case 'delete':
        echo 'article supprimé';
        break;
    default:
        $array_article = $model->readAll();
        //var_dump($array_article);
        break;
}
