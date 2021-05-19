<?php
include_once PATH_MODEL . 'Connection.php'; //test si le fichier existe

class ModelRecipe
{

    public function readAll()
    {

        $pdo = Connection::getPDO();

        $sql = "SELECT id_recipe, `name` from recipe"; # Attention aux injections sql faut utiliser les requetes sql préparées
        $result = $pdo->query($sql);

        if ($result) {
            $array = $result->fetchAll(PDO::FETCH_CLASS, 'Recipe'); //fetch c'est effeuiller les résultat pour les présenter selon le format qu'on veut
            // dans notre cas ça va transformer l'objet tableau
        } else {
            $array = [];
        }

        return $array; //return [Tableau Entity Recipe exemple : "crepe", "gateau"];
    }

    public function readOne(int $id): Recipe
    {

        $pdo = Connection::getPDO();
        $sql = "SELECT id_recipe, `name` from recipe WHERE id_recipe = :id";
        $sth = $pdo->prepare($sql); // statement : etat intermediaire de la requetes préparée
        $sth->bindParam(':id', $id);
        $result = $sth->execute();
        $sth->setFetchMode(PDO::FETCH_CLASS, 'Recipe'); //
        if ($result) {
            $recipe = $sth->fetch();
        } else {
            $recipe = new Recipe(); // Recette Vide
        }
        return $recipe;
    }

    public function insert(Recipe $recipe)
    {
        
try{
    $pdo = Connection::getPDO();
 //"INSERT INTO recipe (`name`, `difficulty`, `time`, `number_people`, `id_chef` ) VALUES (:n, :d, :t, :np, :idc)";
 $sql = "INSERT INTO `recipe`(`name`,  `difficulty`, `time`, `number_people`, `Id_chef`) 
 VALUES (:n, :d, :t, :np, :idc)";
 $sth = $pdo->prepare($sql);
 $sth->execute(array(
     ':n' => $recipe->getName(),
     ':d' => $recipe->getDifficulty(),
     ':t' => $recipe->getTime(),
     ':np' => $recipe->getNumberPeople(),
     ':idc' => $recipe->getIdChef(),
     
 ));
 return $pdo->lastInsertId();
}catch(PDOExeption $e){
    echo $e->getMessage();
    debug_print_backtrace();
}
      
        
        

    }

//une méthode par requête =>

}
#créer une methode create read updtae delete CRUD
# coder toutes ces fct
# écrire des requetes
# faut pas concatener
# récuperer les données du formulaire à partir de requetes préparées
# pilotes permettent de connecter à bbd exp PDO ou MySQLi
