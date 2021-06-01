<?php

/**
 * CLASSE USERS (Classe Padre)
 */

class Users{

    // Attributi

    protected $firstName;
    protected $lastName;
    protected $category;
    protected $sale;

    // Construct

    function __construct($firstName, $lastName, $category = 'Premium'){
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->category = $category;
    }

    // Methods

    /**
    * Metodo per Nome intero
    */

    public function getFullName(){
        return $this->firstName . ' ' . $this->lastName;
    }

    /**
    * Metodo per settare lo sconto
    */

    protected function setSale(){
        if($this->category == 'Premium'){
            $this->sale = 50 .'%';
        } else{
            $this->sale = 'Not Discount';
        }
        
    }

    /**
    * Metodo per settare lo sconto
    */

    public function getSale(){

        $this->setSale();

        return $this->sale;
    }






}