<?php

$model = new ModelUser(); //créer model recette



# Récupérer la variable action filter input pour

$action = filter_input(INPUT_GET, "action"); #"action"= c'est l'information qui sera affichée dans l'url

switch ($action) {

    case 'create':
        // Rechercher le nom de l'auteur ( la personne qui est connecté). 
        $session = new Session();
       // $id_author = $session->getIdUser();
        // TODO faire une requete pour afficher le nom de l'utilisateur. 
        // TODO Vérifier que l'utilisateur est un chef sinon il n'a pas le droit
        if($id_author <= 0){
            // S'il n'est pas connecté 
            // redirection vers la page de connexion
            header('Location:' . BASE_URL . 'connexion');
            die();
        }

        $post_submit = filter_input(INPUT_POST, "submit");
        if($post_submit == 'ok'){
           try{
                echo 'Le formulaire a été envoyé';
            // récupérer les données
            $first_name = filter_input(INPUT_POST, 'first_name');
            $last_name = filter_input(INPUT_POST, 'last_name');
            //$role= filter_input(INPUT_POST, 'role');
            $etat= filter_input(INPUT_POST, 'state');
            
            $user= new User();  
            $user->setIdUser($id_user);
            $user->setEmail($email);
            $user->setPassword($password);    
           // if($password){
                
              //  if(strlen($password)> 8 &&() ){
                    // ok 
               //     $user->setPassword($password);
             //   }else{
             //       throw new Exception("Le mot de passe est invalide");     
            //    }
           // }else{
             //   throw new Exception("Le mot de passe est obligatoire");
                
          //  }
        
            if(!isset($message)){ 
                // S'il n'existe pas equivaux à isset($message)==false oubien faire un falg
                // Insertion que s'il n'y a pas d'erruer, que si la recette valide
                try{
                    $id_user = $model->insert($user);
                    $success = "L'utilisateur numero ". $id_user. " a bien été créé"; 
                    
                }catch(PDOException $e){
                    $message = $e->getMessage();
                }
    
              
            }else{
            echo 'Pas de formulaire envoyé';
        }
        
            // Faire un insert 
            // Soit un message : success ou error 
        }catch(Exception $e){
            $message =   $e->getMessage();
           
        }
    }
        break;


    case 'edit':
               
        $id_user = filter_input(INPUT_GET, 'id'); // .htaccess
        if($id_user > 0){
            $user = $model->readOne($id_user);
            var_dump($user);
        }else{
            echo 'Error, user introuvable';
            die;
        }
        
        break;
        
    case 'delete':
        echo ("utilisateur supprimé");
        die();

        break;

    default:
        // Read
        //methode qui donne la liste des recettes
        $array_user = $model->readAll();
       

        break;

}

