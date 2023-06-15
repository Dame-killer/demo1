<?php

    function indexCategory()
    {
        include_once 'connect\openConnect.php';
        $sql = "SELECT * FROM category";
        $categorys = mysqli_query($connect, $sql);
        include_once 'connect\closeConnect.php';
        return $categorys;
    }

    // function click(){
    //     include_once 'connect\openConnect.php';
    //     $sqlProduct = "SELECT * FROM product INNER JOIN category ON product.id_category = category.id_category WHERE name_category;   ";
    //     $products = mysqli_query($connect, $sqlProduct);
    //     include_once 'connect\closeConnect.php';
    //     return $products;

    // }


switch ($action) {
    case '':
        $categorys = indexCategory();
        break;
        // case 'clickks':
        //     $products = click();
        //     break;
    
}
