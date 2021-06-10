<?php
include_once PATH_MODEL . 'Connection.php'; //test si le fichier existe

class ModelUser
{
    public function readAll()
    {

        $pdo = Connection::getPDO();

        $sql = "SELECT id_user, first_name, last_name, `state` from user"; # Attention aux injections sql faut utiliser les requetes sql préparées
        $result = $pdo->query($sql);

        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'User'); //fetch c'est effeuiller les résultats pour les présenter selon le format qu'on veut
           
        } else {
            $array = [];
        }



        return $array; 
    }


    public function readOne($id)
    {
        $pdo= Connection::getPDO(); //static : :
        $sql= "SELECT first_name, last_name from user WHERE id_user=:id"; //requete prparée
        $sth= $pdo->prepare($sql);
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'User'); 
        if($result){
            $user= $sth->fetch();
        } else{
            $user= new User();
        }
        return $user;
    }
    
}