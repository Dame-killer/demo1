<?php

function indexProduct()
{
    $search = '';
    if (isset($_POST['search'])) {
        $search = $_POST['search'];
    }
    $page = 1;
    if (isset($_GET['page'])) {
        $page = $_GET['page'];
    }
    include_once 'connect/openConnect.php';
    $sqlCount = "SELECT COUNT(*) AS count_record FROM product WHERE name_prd LIKE '%$search%'";
    $counts = mysqli_query($connect, $sqlCount);
    foreach ($counts as $each) {
        $countRecord = $each['count_record'];
    }
    $recordOnePage = 3;
    $countPage = ceil($countRecord / $recordOnePage);
    $start = ($page - 1) * $recordOnePage;
    $end = 3;
    $sqlProduct = "SELECT * FROM product WHERE name_prd LIKE '%$search%' ";
    $products = mysqli_query($connect, $sqlProduct);
    $sql1 = "SELECT * FROM category";
    $categorys = mysqli_query($connect, $sql1);
    include_once 'connect\closeConnect.php';
    $array = array();
    $array['search'] = $search;
    $array['page'] = $countPage;
    $array['categorys'] = $categorys;
    $array['products'] = $products;
    return $array;
}

function show()
{
    $id_prd = $_GET['id_prd'];
    include_once 'connect/openConnect.php';
    // $sqlproduct = "SELECT * FROM product WHERE id_prd = '$id_prd' ";
    // $products = mysqli_query($connect, $sqlproduct);
    $sql = "SELECT * FROM product_detail INNER JOIN product ON product_detail.id_prd = product.id_prd WHERE product.id_prd = '$id_prd' ";

    
    $query = mysqli_query($connect, $sql);
    $products = mysqli_fetch_array($query);
    include_once 'connect\closeConnect.php';
    // $array = array();
    // $array ['products'] = $products;
    // $array ['productdetail'] = $productdetail;
    return $products;
}

switch ($action) {
    case '':
        $array = indexProduct();
        break;
    case 'sanpham':
        $products = show();
        break;
}
