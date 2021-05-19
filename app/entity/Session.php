<?php

class Session
{

    public function isConnectUser() //savoir si un user est connect
    {
        $isConnect=false;
        if (isset($_SESSION["idUser"]) && !empty($_SESSION['idUser'])) {
            $isConnect= true;
        }return $isConnect;

    }
    public function connectUser($id)
    {

        //sauvegarder id du user
        $_SESSION["idUser"] = $id; //"idUser" sauvegarder l'id dans tableau global sur tte les pages

    }

    public function disconnectUser(){
    session_unset();
    session_destroy();
    }
    
    public function getIdUser(){
        if (isset($_SESSION["idUser"]) && !empty($_SESSION['idUser'])) { // vérifier si le tableau php Session  transporte les infos d'une page à l'autre
            $id = $_SESSION['idUser'];
        }else{
            $id = 0;
        }
        return $id;
    }

}
