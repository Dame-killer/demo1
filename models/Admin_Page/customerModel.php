<?php
    function indexCustomer(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM customer WHERE name_customer LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach ($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM customer WHERE name_customer LIKE '%$search%' LIMIT $start, $end";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['customers'] = $customers;
        $array['page'] = $countPage;
        return $array;
    }
    function storeCustomer(){
        $name_customer = $_POST['name_customer'];
        $email_customer = $_POST['email_customer'];
        $password_customer = $_POST['password_customer'];
        $phone_customer = $_POST['phone_customer'];
        $address_customer = $_POST['address_customer'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO customer(name_customer, password_customer, email_customer, phone_customer, address_customer) VALUES ('$name_customer', '$password_customer', '$email_customer', '$phone_customer', '$address_customer')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editCustomer(){
        $id_customer = $_GET['id_customer'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM customer WHERE id_customer = '$id_customer'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $customers;
    }
    function updateCustomer(){
        $id_customer = $_POST['id_customer'];
        $name_customer = $_POST['name_customer'];
        $password_customer = $_POST['password_customer'];
        $email_customer = $_POST['email_customer'];
        $phone_customer = $_POST['phone_customer'];
        $address_customer = $_POST['address_customer'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE customer SET name_customer = '$name_customer', password_customer = '$password_customer', email_customer = '$email_customer', phone_customer = '$phone_customer', address_customer = '$address_customer' WHERE id_customer = '$id_customer'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyCustomer(){
        $id_customer = $_GET['id_customer'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM customer WHERE id_customer = '$id_customer'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch($action){
        case '':
            $array = indexCustomer();
            break;
        case 'store':
            storeCustomer();
            break;
        case 'edit':
            $customers = editCustomer();
            break;
        case 'update':
            updateCustomer();
            break;
        case 'destroy':
            destroyCustomer();
            break;
    }
?>