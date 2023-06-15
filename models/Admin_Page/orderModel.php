<?php
    function indexOrder(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM order INNER JOIN customer ON order.id_customer = customer.id_customer WHERE name_customer LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach ($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM order INNER JOIN customer ON order.id_customer = customer.id_customer INNER JOIN user ON order.id_user = user.id_user WHERE name_customer LIKE '%$search%' LIMIT $start, $end";
        $orders = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['orders'] = $orders;
        $array['page'] = $countPage;
        return $array;
    }
    function createOrder(){
        include_once 'connect/openConnect.php';
        $sqlCustomer = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sqlCustomer);
        $sqlUser = "SELECT * FROM user";
        $users = mysqli_query($connect, $sqlUser);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['customers'] = $customers;
        $array['users'] = $users;
        return $array;
    }
    
    function storeOrder(){
        $status = $_POST['status'];
        $purchase_date = date('Y-m-d');
        $id_user = $_POST['id_user'];
        $id_customer = $_POST['id_customer'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO order(status, purchase_date, id_user, id_customer) VALUES ('$status', '$purchase_date', '$id_user', '$id_customer')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editOrder(){
        $id_order = $_GET['id_order'];
        include_once 'connect/openConnect.php';
        $sqlUser = "SELECT * FROM user";
        $users = mysqli_query($connect, $sqlUser);
        $sqlCustomer = "SELECT * FROM customer";
        $customers = mysqli_query($connect, $sqlCustomer);
        $sql = "SELECT * FROM order WHERE id_order = '$id_order'";
        $orders = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['users'] = $users;
        $array['customers'] = $customers;
        $array['orders'] = $orders;
        return $array;
    }
    function updateOrder(){
        $id_order = $_POST['id_order'];
        $status = $_POST['status'];
        $purchase_date = $_POST['purchase_date'];
        $id_user = $_POST['id_user'];
        $id_customer = $_POST['id_customer'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE order SET status = '$status', purchase_date = '$purchase_date', id_user = '$id_user', id_customer = '$id_customer' WHERE id_order = '$id_order'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch($action){
        case '':
            $array = indexOrder();
            break;
        case 'create':
            $array = createOrder();
            break;
        case 'store':
            storeOrder();
            break;
        case 'edit':
            $array = editOrder();
            break;
        case 'update':
            updateOrder();
            break;
    }
?>