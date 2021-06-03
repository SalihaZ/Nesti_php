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
}