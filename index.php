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

    <main>
        <!-- User Log -->
        <section>
        <?php // Istanza Utente
            $user_1 = new Users('Giuseppe','Mandriani','Premium');?>
            <h2>Welcome in your page <?php echo $user_1->getFullName();?></h2>
            <h4>Your Discount is: <?php echo $user_1->getSale() ?> </h4>
        </section>
    
    </main>

</body>

</html>