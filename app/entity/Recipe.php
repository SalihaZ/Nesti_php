<?php
class Recipe{

    private $name;
    private $id_recipe; // faire correspondre les attributs au champs de la BDD . Remplacer par un alias
    private $creation_date;
    private $difficulty;
    private $time;
    private $number_people;
    private $id_chef;

   
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
     * Get the value of id recipe
     */ 
    public function getIdRecipe()
    {
        return $this->id_recipe;
    }

    /**
     * Set the value of id recipe
     *
     * @return  self
     */ 
    public function setIdRecipe($id)
    {
        $this->id_recipe = $id;

        return $this;
    }

 /**
     * Get the value of creation date
     */ 
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set the value of creation date
     *
     * @return  self
     */ 
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;

        return $this;
    }

/**
     * Get the value of difficulty
     */ 
    public function getDifficulty()
    {
        return $this->difficulty;
    }

    /**
     * Set the value of difficulty
     *
     * @return  self
     */ 
    public function setDifficulty($difficulty)
    {
        $this->difficulty = $difficulty;

        return $this;
    }

/**
     * Get the value of time
     */ 
    public function getTime()
    {
        return $this->time;
    }

    /**
     * Set the value of time
     *
     * @return  self
     */ 
    public function setTime($time)
    {
        $this->time = $time;

        return $this;
    }


    /**
     * Get the value of number people
     */ 
    public function getNumberPeople()
    {
        return $this->number_people;
    }

    /**
     * Set the value of number people
     *
     * @return  self
     */ 
    public function setNumberPeople($number_people)
    {
        $this->number_people = $number_people;

        return $this;
    }

    /**
     * Get the value of id chef
     */ 
    public function getIdChef()
    {
        return $this->id_chef;
    }

    /**
     * Set the value of id chef
     *
     * @return  self
     */ 
    public function setIdChef($id_chef)
    {
        $this->id_chef = $id_chef;

        return $this;
    }



}

