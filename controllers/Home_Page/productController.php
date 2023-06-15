<?php
//Lấy hành động hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }

//    Kiểm tra hành động hiện tại
    switch ($action){
        case '':
//            Lấy dữ liệu từ DB
            include_once 'models\Home_Page\productModel.php';
//            Đổ dữ liệu lên view
            include_once 'views\Home_Page\product\index.php';
            break;
        case 'sanpham':
            include_once 'models\Home_Page\productModel.php';
            include_once 'views\Home_Page\product\productdetail.php';
            break;
        
    }
?> 