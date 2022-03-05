<?php
    // require mysql connection
    require('../database/DBController.php');

    // require product class
    require('../database/Product.php');

    //dbcontroller obj
    $db = new DBController();

    //product obj
    $product = new Product($db);
    

    if(isset($_POST['itemid'])) {
        $result = $product->getProduct($_POST['itemid']);
        echo json_encode($result);
    }
?>