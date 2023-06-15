<?php
    session_start();
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }

    switch($controller){
        case '':
            include_once 'controllers/Home_Page/homeController.php';

            
            break;
        case 'customer':
            include_once 'controllers/Home_Page/customerController.php';
            break;
        case 'product':
            include_once 'controllers/Home_Page/productController.php';
            break;
        case 'category':
            include_once 'controllers/Home_Page/categoryController.php';
            break;
        

    }

?>