<?php

class ArticlePrice{
private $price;




/**
     * Get the value of name
     */ 
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the value of name
     *
     * @return  self
     */ 
    public function setPrice($price)
    {
        $this->price = $price;

        return $this;
    }



}

