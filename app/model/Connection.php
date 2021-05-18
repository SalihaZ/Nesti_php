<?php
/**
 * @var mixed $pdo
 */

class Connection{

    static private ?PDO $pdo =null; //?string : ?= nullable
    

    /**
     * Get the value of pdo
     */ 
    public static function getPdo(): ?PDO {

        if(self::$pdo==null){
            self::startConnection();
        }

        return self::$pdo;
    }
//ici les attributs sont statics faire des attributs non static pour le rest

static function startConnection(): void{

    self::$pdo = new PDO(DSN, USERNAME, PSW,[PDO::ATTR_PERSISTENT=>true]);
}

}