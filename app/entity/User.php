<?php

Class User{

    private $id_user;
    private $pseudo; // faire correspondre les attributs au champs de la BDD . Remplacer par un alias
    private $last_name;
    private $first_name;
    private $email;
    private $password;
    private $creation_date;
    private $state;
    private $adress1;
    private $adress2;
    private $id_city;
    private $last_connexion;
    private $role;


 /**
     * Get the value of id_user
     */ 
    public function getIdUser()
    {
        return $this->id_user;
    }

    /**
     * Set the value of id_user
     *
     * @return  self
     */ 
    public function setIdUser($id_user)
    {
        $this->id_user = $is_user;

        return $this;
    }

     /**
     * Get the value of pseudo
     */ 
    public function getPseudo()
    {
        return $this->pseudo;
    }

    /**
     * Set the value of pseudo
     *
     * @return  self
     */ 
    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

      /**
     * Get the value of last_name
     */ 
    public function getLastName()
    {
        return $this->last_name;
    }

    /**
     * Set the value of last_name
     *
     * @return  self
     */ 
    public function setLastName($last_name)
    {
        $this->last_name = $last_name;

        return $this;
    }

   /**
     * Get the value of first_name
     */ 
    public function getFirstName()
    {
        return $this->first_name;
    }

    /**
     * Set the value of first_name
     *
     * @return  self
     */ 
    public function setFirstName($first_name)
    {
        $this->first_name = $first_name;

        return $this;
    }

     /**
     * Get the value of email
     */ 
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * Set the value of email
     *
     * @return  self
     */ 
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }


     /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }

     /**
     * Get the value of creation_date
     */ 
    public function getCreationDate()
    {
        return $this->creation_date;
    }

    /**
     * Set the value of creation_date
     *
     * @return  self
     */ 
    public function setCreationDate($creation_date)
    {
        $this->creation_date = $creation_date;

        return $this;
    }


     /**
     * Get the value of state
     */ 
    public function getState()
    {
        return $this->state;
    }

    /**
     * Set the value of state
     *
     * @return  self
     */ 
    public function setState($state)
    {
        $this->state = $state;

        return $this;

    }

    
     /**
     * Get the value of adress1
     */ 
    public function getAdress1()
    {
        return $this->adress1;
    }

    /**
     * Set the value of adress1
     *
     * @return  self
     */ 
    public function setAdress1($adress1)
    {
        $this->adress1 = $adress1;

        return $this;


    }

    /**
     * Get the value of adress2
     */ 
    public function getAdress2()
    {
        return $this->adress2;
    }

    /**
     * Set the value of adress2
     *
     * @return  self
     */ 
    public function setAdress2($adress2)
    {
        $this->adress2 = $adress2;

        return $this;


    }

     /**
     * Get the value of id_city
     */ 
    public function getIdCity()
    {
        return $this->id_city;
    }

    /**
     * Set the value of id_city
     *
     * @return  self
     */ 
    public function setIdCity($id_city)
    {
        $this->id_city = $id_city;

        return $this;


    }







    

}