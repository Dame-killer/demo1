<?php
    function indexProduct_Detail(){
        $search = '';
        if(isset($_POST['search'])){
            $search = $_POST['search'];
        }
        $page = 1;
        if(isset($_GET['page'])){
            $page = $_GET['page'];
        }
        include_once 'connect/openConnect.php';
        $sqlCount = "SELECT COUNT(*) AS count_record FROM product_detail INNER JOIN product ON product_detail.id_prd = product.id_prd WHERE name_prd LIKE '%$search%'";
        $counts = mysqli_query($connect, $sqlCount);
        foreach ($counts as $each){
            $countRecord = $each['count_record'];
        }
        $recordOnePage = 3;
        $countPage = ceil($countRecord / $recordOnePage);
        $start = ($page - 1) * $recordOnePage;
        $end = 3;
        $sql = "SELECT * FROM product_detail INNER JOIN product ON product_detail.id_prd = product.id_prd WHERE name_prd LIKE '%$search%' LIMIT $start, $end";
        $product_details = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['search'] = $search;
        $array['product_details'] = $product_details;
        $array['page'] = $countPage;
        return $array;
    }
    function createProduct_Detail(){
        include_once 'connect/openConnect.php';
        $sqlProduct = "SELECT * FROM product";
        $products = mysqli_query($connect, $sqlProduct);
        include_once 'connect/closeConnect.php';
        return $products;
    }
    function storeProduct_Detail(){
        $price = $_POST['price'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $hard_drive = $_POST['hard_drive'];
        $graphics_card = $_POST['graphics_card'];
        $screen = $_POST['screen'];
        $color_prd = $_POST['color_prd'];
        $quantity = $_POST['quantity'];
        $id_prd = $_POST['id_prd'];
        include_once 'connect/openConnect.php';
        $sql = "INSERT INTO product_detail(price, cpu, ram, hard_drive, graphics_card, screen, color_prd, quantity, id_prd) VALUES ('$price', '$cpu', '$ram', '$hard_drive', '$graphics_card', '$screen', '$color_prd', '$quantity', '$id_prd')";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function editProduct_Detail(){
        $id_prd_detail = $_GET['id_prd_detail'];
        include_once 'connect/openConnect.php';
        $sqlProduct = "SELECT * FROM product";
        $products = mysqli_query($connect, $sqlProduct);
        $sql = "SELECT * FROM product_detail WHERE id_prd_detail = '$id_prd_detail'";
        $product_details = mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
        $array = array();
        $array['products'] = $products;
        $array['product_details'] = $product_details;
        return $array;
    }
    function updateProduct_Detail(){
        $price = $_POST['price'];
        $id_prd_detail = $_POST['id_prd_detail'];
        $cpu = $_POST['cpu'];
        $ram = $_POST['ram'];
        $hard_drive = $_POST['hard_drive'];
        $graphics_card = $_POST['graphics_card'];
        $screen = $_POST['screen'];
        $color_prd = $_POST['color_prd'];
        $quantity = $_POST['quantity'];
        $id_prd = $_POST['id_prd'];
        include_once 'connect/openConnect.php';
        $sql = "UPDATE product_detail SET price = '$price', cpu = '$cpu', ram = '$ram', hard_drive = '$hard_drive', graphics_card = '$graphics_card', screen = '$screen', color_prd = '$color_prd', quantity = '$quantity', id_prd = '$id_prd' WHERE id_prd_detail = '$id_prd_detail'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    function destroyProduct_Detail(){
        $id_prd_detail = $_GET['id_prd_detail'];
        include_once 'connect/openConnect.php';
        $sql = "DELETE FROM product_detail WHERE id_prd_detail = '$id_prd_detail'";
        mysqli_query($connect, $sql);
        include_once 'connect/closeConnect.php';
    }
    switch ($action){
        case '':
            $array = indexProduct_Detail();
            break;
        case 'create':
            $products = createProduct_Detail();
            break;
        case 'store':
            storeProduct_Detail();
            break;
        case 'edit':
            $array = editProduct_Detail();
            break;
        case 'update':
            updateProduct_Detail();
            break;
        case 'destroy':
            destroyProduct_Detail();
            break;
    }
?>