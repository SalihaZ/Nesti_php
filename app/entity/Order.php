<?php

class Order{
private $id_order;
private $user_name; //Concat first name and last name
private $creation_date;
private $price;
private $state;



    /**
    * Get the id of an order
    */
  
    public function getIdOrder()
    {
        return $this->id_order;
    }

    /**
     * Set the id of an order
     *
     * @return  self
     */
    public function setIdOrder($id_order)
    {
        $this->id_order = $id_order;

        return $this;
    }


    /**
    * Get the user that made the order
    */
  
    public function getUserName()
    {
        return $this->user_name;
    }

    /**
     * Set the user 
     *
     * @return  self
     */
    public function setUserName($userName)
    {
        $this->user_name= $userName;

        return $this;
    }


    /**
    * Get the state of order
    */
  
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the state of an order
     *
     * @return  self
     */
    public function setState($state)
    {
        $this->state= $state;

        return $this;
    }

    
    /**
    * Get the date of order
    */
  
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set the date of an order
     *
     * @return  self
     */
    public function setCreationDate($creation_date)
    {
        $this->creation_date= $creation_date;

        return $this;
    }

        /**
    * Get the parice of the order
    */
  
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * Set the price of an order
     *
     * @return  self
     */
    public function setPrice($price)
    {
        $this->price= $price;

        return $this;
    }
    

}