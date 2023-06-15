<!-- <?php
//Lấy hành động hiện tại
    $action = '';
    if(isset($_GET['action'])){
        $action = $_GET['action'];
    }
//Kiểm tra hành động đang thực hiện
    switch($action){
        case '':
            //Hiển thị danh sách các category
            include_once 'models/Home_Page/categoryModel.php';
            include_once 'views/Home_Page/index.php';
            break;
        case 'clicks':
            include_once 'models/Home_Page/homeModel.php';
            include_once 'views/Home_Page/index.php';
            break;
        
    }
?> -->