<?php
    function loginUser(){
        $email_user = $_POST['email_user'];
        $password_user = $_POST['password_user'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT *, COUNT(*) AS count_user FROM user WHERE email_user = '$email_user' AND password_user = '$password_user'";
        $users = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        foreach ($users as $user){
            if($user['count_user'] == 0){
                return 0;
            } elseif ($user['count_user'] == 1){
                $_SESSION['email_user'] = $email_user;
                $_SESSION['id_user'] = $user['id_user'];
                return 1;
            }
        }
    }
    function indexUser(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM user WHERE username LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach ($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM user WHERE username LIKE '%$search%' LIMIT $start, $end";
        $users = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['users'] = $users;
        $array['page'] = $countPage;
        return $array;
    }
    function storeUser(){
        $username = $_POST['username'];
        $email_user = $_POST['email_user'];
        $password_user = $_POST['password_user'];
        $phone_user = $_POST['phone_user'];
        $address_user = $_POST['address_user'];
        $role = $_POST['role'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO user(username, password_user, email_user, phone_user, address_user, role) VALUES ('$username', '$password_user', '$email_user', '$phone_user', '$address_user', '$role')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editUser(){
        $id_user = $_GET['id_user'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM user WHERE id_user = '$id_user'";
        $users = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $users;
    }
    function updateUser(){
        $id_user = $_POST['id_user'];
        $username = $_POST['username'];
        $password_user = $_POST['password_user'];
        $email_user = $_POST['email_user'];
        $phone_user = $_POST['phone_user'];
        $address_user = $_POST['address_user'];
        $role = $_POST['role'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE user SET username = '$username', password_user = '$password_user', email_user = '$email_user', phone_user = '$phone_user', address_user = '$address_user', role = '$role' WHERE id_user = '$id_user'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyUser(){
        $id_user = $_GET['id_user'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM user WHERE id_user = '$id_user'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch($action){
        case '':
            $array = indexUser();
            break;
        case 'loginAccess':
            $test = loginUser();
            break;
        case 'logout':
            session_destroy();
            break;
        case 'store':
            storeUser();
            break;
        case 'edit':
            $users = editUser();
            break;
        case 'update':
            updateUser();
            break;
        case 'destroy':
            destroyUser();
            break;
    }
?>