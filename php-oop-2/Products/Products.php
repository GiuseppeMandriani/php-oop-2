<?php 

/**
 * CLASSE PRODUCTS (Classe Padre)
 */

class Products {
    // Attributi/Proprietà/Valori
    public $type;
    public $brand;
    protected $price;



    // Costruct per inizio
    
    function __construct($type,$brand,$price){
        $this->type = $type;
        $this->brand = $brand;
        $this->price = $price;
    }

    // Methods

}





