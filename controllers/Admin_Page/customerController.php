<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            include_once 'models/Admin_Page/customerModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/customers/index.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'create':
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/customers/create.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'store':
            include_once 'models/Admin_Page/customerModel.php';
            header('location: indexAP.php?controller=customer');
            break;
        case 'edit':
            include_once 'models/Admin_Page/customerModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/customers/edit.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'update':
            include_once 'models/Admin_Page/customerModel.php';
            header('location: indexAP.php?controller=customer');
            break;
        case 'destroy':
            include_once 'models/Admin_Page/customerModel.php';
            header('location: indexAP.php?controller=customer');
            break;
    }
?>