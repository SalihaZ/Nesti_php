<?php
include_once(PATH_MODEL.'Connection.php');//test si le fichier existe


class ModelArticle{

    public function readAll() {  //retourne un array 

        $pdo=Connection::getPDO();
       
     
        $sql="SELECT article.Id_extern, CONCAT(quantity_by_unit, ' ', unit.name, ' ', product.name_product) as `name`, article_price.price, product.type, date_creation, article.quantity_by_unit 
        FROM `article` 
        JOIN `unit` ON article.Id_unit = unit.Id_unit
        JOIN `product` on product.Id_product = article.Id_product
        LEFT JOIN `article_price` on article_price.Id_extern= article.Id_extern"; # Attention aux injections sql faut utiliser les requetes sql préparées
     
       $result= $pdo->query($sql);

        if($result){
            $array= $result->fetchAll(PDO::FETCH_CLASS, 'Article'); //fetch c'est effeuiller les résultats pour les présenter selon le format qu'on veut
                                       // dans notre cas ça va transformer l'objet en tableau  
        }else{
            $array=[];
        }

        return $array; //return [Tableau Entity Article exemple : "1kg farine", "6 oeufs"];
    }

    public function readOne(int $id): Article  {

        $pdo=Connection::getPDO();
        $sql = "SELECT id_extern, `name` from article WHERE id_extern = :id";
        $sth = $pdo->prepare($sql); // statement : etat intermediaire de la requetes préparée
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Article'); // 
        if($result){
            $article = $sth->fetch();
        }else{
            $article = new Article(); // Article Vide 
        }
        return $article;
    }

        // envoyer les données du formulaires
    }
