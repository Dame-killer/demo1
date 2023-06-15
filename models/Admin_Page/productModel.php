<?php
    function indexProduct(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM product WHERE name_prd LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach ($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM product INNER JOIN manufacturer ON product.id_manufacturer = manufacturer.id_manufacturer INNER JOIN category ON product.id_category = category.id_category WHERE name_prd LIKE '%$search%' LIMIT $start, $end";
        $products = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['products'] = $products;
        $array['page'] = $countPage;
        return $array;
    }
    function createProduct(){
        include_once 'connect/openConnect.php';
        $sqlManufacturer = "SELECT * FROM manufacturer";
        $manufacturers = mysqli_query($connect, $sqlManufacturer);
        $sqlCategory = "SELECT * FROM category";
        $categories = mysqli_query($connect, $sqlCategory);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['manufacturers'] = $manufacturers;
        $array['categories'] = $categories;
        return $array;
    }
    function storeProduct(){
        $name_prd = $_POST['name_prd'];
        $img_prd = $_POST['img_prd'];
        $id_manufacturer = $_POST['id_manufacturer'];
        $id_category = $_POST['id_category'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO product(name_prd, img_prd, id_manufacturer, id_category) VALUES ('$name_prd', '$img_prd', '$id_manufacturer', '$id_category')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editProduct(){
        $id_prd = $_GET['id_prd'];
        include_once 'connect/openConnect.php';
        $sqlManufacturer = "SELECT * FROM manufacturer";
        $manufacturers = mysqli_query($connect, $sqlManufacturer);
        $sqlCategory = "SELECT * FROM category";
        $categories = mysqli_query($connect, $sqlCategory);
        $sql = "SELECT * FROM product WHERE id_prd = '$id_prd'";
        $products = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['manufacturers'] = $manufacturers;
        $array['categories'] = $categories;
        $array['products'] = $products;
        return $array;
    }
    function updateProduct(){
        $id_prd = $_POST['id_prd'];
        $name_prd = $_POST['name_prd'];
        $img_prd = $_POST['img_prd'];
        $id_manufacturer = $_POST['id_manufacturer'];
        $id_category = $_POST['id_category'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE product SET name_prd = '$name_prd', img_prd = '$img_prd', id_manufacturer = '$id_manufacturer', id_category = '$id_category' WHERE id_prd = '$id_prd'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyProduct(){
        $id_prd = $_GET['id_prd'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM product WHERE id_prd = '$id_prd'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch ($action){
        case '':
            $array = indexProduct();
            break;
        case 'create':
            $array = createProduct();
            break;
        case 'store':
            storeProduct();
            break;
        case 'edit':
            $array = editProduct();
            break;
        case 'update':
            updateProduct();
            break;
    }
?>