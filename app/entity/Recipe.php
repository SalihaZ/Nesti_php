<?php
class Recipe{

    private $name;
    private $id_recipe; // faire correspondre les attributs au champs de la BDD . Remplacer par un alias
    // Ajouter les attributs 


    /**
     * Get the value of name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of id
     */ 
    public function getIdRecipe()
    {
        return $this->id_recipe;
    }

    /**
     * Set the value of id
     *
     * @return  self
     */ 
    public function setIdRecipe($id)
    {
        $this->id_recipe = $id;

        return $this;
    }
}