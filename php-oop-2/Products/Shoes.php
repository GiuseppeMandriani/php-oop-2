<?php 
// Import Class Products

require_once __DIR__ . '/Products.php';
require_once __DIR__ . '/trait.php';

/**
*   CLASS SHOES (Classe Figlia)
*/

class Shoes extends Products {
    // Attributi/Proprietà
    // protected $name;
    // protected $descriptions;
    // protected $review;

    use Details;

    //Construct

    function __construct($type,$brand,$price,$name,$descriptions,$review){
        parent::__construct($type,$brand,$price);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
    }



    //Methods
}

// Istanze

$model_1 = new Shoes('Sneakers', 'D&G', 250, 'Sneakers-Portofino', 'Scarpa in vera pelle...', 5);

// var_dump($model_1);

$model_2 = new Shoes('Stringate', 'D&G', 250, 'Derby Intreccio a mano', 'Scarpa in vera pelle...', 5);

// var_dump($model_2);