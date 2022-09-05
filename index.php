<?php
    require_once __DIR__ . '/inclusions.php';

    $utente1 = new User("Alessio", "Calabrese", "Via delle cozze, 85");
    $utente2 = new RegisteredUser("Giggino", "Il Furgoncino", "Via delle vongole, 99", "ILZIZZO", "1234");

    $product1 = new Game("lui", "Pallina", "2,99$", "1", ["plastica", "tessuto"], "15cm", "15cm");
    $product2 = new Food("lui", "Paté", "4,99$", "2", "Umido", ["Carne"], "Per cani", "Dai 2 ai 4 anni", "20/06/2024");
    $product3 = new Bed("lui", "Cuccia per cani", "24,99$", "3", ["Plastica, tessuto"], "45cm", "30cm", "Cuscino");

    $creditCard1 = new CreditCard("Alessio Calabrese", "1111 2222 3333 4444", "191", "300$", "06", "2023");

    $cart1 = new Cart($utente1, [$creditCard1]);
    $cart1->addProduct($product1);
    var_dump($cart1);
    $cart1->addProduct($product3);
    var_dump($cart1);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>