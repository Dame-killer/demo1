<?php

function index()
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

// function click(){
//     include_once 'connect\openConnect.php';
//     $sql = "SELECT * FROM product INNER JOIN category ON product.id_category = category.id_category WHERE name_category;   ";
//     $products = mysqli_query($connect, $sql);
//     include_once 'connect\closeConnect.php';
//     return $products;

// }

switch ($action) {
    case '':
        $array = index();
        break;
}
