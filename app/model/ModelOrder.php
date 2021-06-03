<?php
include_once PATH_MODEL . 'Connection.php'; //test si le fichier existe

class ModelOrder
{

    public function readAll(): array // signature pour indiquer le type de retour
    {

        $pdo = Connection::getPDO();
        $sql = "SELECT id_order, CONCAt(user.first_name, ' ', user.last_name)as user_name , price_order(id_order) as price , user.Id_user,`order`.creation_date, `order`.`state` 
        FROM `order` LEFT JOIN user ON user.id_user=`order`.Id_user";
        $sth = $pdo->prepare($sql); // statement : etat intermediaire de la requetes préparée
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Order');
        if ($result) {
            $order = $sth->fetchAll();
        } else {
            $order= [];
        }
        return $order;
    }

    

}
