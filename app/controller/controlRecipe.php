<?php
//include('app/entity/Recipe.php'); A supprimer remplacé dans loader
//include('app/model/ModelRecipe.php');A supprimer
$model = new ModelRecipe ();//créer model recette
$recipe = $model -> readAll(); //methode qui donne la liste des recettes


//var_dump($recipe);



//$recipe=> setName('Crepes');
//$recipe=> setId(5);

$recipe2= new Recipe();

//$recipe2=> setName('Gateau');
//$recipe2=> setId(4);

$arrayRecipe= [$recipe, $recipe2, $recipe, $recipe];