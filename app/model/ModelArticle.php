<?php
include_once PATH_MODEL . 'Connection.php'; //test si le fichier existe

class ModelArticle
{

    public function readAll()
    { //retourne un array

        $pdo = Connection::getPDO();

        $sql = "SELECT article.id_extern, CONCAT(quantity_by_unit, ' ', unit.name, ' ', product.name_product) as `name`, article_price.price, product.type, date_creation, article.quantity_by_unit, user_article_name
        FROM `article`
        JOIN `unit` ON article.Id_unit = unit.Id_unit
        JOIN `product` on product.Id_product = article.Id_product
        LEFT JOIN `article_price` on article_price.Id_extern= article.Id_extern"; # Attention aux injections sql faut utiliser les requetes sql préparées

        $result = $pdo->query($sql);

        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Article'); //fetch c'est effeuiller les résultats pour les présenter selon le format qu'on veut
            // dans notre cas ça va transformer l'objet en tableau
        } else {
            $array = [];
        }

        return $array; //return [Tableau Entity Article exemple : "1kg farine", "6 oeufs"];
    }

    public function readOne(int $id): Article
    {

        $pdo = Connection::getPDO();
        $sql = "SELECT id_extern, CONCAT(quantity_by_unit, ' ', unit.name, ' ', product.name_product) as `name`, user_article_name  from article JOIN unit ON unit.id_unit= article.id_unit JOIN product ON product.id_product = article.id_product WHERE id_extern = :id";
        $sth = $pdo->prepare($sql); // statement : etat intermediaire de la requetes préparée
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Article'); //
        if ($result) {
            $article = $sth->fetch();
        } else {
            $article = new Article(); // Article Vide
        }
        return $article;
    }

    // envoyer les données du formulaire

    public function insert(Article $article)
    {

        try {
            $pdo = Connection::getPDO();

            $sql = "INSERT INTO `artcle`,CONCAT(quantity_by_unit, ' ', unit.name, ' ', product.name_product) as `name`, article_price.price, product.type, date_creation, article.quantity_by_unit
       JOIN `unit` ON article.Id_unit = unit.Id_unit
        JOIN `product` on product.Id_product = article.Id_product
        LEFT JOIN `article_price` on article_price.Id_extern= article.Id_extern
";
            $sth = $pdo->prepare($sql);
            $sth->execute(array(
                ':n' => $article->getName(),
                ':d' => $article->getDifficulty(),
                ':t' => $article->getTime(),
                ':np' => $article->getNumberPeople(),
                ':idc' => $article->getIdChef(),

            ));
            return $pdo->lastInsertId();
        } catch (PDOExeption $e) {
            echo $e->getMessage();
            debug_print_backtrace();
        }

    }

    public function update(int $id_article, string $new_name)
    {

        try {
            $pdo = Connection::getPDO();

            $sql = "UPDATE article SET user_article_name = :name WHERE id_extern=:id";
            $sth = $pdo->prepare($sql);
            return $sth->execute(array(
                ':name' => $new_name,
                ':id' => $id_article,
            
            ));
            
        } catch (PDOExeption $e) {
            echo $e->getMessage();
            debug_print_backtrace();
        }

    }

    public function articlePrice($id)
    {

        $pdo = Connection::getPDO();
        $sql = "SELECT price_article(:id, NOW())";
      //  "SELECT MAX(unit_cost)as max_price FROM `lot` WHERE id_extern=:id";
        $sth = $pdo->prepare($sql); // statement : etat intermediaire de la requetes préparée
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        if ($result) {
            $price = $sth->fetchColumn(); // + 20%
        } else {
            $price = 0; // Article Vide
        }
        return $price;
    }

    public function articleStock($id)
    {
        //SELECT SUM(buying_quatity)as total_bought, SUM(purchased_quantity)as total_purchased FROM `lot`WHERE Id_extern=1
        $pdo = Connection::getPDO();
        $sql = "SELECT SUM(buying_quatity)- SUM(purchased_quantity) as stock FROM `lot`WHERE Id_extern=:id";
        $sth = $pdo->prepare($sql);
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        if ($result) {
            $stock = $sth->fetchColumn();

        } else {
            $stock = 0;
        }
        return $stock;
    }



}
