<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';


/**
*   CLASS BAGS (Classe Figlia)
*/

class Bags extends Products{
    // Attributi/Proprietà
    // protected $name;
    // protected $descriptions;
    // protected $review;

    // Trait
    use Details;

    
    //Construct

    function __construct($type,$brand,$price,$name,$descriptions,$review){
        parent::__construct($type,$brand,$price);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
    }
}

// Istanze

$model_5 = new Bags('Bags', 'D&G', 350, 'Borsa da Viaggio', 'Pratica e sofisticata, la borsa viaggio realizzata in cocco', 5);

var_dump($model_5);

$model_6 = new Bags('Bags', 'D&G', 250, 'Pochette', 'Pochette della linea Mediterraneo in vitello con logo a fuoco', 5);

var_dump($model_6);