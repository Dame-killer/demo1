<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch($action){
        case '':
            if(isset($_SESSION['email_user'])){
                include_once 'models/Admin_Page/userModel.php';
                include_once 'views/Admin_Page/layout/navbar.php';
                include_once 'views/Admin_Page/users/index.php';
                include_once 'views/Admin_Page/layout/sidebar.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'login':
            if(isset($_SESSION['email_user'])){
                header('location: indexAP.php');
            } else {
                include_once 'views/Admin_Page/users/login.php';
            }
            break;
        case 'loginAccess':
            include_once 'models/Admin_Page/userModel.php';
            if($test == 0){
                header('location: indexAP.php?controller=user&action=login');
            } elseif ($test == 1){
                header('location: indexAP.php');
            }
            break;
        case 'logout':
            if(!isset($_SESSION['email_user'])){
            header('location: indexAP.php?controller=user&action=login');
            } else {
                include_once 'models/Admin_Page/userModel.php';
            header('location: indexAP.php?controller=user&action=login');
            }
            
            break;
        case 'create':
            if(isset($_SESSION['email_user'])){
                include_once 'views/Admin_Page/layout/navbar.php';
                include_once 'views/Admin_Page/users/create.php';
                include_once 'views/Admin_Page/layout/sidebar.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'store':
            if(isset($_SESSION['email_user'])){
                include_once 'models/Admin_Page/userModel.php';
                header('location: indexAP.php?controller=user');
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'edit':
            if(isset($_SESSION['email_user'])){
                include_once 'models/Admin_Page/userModel.php';
                include_once 'views/Admin_Page/layout/navbar.php';
                include_once 'views/Admin_Page/users/edit.php';
                include_once 'views/Admin_Page/layout/sidebar.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'update':
            if(isset($_SESSION['email_user'])){
                include_once 'models/Admin_Page/userModel.php';
                header('location: indexAP.php?controller=user');
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'destroy':
            if(isset($_SESSION['email_user'])){
                include_once 'models/Admin_Page/userModel.php';
                header('location: indexAP.php?controller=user');
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
    }
?>