<?php // Import Data

// Products

require_once __DIR__ . '/php-oop-2/Products/Shoes.php';
require_once __DIR__ . '/php-oop-2/Products/Clothing.php';
require_once __DIR__ . '/php-oop-2/Products/Bags.php';

// USERS

require_once __DIR__ . '/php-oop-2/Users/Users.php';
require_once __DIR__ . '/php-oop-2/Users/ClientVip.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- ICONS -->
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css' integrity='sha512-iBBXm8fW90+nuLcSKlbmrPcLa0OT92xO1BIsZ+ywDWZCvqsWgccV3gFoRBv0z+8dLJgyAHIhR35VZc2oM/gI1w==' crossorigin='anonymous'/>
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">

    <title>PHP OOP Extends</title>
</head>

<body>
    <div id="app">
        <header class="header">
            <h1>My E-Commerce</h1>

            <?php // Istanza ClientVip
                $clientVip_1 = new ClientVip('Giuseppe','Mandriani',45,1);?>


            <div class="shop">
                <i class="fas fa-shopping-cart"></i>
                <div class="box-shop">
                    <h5>Articoli nel carrello</h5>
                    <h6>Prezzo:</h6>
                    <h6>Sconto: <?php echo $clientVip_1->getSale() ?>%</h6>
                    <?php
                    $totPrice = 0?>
                    <h6>Tot da Pagare: <?php echo $totPrice;?></h6>
                </div>
            </div>
        </header>
        <main class="container">
            <!-- User Log -->

            <section class="user-log">
                <h2>Welcome in your page <?php echo $clientVip_1->getFullName();?></h2>
                <h4>Your Discount is: <?php echo $clientVip_1->getSale() ?>% </h4>
        
            </section>
            <!-- Products -->
            <section class="products">
                <h3>SHOES</h3>
                <div class="row">
                    <!-- SHOES -->
                    <?php // Itero per ottenere prodotti Scarpe
                    foreach($shoes as $key =>$scarpa){?>
                    <div class="cards">
                    <img src="<?php echo $scarpa->img?>" alt="">
                        <ul class="list-products">
                            
                            <li><?php echo $scarpa->name?></li>
                            <li><?php echo $scarpa->type?></li>
                            <li><?php echo $scarpa->brand?></li>
                            <li><?php echo $scarpa->price?> €</li>
                            <li><?php echo $scarpa->getSalePrice($clientVip_1->getSale())?> €</li>
                        </ul>
                    
                    </div>
                    <?php } ?>
                </div>
                <h3>CLOTHINGHS</h3>
                <div class="row">
                    <!-- CLOTHINGS -->
                    <?php // Itero per ottenere prodotti Clothings
                    foreach ($clothings as $clothes) {?>
                    <div class="cards">
                    <img src="<?php echo $clothes->img?>" alt="">
                        <ul class="list-products">
                            <li><?php echo $clothes->name?></li>
                            <li><?php echo $clothes->type?></li>
                            <li><?php echo $clothes->brand?></li>
                            <li><?php echo $clothes->price?> €</li>
                            <li><?php echo $clothes->getSalePrice($clientVip_1->getSale())?> €</li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
                <h3>BAGS</h3>
                <div class="row">
                    <!-- CLOTHINGS -->
                    <?php // Itero per ottenere prodotti Clothings
                    foreach ($bags as $bag) {?>
                    <div class="cards">
                    <img src="<?php echo $bag->img?>" alt="">
                        <ul class="list-products">
                            <li><?php echo $bag->name?></li>
                            <li><?php echo $bag->type?></li>
                            <li><?php echo $bag->brand?></li>
                            <li><?php echo $bag->price?> €</li>
                            <li><?php echo $bag->getSalePrice($clientVip_1->getSale())?> €</li>
                        </ul>
                    </div>
                    <?php } ?>
                </div>
        
        
            </section>
        
        </main>
    </div>



<!-- JS -->
<script src="./js/main.js"></script>
</body>

</html>