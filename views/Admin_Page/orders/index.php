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
    <title>Đơn hàng</title>
</head>
<body>
    <div class="content">
        <div class="container-fluid pt-4 px-4">
            <div class="bg-secondary text-center rounded p-4">
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <h1 class="mb-0">Quản lý đơn hàng</h1>
                    <a href="indexAP.php?controller=order&action=create">Thêm hóa đơn</a>
                </div>
                <div class="d-flex align-items-center justify-content-between mb-4">
                    <form class="d-flex mt-3" role="search" method="post" action="indexAP.php?controller=order">
                        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="search">
                        <button class="btn btn-success" type="submit">Search</button>
                    </form>
                </div>
                <div class="table-responsive">
                    <table class="table text-start align-middle table-bordered table-hover mb-0">
                        <tr>
                            <th>ID</th>
                            <th>Khách hàng</th>
                            <th>Ngày mua</th>
                            <th>Tổng tiền</th>
                            <th>Nhân viên</th>
                            <th>Trạng thái</th>
                            <th></th>
                            <th></th>
                        </tr>
                        <?php
                            foreach ($array['orders'] as $order){
                        ?>
                        <tr>
                            <td>
                                <?= $order['id_order'] ?>
                            </td>
                            <td>
                                <?= $order['name_customer'] ?>
                            </td>
                            <td>
                                <?= $order['purchase_date'] ?>
                            </td>
                            <td>

                            </td>
                            <td>
                                <?= $order['username'] ?>
                            </td>
                            <td>
                                <?= $order['status'] ?>
                            </td>
                            <td>
                                <a href="">Chi tiết</a>
                            </td>
                            <td>
                                <a href="">Cập nhật</a>
                            </td>
                        </tr>
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
                            <form method="post" action="indexAP.php?controller=order&page=<?= $i ?>">
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
    <script src="jsAP/main.js"></script>
</body>
</html>