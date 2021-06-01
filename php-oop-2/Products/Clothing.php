<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';


/**
*   CLASS CLOTHING (Classe Figlia)
*/

class Clothing extends Products{
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

$model_3 = new Clothing('T-shirt', 'D&G', 350, 'T-shirt Flower Jersey', 'Cotone 100% made in Italy...', 5);

var_dump($model_3);

$model_4 = new Clothing('Camicia', 'D&G', 250, 'Camicia Flower Jersey', 'Cotone made in Italy...', 5);

var_dump($model_4);