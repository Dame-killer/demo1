<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            include_once 'models/Admin_Page/productModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/products/index.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'create':
            include_once 'models/Admin_Page/productModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/products/create.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'store':
            include_once 'models/Admin_Page/productModel.php';
            header('location: indexAP.php?controller=product');
            break;
        case 'edit':
            include_once 'models/Admin_Page/productModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/products/edit.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'update':
            include_once 'models/Admin_Page/productModel.php';
            header('location: indexAP.php?controller=product');
            break;
        case 'destroy':
            include_once 'models/Admin_Page/productModel.php';
            header('location: indexAP.php?controller=product');
            break;
    }
?>