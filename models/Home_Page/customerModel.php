<?php
    function customerlogin(){
        $email_customer = $_POST['email_customer'];
        $password_customer = $_POST['password_customer'];
        include_once 'connect\openConnect.php';
        $sql = "SELECT *, COUNT(*) AS count_customer FROM customer WHERE email_customer = '$email_customer' AND password_customer = '$password_customer'";
        $customers = mysqli_query($connect, $sql);
        include_once 'connect\closeConnect.php';
        foreach ($customers as $customer){
            if($customer['count_customer'] == 0){
                return 0;
            } elseif ($customer['count_customer'] == 1){
                $_SESSION['email_customer'] = $email_customer;
                $_SESSION['id_customer'] = $customer['id_customer'];
                return 1;
            }
        }
    }

    function dangky(){
        $name_customer = $_POST['name_customer'];
        $email_customer = $_POST['email_customer'];
        $password_customer = $_POST['password_customer'];
        $phone_customer = $_POST['phone_customer'];
        $address_customer = $_POST['address_customer'];
        
        include_once 'connect\openConnect.php';
        $sql_check = "SELECT name_customer FROM customer WHERE name_customer = '$name_customer'";
        $query_check = mysqli_query($connect, $sql_check);
        $row_check = mysqli_num_rows($query_check); 
        if($row_check > 0){
            echo "123";

        }else {
        $sql = "INSERT INTO customer(name_customer, password_customer, email_customer, phone_customer, address_customer) VALUES ('$name_customer', '$password_customer', '$email_customer', '$phone_customer', '$address_customer')";
        mysqli_query($connect, $sql);
        include_once 'connect\closeConnect.php';
        }
    }
    function luu(){
        $name_customer = $_POST['name_customer'];
        $email_customer = $_POST['email_customer'];
        $password_customer = $_POST['password_customer'];
        $phone_customer = $_POST['phone_customer'];
        $address_customer = $_POST['address_customer'];
        include_once 'connect\openConnect.php';
        $sql = "INSERT INTO customer(name_customer, password_customer, email_customer, phone_customer, address_customer) VALUES ('$name_customer', '$password_customer', '$email_customer', '$phone_customer', '$address_customer')";
        mysqli_query($connect, $sql);
        include_once 'connect\closeConnect.php';
    
    }



    switch ($action){
        case 'truycapdangnhap':
            $test = customerlogin();
            break;
        case 'truycapdangky':
            dangky();
            break;    
        case 'dangxuat':
            session_destroy();
            break;
        case 'luu':
            luu();
            break;
    }
?>