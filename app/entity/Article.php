<?php

class Article{
private $id_extern;
private $name;
private $date_creation;
private $price;
private $quantity_by_unit;
private $type;
private $user_article_name;
private $stock;
//type

/**
     * Get the  stock of an article
     */ 
    public function getStock()
    {
        return $this->stock;
    }

    /**
     * Set the stock of an article
     *
     * @return  self
     */
    public function setStock($stock)
    {
        $this->stock = $stock;

        return $this;
    }


/**
     * Get the value of User article name
     */ 
    public function getUserArticleName()
    {
        return $this->user_article_name;
    }

    /**
     * Set the value of User article name
     *
     * @return  self
     */
    public function setUserArticleName($name)
    {
        $this->name = $name;

        return $this;
    }

 /**
     * Get the value of article name
     */ 
    public function getName()
    {
        return $this->name;
    }

    /**
     * Set the value of article name
     *
     * @return  self
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get the value of extern id  (of article from java application)
     */ 
    public function getIdExtern()
    {
        return $this->id_extern;
    }

    /**
     * Set the value of extern id  (of article from java application)
     *
     * @return  self
     */ 
    public function setIdExtern($id)
    {
        $this->id_extern = $id;

        return $this;
    }

/**
     * Get the value of price
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of price
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }

/**
     * Get the value of type
     */ 
    public function getType()
    {
        return $this->type;
    }

    /**
     * Set the value of type
     *
     * @return  self
     */ 
    public function setType($type)
    {
        $this->type = $type;

        return $this;
    }
/**
     * Get the value of creation date (article)
     */ 
    public function getDateCreation()
    {
        return $this->date_creation;
    }

    /**
     * Set the value of creation date (article)
     *
     * @return  self
     */ 
    public function setDateCreation($date_creation)
    {
        $this->date_creation = $date_creation;

        return $this;
    }


    /**
     * Get the value of article quantity by unit
     */ 
    public function getQuantityByUnit()
    {
        return $this->quantity_by_unit;
    }

    /**
     * Set the value of article quantity by unit
     *
     * @return  self
     */ 
    public function setQuantityByUnit($quantity_by_unit)
    {
        $this->quantity_by_unit = $quantity_by_unit;

        return $this;
    }

    public static function checkName($name){
        // longuer
        // regex
        return true;
    }

}







