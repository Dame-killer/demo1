<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            include_once 'models/Admin_Page/categoryModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/categories/index.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'create':
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/categories/create.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'store':
            include_once 'models/Admin_Page/categoryModel.php';
            header('location: indexAP.php?controller=category');
            break;
        case 'edit':
            include_once 'models/Admin_Page/categoryModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/categories/edit.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'update':
            include_once 'models/Admin_Page/categoryModel.php';
            header('location: indexAP.php?controller=category');
            break;
        case 'destroy':
            include_once 'models/Admin_Page/categoryModel.php';
            header('location: indexAP.php?controller=category');
            break;
    }
?>