<?php
    // require mysql connection
    require('database/DBController.php');

    // require product class
    require('database/Product.php');

    // require cart class
    require('database/Cart.php');
    
    //dbcontroller obj
    $db = new DBController();

    //product obj
    $product = new Product($db);
    $product_shuffle = $product->getData();

    //cart obj
    $Cart = new Cart($db);
    
?>