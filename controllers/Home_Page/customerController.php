<?php
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
    switch ($action){
        case '':
            include_once 'models/Home_Page/customerModel.php';
            break;
        case 'dangnhap':
            if(isset($_SESSION['email_customer'])){
                header('Location:indexHP.php');
            } else {
//            Hiển thị form đăng nhập
                include_once 'views/Home_Page/customer/dangnhap.php';
            }
            break;
        case 'truycapdangnhap':
//            Lấy dữ liệu login trên db
            include_once 'models/Home_Page/customerModel.php';
            if($test == 0){
//                Login sai
                header('Location:indexHP.php?controller=customer&action=dangnhap');
            } elseif ($test == 1){
                header('Location:indexHP.php');
            }
            break;
        case 'dangxuat':
//            Xóa bỏ session
            include_once 'models/Home_Page/customerModel.php';
//            quay về form đăng nhập
            header('Location:indexHP.php?controller=customer&action=dangnhap');
            break;
        case 'dangky':
            include_once 'views/Home_Page/customer/dangky.php';
            break;
        case 'luu':
            include_once 'models/Home_Page/customerModel.php';
            header('Location:indexHP.php?controller=customer&action=dangnhap');
            break; 
        case 'trangchu':
            header('Location:indexHP.php');
            break;
    }
