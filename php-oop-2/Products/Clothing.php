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

    function __construct($type,$brand,$price,$name,$descriptions,$review,$img){
        parent::__construct($type,$brand,$price);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
        $this->img= $img;
    }
}


// Istanze

$model_4 = new Clothing('T-shirt', 'D&G', 350, 'T-shirt Flower Jersey', 'Cotone 100% made in Italy...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw71c28a6b/images/zoom/G8JX7TFI7YS_HB2AD_2.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_3);
$clothings[] = $model_4;


$model_5 = new Clothing('Camicia', 'D&G', 250, 'Camicia Flower Jersey', 'Cotone made in Italy...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw2b1c8b12/images/zoom/I5585MGEU19_HK2ZK_2.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_4);
$clothings[] = $model_5;


$model_6 = new Clothing('Camicia', 'D&G', 250, 'Camicia Flower Jersey', 'Cotone made in Italy...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw08eb1ec1/images/zoom/G8KBAZFI70M_HT2CB_2.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_4);
$clothings[] = $model_6;
