<?php

class Connection{

    static private $pdo =null;
    

    /**
     * Get the value of pdo
     */ 
    public static function getPdo(){

        if(self::$pdo==null){
            self::startConnection();
        }

        return self::$pdo;
    }
//ici les attributs sont statics faire des attributs non static pour le rest

static function startConnection(){
self::$pdo = new PDO(DSN, USERNAME, PSW,[PDO::ATTR_PERSISTENT=>true]);
}

}