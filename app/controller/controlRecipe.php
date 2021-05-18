<?php
//include('app/entity/Recipe.php'); A supprimer remplacé dans loader
//include('app/model/ModelRecipe.php');A supprimer
$model = new ModelRecipe(); //créer model recette

//A supprimer
//var_dump($recipe);

//$recipe=> setName('Crepes');
//$recipe=> setId(5);

//$recipe2= new Recipe();

//$recipe2=> setName('Gateau');
//$recipe2=> setId(4);

# Récupérer la variable action filter input pour

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera afficher dans l'url

switch ($action) {

    case 'create':
        echo ("test");

        break;

    case 'edit':
        echo (" edition");
        
        $id_recipe = filter_input(INPUT_GET, 'id'); // .htaccess
        if($id_recipe > 0){
            $recipe = $model->readOne($id_recipe);
            var_dump($recipe);
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
        $arrayRecipe = $model->readAll();
        var_dump($arrayRecipe);

        break;

}
