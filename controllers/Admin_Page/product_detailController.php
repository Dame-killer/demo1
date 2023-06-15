<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            include_once 'models/Admin_Page/product_detailModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/product_details/index.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'create':
            include_once 'models/Admin_Page/product_detailModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/product_details/create.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'store':
            include_once 'models/Admin_Page/product_detailModel.php';
            header('location: indexAP.php?controller=product_detail');
            break;
        case 'edit':
            include_once 'models/Admin_Page/product_detailModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/product_details/edit.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'update':
            include_once 'models/Admin_Page/product_detailModel.php';
            header('location: indexAP.php?controller=product_detail');
            break;
        case 'destroy':
            include_once 'models/Admin_Page/product_detailModel.php';
            header('location: indexAP.php?controller=product_detail');
            break;
    }
?>