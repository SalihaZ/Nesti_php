<?php

$model = new ModelArticle(); //créer model pour article

# Récupérer la variable action filter input pour l'afficher dans l'url

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera affichée dans l'url
switch ($action) {
    case 'create':
        echo ("l'article a bien été créé");
        break;
    case 'edit':
        $id_article = filter_input(INPUT_GET, 'id'); // .htaccess
        if ($id_article > 0) {
            // Si formulaire recu
            $submit = filter_input(INPUT_POST, 'submit');
            if($submit == "send"){
                // Update              
                $new_name = filter_input(INPUT_POST, 'user_article');
                if($new_name != false && Article::checkName($new_name)){
                    if($model->update($id_article, $new_name)){
                        $success = "Mise à jour réussie";
                    }else{
                        $message = "Une erreur s'est produite au moment de la mise à jour";
                    }
                    //
                }else{
                    $message = "Nom invalide";
                }
            
            }else{
                echo "afficher le formulaire";
            }



            $article = $model->readOne($id_article);
            $article->setPrice($model->articlePrice($id_article));
            $article->setStock($model->articleStock($id_article));
        } else {
            echo 'article introuvable';
        }
        break;
    case 'delete':
        echo 'article supprimé';
        break;
    case 'order':
        echo('ici c\'est les commandes');
        $model= new ModelOrder();
        $array_order = $model->readAll();
        var_dump($array_order);
        break;
    default:
        $array_article = $model->readAll();
        foreach ($array_article as $article) {
           $id_extern = $article->getIdExtern();
           $price = $model->articlePrice($id_extern);
           $article->setPrice($price);
        }
        
        //var_dump($array_article);
        break;
}
