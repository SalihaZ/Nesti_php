<?php

$model = new ModelRecipe(); //créer model recette



# Récupérer la variable action filter input pour

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera affichée dans l'url

switch ($action) {

    case 'create':
        // Rechercher le nom de l'auteur ( la personne qui est connecté). 
        $session = new Session();
        $id_author = $session->getIdUser();
        // TODO faire une requete pour afficher le nom de l'utilisateur. 
        // TODO Vérifier que l'utilisateur est un chef sinon il n'a pas le droit
        if($id_author <= 0){
            // S'il n'est connecté 
            // redirection vers la page de connexion
            header('Location:' . BASE_URL . 'connexion');
            die();
        }
var_dump($_POST);
        $post_submit = filter_input(INPUT_POST, "submit");
        if($post_submit == 'ok'){
           
            try{
                echo 'Le formulaire a été envoyé';
            // récupérer les données
            $name = filter_input(INPUT_POST, 'name_recipe');
            $difficulty = filter_input(INPUT_POST, 'difficulty');
            $time= filter_input(INPUT_POST, 'time');
            $state= filter_input(INPUT_POST, 'state');
            $number_people= filter_input(INPUT_POST, 'number_people');
            
            $recipe = new Recipe();  
            $recipe->setIdChef($id_author);
            // les vérifiés
            if($state){
                if($state=="a"||$state=="b"||$state=="w"){
                    $recipe->setState($state);
                }else{
                    throw new Exception("Etat invalide");
                }
            }else{
                throw new Exception("Etat obligatoire");

            }
            if($name){
                // Exemple : verifions la longueur 
                if(strlen($name) > 120){
                    throw new Exception("nom de recette trop long");
                }else{
                    // ok 
                    $recipe->setName($name);
                }
            }else{
                throw new Exception("Donner un nom à la recette");
            }
            if($difficulty){
                $difficulty = (int)$difficulty;
                if(is_int($difficulty) && $difficulty <= 5 && $difficulty >= 0 ){
                    // ok 
                    $recipe->setDifficulty($difficulty);
                }else{
                    throw new Exception("La difficulté doit être un nombre compris entre 0 et 5");     
                }
            }else{
                throw new Exception("La difficulté est obligatoire");
                
            }
            if($time){
                $time=(int)$time;
                if(is_int($time) && $time>0 && $time <=5000) {
                
                    $recipe-> setTime($time);
                }else{
                    throw new Exception ("La durée doit être comprise entre 1 et 5000 minutes");
                }
            }else{
                throw new Exception ("Le champ temps de préparation est obligatoire");
            }

            if($number_people){
                $number_people=(int)$number_people;
                if(is_int($number_people) && $number_people>=1 && $number_people <=999){
                    $recipe-> setNumberPeople($number_people);
                }else{
                    throw new Exception ("Le nombre de personnes doit être compris entre 1 et 999");
                }
            }else{
                throw new Exception("Vous devez remplir le nombre de personnes");
            }

            }catch(Exception $e){
                $message =   $e->getMessage();
               
            }
            if(!isset($message)){ 
                // S'il n'existe pas equivaux à isset($message)==false oubien faire un falg
                // Insertion que s'il n'y a pas d'erruer, que si la recette valide
                try{
                    $id_recipe = $model->insert($recipe);
                    $success = "Recette numero ". $id_recipe. " a bien été créée";
                    header('Location:'.BASE_URL."/recipe/edit/".$id_recipe);
                    exit(); 
                    
                }catch(PDOException $e){
                    $message = $e->getMessage();
                }
    
              
            }
            


            // Faire un insert 
            // Soit un message : success ou error 
        }else{
            echo 'Pas de formulaire envoyé';
            $model= new ModelUser();
            $session=new Session();
            $id_user= $session->getIdUser();
            $user=$model->readOne($id_user) ;
            $author=$user->getFirstName()." ".$user->getLastName();
        }
        break;

    case 'edit':               
        $id_recipe = filter_input(INPUT_GET, 'id'); // .htaccess
        if($id_recipe > 0){
            $recipe = $model->readOne($id_recipe);
            $array_preparation = ['prep 1', 'prep 2', 'prep 3'];//$moedl->readPreparation($id_recipe);
            var_dump($recipe);
        }else{
            echo 'Erreur, recette introuvable';
            die;
        }
        //Add ingredient JQuery
        extract($_POST);
        if($action)
        break;
        
    case 'delete':

        $id_recipe = filter_input(INPUT_GET, 'id'); // .htaccess
        if($id_recipe > 0){
            $recipe = $model->deleteRecipe($id_recipe);
            $array_preparation = ['prep 1', 'prep 2', 'prep 3'];//$moedl->readPreparation($id_recipe);
            var_dump($recipe);
        }else{
            echo 'Erreur, recette introuvable';
            die;
        }
        echo ("recette supprimée");
        die();

        break;

    default:
        // Read
        //methode qui donne la liste des recettes
        $array_recipe = $model->readAll();
       

        break;

}
