<?php
    function indexManufacturer(){
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
        $sql = "SELECT * FROM manufacturer WHERE name_manufacturer LIKE '%$search%' LIMIT $start, $end";
        $manufacturers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['manufacturers'] = $manufacturers;
        $array['page'] = $countPage;
        return $array;
    }
    function storeManufacturer(){
        $name_manufacturer = $_POST['name_manufacturer'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO manufacturer(name_manufacturer) VALUES ('$name_manufacturer')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editManufacturer(){
        $id_manufacturer = $_GET['id_manufacturer'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM manufacturer WHERE id_manufacturer = '$id_manufacturer'";
        $manufacturers = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $manufacturers;
    }
    function updateManufacturer(){
        $id_manufacturer = $_POST['id_manufacturer'];
        $name_manufacturer = $_POST['name_manufacturer'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE manufacturer SET name_manufacturer = '$name_manufacturer' WHERE id_manufacturer = '$id_manufacturer'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyManufacturer(){
        $id_manufacturer = $_GET['id_manufacturer'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM manufacturer WHERE id_manufacturer = '$id_manufacturer'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch($action){
        case '':
            $array = indexManufacturer();
            break;
        case 'store':
            storeManufacturer();
            break;
        case 'edit':
            $manufacturers = editManufacturer();
            break;
        case 'update':
            updateManufacturer();
            break;
        case 'destroy':
            destroyManufacturer();
            break;
    }
?>