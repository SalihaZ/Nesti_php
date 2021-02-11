<?php
include_once(PATH_MODEL.'Connection.php');//test si le fichier existe


class ModelRecipe {

    public function readAll() {
        //requete

        $pdo=Connection::getPDO();

        $sql="SELECT id, nom from recipe";
        $result= $pdo->query($sql);

        if($result){
            $array= $result->fetchAll(PDO::FETCH_CLASS, 'recipe'); //fetch c'est effeuiller les résultat pour les présenter selon le format qu'on veut
                                       // dans notre cas ça va transformer l'objet tableau  
        }else{
            $array=[];
        }

        return $array; //return ["crepe", "gateau"];
    }





}