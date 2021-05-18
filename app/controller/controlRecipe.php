<?php

$model = new ModelRecipe(); //créer model recette



# Récupérer la variable action filter input pour

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera affichée dans l'url

switch ($action) {

    case 'create':
        echo ("test");

        break;

    case 'edit':
        echo (" edition");
        
        $id_recipe = filter_input(INPUT_GET, 'id'); // .htaccess
        if($id_recipe > 0){
            $recipe = $model->readOne($id_recipe);
            //var_dump($recipe);
        }else{
            echo 'Error, recette introuvable';
            die;
        }
        
        break;
        
    case 'delete':
        echo ("recette supprimée");
        die();

        break;

    default:
        // Read
        //methode qui donne la liste des recettes
        $array_recipe = $model->readAll();
       

        break;

}
