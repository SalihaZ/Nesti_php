<?php
include('app/entity/Recipe.php');
$model = new Recipe ();//créer model recette
$recipe = $model -> readall(); //methode qui donne la liste des recettes


var_dump($recipe);


switch($recipe){
    //découpage intra recette pour afficher les actions créer et éditer
}

?>
