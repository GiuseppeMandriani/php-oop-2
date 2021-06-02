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

    function __construct($type,$brand,$price,$name,$descriptions,$review,$img){
        parent::__construct($type,$brand,$price);
        $this->name = $name;
        $this->descriptions = $descriptions;
        $this->review = $review;
        $this->img = $img;
        // $this->shoes = array();
    }



    //Methods

}

// Istanze

$model_1 = new Shoes('Sneakers', 'D&G', 250, 'Sneakers-Portofino', 'Scarpa in vera pelle...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw870a056e/images/zoom/CS1801A8M19_8M092_1.jpg?sw=742&sh=944&sm=fit');
$shoes[] = $model_1;






// var_dump($model_1);

$model_2 = new Shoes('Stringate', 'D&G', 250, 'Derby Intreccio a mano', 'Scarpa in vera pelle...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dw7c55216b/images/zoom/A10400AZ870_8M204_1.jpg?sw=640&sh=816&sm=fit');

$shoes[] = $model_2;

$model_3 = new Shoes('Stringate', 'D&G', 250, 'Derby Intreccio a mano', 'Scarpa in vera pelle...', 5,'https://www.dolcegabbana.com/dw/image/v2/AAGA_PRD/on/demandware.static/-/Sites-15/default/dwe1134551/images/zoom/CS1769AO229_8B960_1.jpg?sw=640&sh=816&sm=fit');

$shoes[] = $model_3;







// var_dump($shoes);


// foreach($shoes as $scarpa){
//     var_dump($scarpa->name . ' ' . $scarpa->descriptions);
// }






// var_dump($model_2);

