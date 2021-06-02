<?php // Import Data

// Products

require_once __DIR__ . '/php-oop-2/Products/Shoes.php';
require_once __DIR__ . '/php-oop-2/Products/Clothing.php';
require_once __DIR__ . '/php-oop-2/Products/Bags.php';

// USERS

require_once __DIR__ . '/php-oop-2/Users/Users.php';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- FONT -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" href="./css/main.css">

    <title>PHP OOP Extends</title>
</head>

<body>
    <header>
        <h1>My E-Commerce</h1>
    </header>

    <main class="container">
        <!-- User Log -->
        <section class="user-log">
        <?php // Istanza Utente
            $user_1 = new Users('Giuseppe','Mandriani','Premium');?>
            <h2>Welcome in your page <?php echo $user_1->getFullName();?></h2>
            <h4>Your Discount is: <?php echo $user_1->getSale() ?> </h4>
        </section>

        <!-- Products -->
        <section class="products">
            <h3>SHOES</h3>
            <div class="row">
                <!-- SHOES -->
                <?php // Itero per ottenere prodotti Scarpe
                foreach ($shoes as $scarpa) {?>
                <div class="cards">
                <img src="<?php echo $scarpa->img?>" alt="">
                    <ul class="list-products">
                        <li><?php echo $scarpa->name?></li>
                        <li><?php echo $scarpa->type?></li>
                        <li><?php echo $scarpa->brand?></li>
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
                    </ul>
                </div>
                <?php } ?>
            </div>





                


        
        </section>
    
    </main>

</body>

</html>