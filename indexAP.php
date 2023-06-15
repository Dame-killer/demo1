<?php
    session_start();
    $controller = '';
    if(isset($_GET['controller'])){
        $controller = $_GET['controller'];
    }
    switch ($controller){
        case '':
            if(isset($_SESSION['email_user'])){
                include_once 'views/Admin_Page/layout/navbar.php';
                include_once 'views/Admin_page/index.php';
                include_once 'views/Admin_page/layout/sidebar.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'user':
            include_once 'controllers/Admin_page/userController.php';
            break;
        case 'customer':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/customerController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'manufacturer':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/manufacturerController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'category':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/categoryController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'product':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/productController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'product_detail':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/product_detailController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        case 'order':
            if(isset($_SESSION['email_user'])){
                include_once 'controllers/Admin_Page/orderController.php';
            } else {
                header('location: indexAP.php?controller=user&action=login');
            }
            break;
        default:
            echo "Chưa chọn controller nào";
            break;
    }
?>