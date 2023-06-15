<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            include_once 'models/Admin_Page/manufacturerModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/manufacturers/index.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'create':
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/manufacturers/create.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'store':
            include_once 'models/Admin_Page/manufacturerModel.php';
            header('location: indexAP.php?controller=manufacturer');
            break;
        case 'edit':
            include_once 'models/Admin_Page/manufacturerModel.php';
            include_once 'views/Admin_Page/layout/navbar.php';
            include_once 'views/Admin_Page/manufacturers/edit.php';
            include_once 'views/Admin_Page/layout/sidebar.php';
            break;
        case 'update':
            include_once 'models/Admin_Page/manufacturerModel.php';
            header('location: indexAP.php?controller=manufacturer');
            break;
        case 'destroy':
            include_once 'models/Admin_Page/manufacturerModel.php';
            header('location: indexAP.php?controller=manufacturer');
            break;
    }
?>