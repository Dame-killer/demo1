<?php
    function indexCategory(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM category WHERE name_category LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM category WHERE name_category LIKE '%$search%' LIMIT $start, $end";
        $categories = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['categories'] = $categories;
        $array['page'] = $countPage;
        return $array;
    }
    function storeCategory(){
        $name_category = $_POST['name_category'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO category(name_category) VALUES ('$name_category')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editCategory(){
        $id_category = $_GET['id_category'];
        include_once 'connect/openConnect.php';
        $sql = "SELECT * FROM category WHERE id_category = '$id_category'";
        $categories = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        return $categories;
    }
    function updateCategory(){
        $id_category = $_POST['id_category'];
        $name_category = $_POST['name_category'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE category SET name_category = '$name_category' WHERE id_category = '$id_category'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyCategory(){
        $id_category = $_GET['id_category'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM category WHERE id_category = '$id_category'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch($action){
        case '':
            $array = indexCategory();
            break;
        case 'store':
            storeCategory();
            break;
        case 'edit':
            $categories = editCategory();
            break;
        case 'update':
            updateCategory();
            break;
        case 'destroy':
            destroyCategory();
            break;
    }
?>