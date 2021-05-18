<?php

class Session
{

    public function isConnectUser()
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

}
