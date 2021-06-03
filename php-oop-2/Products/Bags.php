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

    function __construct($type,$brand,$price,$salePrice,$name,$descriptions,$review,$img){
        parent::__construct($type,$brand,$price,$salePrice);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
        $this->img = $img;
    }
}

// Istanze

$model_7 = new Bags('Bags', 'D&G', 350,0, 'Borsa da Viaggio', 'Pratica e sofisticata, la borsa viaggio realizzata in cocco', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw17806bd6/images/zoom/BM1799AJ773_8B956_1.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_7);
$bags[] = $model_7;


$model_8= new Bags('Bags', 'D&G', 375,0, 'Pochette', 'Pochette della linea Mediterraneo in vitello con logo a fuoco', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw500396b5/images/zoom/BM1874AZ319_80999_1.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_8);
$bags[] = $model_8;


$model_9= new Bags('Bags', 'D&G', 410,0, 'Pochette', 'Pochette della linea Mediterraneo in vitello con logo a fuoco', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw5f2c57da/images/zoom/BM1756AW140_89690_1.jpg?sw=640&sh=816&sm=fit');

// var_dump($model_9);
$bags[] = $model_9;