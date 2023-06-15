<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="img/favicon.ico" rel="icon">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />
    <link href="cssAP/bootstrap.min.css" rel="stylesheet">
    <link href="cssAP/style.css" rel="stylesheet">
    <title>Chi tiết sản phẩm</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="mb-0">Quản lý chi tiết sản phẩm</h1>
                    <a href="indexAP.php?controller=product_detail&action=create">Thêm chi tiết sản phẩm</a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <form class="d-flex mt-3" role="search" method="post" action="indexAP.php?controller=product_detail">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <thead>
                            <tr class="text-white">
                                <th scope="col">ID</th>
                                <th scope="col">Tên sản phẩm</th>
                                <th scope="col">CPU</th>
                                <th scope="col">RAM</th>
                                <th scope="col">Ổ cứng</th>
                                <th scope="col">Card đồ họa</th>
                                <th scope="col">Màn hình</th>
                                <th scope="col">Giá</th>
                                <th scope="col">Số lượng</th>
                                <th></th>
                                <th></th>
                            </tr>
                        </thead>
                        <?php
                            foreach($array['product_details'] as $product_detail){
                        ?>
                        <tbody>
                            <tr>
                                <td>
                                    <?= $product_detail['id_prd_detail'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['name_prd'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['cpu'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['ram'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['hard_drive'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['graphics_card'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['screen'] ?>
                                </td>
                                <td>
                                    <?= $product_detail['price'] ?>VNĐ
                                </td>
                                <td>
                                    <?= $product_detail['quantity'] ?>
                                </td>
                                <td>
                                    <a href="indexAP.php?controller=product_detail&action=edit&id_prd_detail=<?= $product_detail['id_prd_detail'] ?>">Cập nhật</a>
                                </td>
                                <td>
                                    <a href="indexAP.php?controller=product_detail&action=destroy&id_prd_detail=<?= $product_detail['id_prd_detail'] ?>">Xóa</a>
                                </td>
                            </tr>
                        </tbody>
                        <?php
                            }
                        ?>
                    </table>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination">
                        <?php
                            for($i = 1; $i <= $array['page']; $i++){
                        ?>
                        <li class="page-item">
                            <form method="post" action="indexAP.php?controller=product_detail&page=<?= $i ?>">
                                <input type="hidden" name="search" value="<?= $array['search'] ?>">
                                <input type="hidden" name="page" value="<?= $i ?>">
                                <button><?= $i ?></button>
                            </form>
                        </li>
                        <?php
                            }
                        ?>
                    </ul>
                </nav>
            </div>
        </div> 
    </div>
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>
    <script src="jsAPmain.js"></script>
</body>
</html>